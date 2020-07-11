<?php/*
Template Name: Archive
*/
?>
<?php get_header();?>


<section class="contents-top">
	<div class="title-container">
		<h1>BLOG</h1>
		<p>過去のブログ記事を掲載しています</p>
	</div>
</section>
<section class="contents-article-list">
	<div class="article-list">
		<ul>
			<?php
			$paged = (int) get_query_var('paged');
			$category = get_the_category();
			$category = $category[0];
			$args = array(
				'cat'=> $category->cat_ID,
				'posts_per_page' => 5,
				'paged' => $paged,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_type' => 'post',
				'post_status' => 'publish'
			);
			$the_query = new WP_Query($args);
			if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<li class="article-contents">
			<?php
				$_cat = get_the_category();
				$cat_name = $_cat[0] -> name;
				$cat_slug = $_cat[0] -> slug;
				$title = get_the_title();										// 記事タイトルを取得
				$thumb_id = get_post_thumbnail_id();                         	// アイキャッチ画像のIDを取得
				$thumb_img = wp_get_attachment_image_src($thumb_id, 'large');  	// $sizeサイズの画像内容を取得
				$thumb_src = $thumb_img[0];    									// 画像のurlだけ取得
			?>
			<?php add_filter('the_category', 'add_category_en_name'); ?>
				<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
					<div class="article-contents-image">
						<?php echo '<div class="article-contents-image-contents" style=" background-image: url('.$thumb_src.'); ">';?>
					</div>
					</div>
					<?php echo '<div class="article-contents-category '.$cat_slug.'">';?>
						<?php $cat = get_the_category(); for ($i = 0; $i < count($cat); ++$i) { echo $cat[$i]->cat_name;}?>
					</div>
					<time><?php the_time('Y.m.d'); ?></time>
					<h4><?php if(mb_strlen($post->post_title)>35) { $title= mb_substr($post->post_title,0,35) ; echo $title. '…' ;
							} else {echo $post->post_title;}?></h4>
				</a>
			</li>
			<?php endwhile; endif; ?>
		</ul>
	</div>
</section>
<section class="contents-paginate-links">
	<div class="paginate-links">
	<?php
	_log(max_num_pages);
	if ($the_query->max_num_pages > 1) {
		echo paginate_links(array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => '?paged=%#%',
			'current' => max(1, $paged),
			'total' => $the_query->max_num_pages
		));
	}
	?>
	</div>
</section>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
