<?php
get_header(); ?>

		<section id="top" class="contents-top contents-colorscheme-transparent">
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

		<section id="article" class="contents-article contents-colorscheme-white">
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
								<time><?php the_time('Y/m/d'); ?></time>
								<h4><?php if(mb_strlen($post->post_title)>35) { $title= mb_substr($post->post_title,0,35) ; echo $title. '…' ;
										} else {echo $post->post_title;}?></h4>
								<div class="tag-list"></div>
							</a>
							<?php the_post_thumbnail(); ?>
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

		<section id="article-before" class="contents-before-article contents-colorscheme-transparent">
			<div class="contents-wrapper">
				<i></i>
				<div class="contents-before-article-contents">
					<h3>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/h3-before-article.svg" alt="これまでの記事">
					</h3>
					<div class="contents-before-article-contents-inner">
						<ul>
								<?php if ( have_posts() ) : ?>
								<?php $primary_posts = get_posts(array('numberposts' => 99)); ?>
								<?php foreach ( $primary_posts as $post ) : setup_postdata( $post ); ?>
								<?php
									$_cat = get_the_category();
									$cat_name = $_cat[0] -> name;
									$title = get_the_title();
								?>
								<?php add_filter('the_category', 'add_category_en_name'); ?>
								<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
								<li>
									<time><?php the_time('Y/m/d'); ?></time>
									<h4><?php if(mb_strlen($post->post_title)>35) { $title= mb_substr($post->post_title,0,35) ; echo $title. '…' ;
											} else {echo $post->post_title;}?></h4>
								</li>
							</a>
						<?php endforeach; wp_reset_postdata(); ?>
								<?php remove_filter('the_category', 'add_category_en_name'); ?>

							<?php else : ?>
								<?php get_template_part( 'template-parts/content', 'none' ); ?>

							<?php endif; ?>
						</ul>
						<div class="btn-more">
							さらに前のものはこちら
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="contents-about contents-colorscheme-brand-accent">
			<div class="contents-wrapper">
				<h2>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/h2-about.svg" alt="ABOUT">
				</h2>
				<div class="contents-description">
					<div class="contents-description-paragraph">
						<p>
							「東京大学 生産技術研究所 川添研究室 加太分室 地域ラボ」という長い名前のラボが、和歌山市の加太地域に設置されることになりました。<br>地域ラボの開設後は、私どものビジョンと市の政策を連動させ、空き家の建て替えや下水整備、電柱の地中化などのインフラ整備、地区の持つ漁業ブランドの強化による雇用創出など、デザインと政策の新しい関係を実践する予定です。
						</p>
					</div>
					<div class="btn-more">
						くわしくはこちら
					</div>
				</div>
			</div>
		</section>

		<section id="contact" class="contents-contact contents-colorscheme-white">
			<div class="contents-wrapper">
				<h2>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/h2-contact.svg" alt="CONTACT">
				</h2>
				<div class="contents-col">
					<div class="contents-col-inner">
						<h3>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/h3-googlemaps.svg" alt="Googlemaps">
						</h3>
						<div id="map"></div>
					</div>
					<div class="contents-col-inner">
						<h3>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/h3-contact.svg" alt="contactform">
						</h3>
						<div class="form-wrapper">

						</div>
					</div>
				</div>
			</div>
		</section>

	</main>


<?php get_footer(); ?>
