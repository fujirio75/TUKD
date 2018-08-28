<?php
get_header(); ?>

		<section class="content article-list">
			<h3>全ての記事一覧</h3>
			<ul>
			<?php if ( have_posts() ) : ?>
			<?php $primary_posts = get_posts(array('numberposts' => 99)); ?>
			<?php foreach ( $primary_posts as $post ) : setup_postdata( $post ); ?>
				<li>
				<?php
					$_cat = get_the_category();
					$cat_name = $_cat[0] -> name;
					$title = get_the_title();
				?>
				<?php add_filter('the_category', 'add_category_en_name'); ?>
					<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
						<div class="category"></div>
						<?php the_post_thumbnail(); ?>
						<section class="info">
							<h4><?php if(mb_strlen($post->post_title)>35) { $title= mb_substr($post->post_title,0,35) ; echo $title. '…' ;
									} else {echo $post->post_title;}?></h4>
							<time><?php the_time('Y/m/d'); ?></time>
							<?php the_excerpt(); ?>
							<div class="tag-list"></div>
						</section>
					</a>
				</li>
				<?php endforeach; wp_reset_postdata(); ?>
						<?php remove_filter('the_category', 'add_category_en_name'); ?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
			</ul>
		</section>

	</main>


<?php get_footer(); ?>