<?php
get_header(); ?>

		<section class="contents-top">
			<img class="background-image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/top-5.jpg" alt="">
			<div class="contents-inner">
				<div class="contents-wrapper">
					<div class="catch-message">
						<img class="catch-message-paragraph" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/top-message.svg" alt="「これから」を一緒に考えましょう。">
						<div class="btn-top-message">
							メッセージへ
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contents-article">
			<div class="contents-wrapper">
				<h2>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/h2-news.svg" alt="NEWS">
				</h2>
				<div class="article-list">
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
								<time><?php the_time('Y/m/d'); ?></time>
								<h4><?php if(mb_strlen($post->post_title)>35) { $title= mb_substr($post->post_title,0,35) ; echo $title. '…' ;
										} else {echo $post->post_title;}?></h4>
								<div class="tag-list"></div>
							</a>
						</li>
						<?php endforeach; wp_reset_postdata(); ?>
								<?php remove_filter('the_category', 'add_category_en_name'); ?>

							<?php else : ?>
								<?php get_template_part( 'template-parts/content', 'none' ); ?>

							<?php endif; ?>
					</ul>
				</div>
			</div>
		</section>

	</main>


<?php get_footer(); ?>
