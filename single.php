<?php
get_header(); ?>

<?php if(have_posts()):while(have_posts()):the_post(); ?>

		<section class="content article">
			<time><?php the_time('Y/m/d'); ?></time>
			<h2><?php echo $post->post_title; ?></h2>
			<div class="text-content">
				<?php the_content(); ?>
			</div>
			<section class="footer">
				<div class="share-list">
					<ul>
						<li>

						</li>
						<li>

						</li>
					</ul>
				</div>
				<div class="author">
				<?php $author_id = $post->post_author; ?>
					<p>この記事を書いたのは</p>
					<?php echo get_avatar($author_id, 80); ?>
					<h5><?php the_author(); ?></h5>
					<p class="role"><?php the_author_meta('position'); ?></p>
				</div>
			</section>
		</section>

<?php endwhile;endif; ?>

	</main>

<?php get_footer(); ?>