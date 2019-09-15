<?php
get_header(); ?>

		<section id="top" class="contents-top contents-colorscheme-transparent">
			<div id="top-back" class="background-image"></div>
			<div class="contents-inner">
				<div class="contents-wrapper">
					<div class="catch-message">
						<img class="catch-message-paragraph" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/top-message.svg" alt="「これから」を一緒に考えましょう。">
						<a href="#about">
							<div class="btn-top-message">
							メッセージへ
							</div>
						</a>
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
					<?php
						if ( have_posts() ) :
						$primary_posts = get_posts(array('numberposts' => 2));
						foreach ( $primary_posts as $post ) : setup_postdata( $post );
					?>
						<li class="article-contents">
						<?php
							$_cat = get_the_category();
							$cat_name = $_cat[0] -> name;
							$cat_slug = $_cat[0] -> slug;
							$title = get_the_title();																			// 記事タイトルを取得
							$thumb_id = get_post_thumbnail_id();                         	// アイキャッチ画像のIDを取得
							$thumb_img = wp_get_attachment_image_src($thumb_id,large);  	// $sizeサイズの画像内容を取得
							$thumb_src = $thumb_img[0];    																// 画像のurlだけ取得
						?>
						<?php add_filter('the_category', 'add_category_en_name'); ?>
							<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
								<?php echo '<div class="article-contents-category '.$cat_slug.'">';?>
									<?php $cat = get_the_category(); for ($i = 0; $i < count($cat); ++$i) { echo $cat[$i]->cat_name;}?>
								</div>
								<time><?php the_time('Y.m.d'); ?></time>
								<h4><?php if(mb_strlen($post->post_title)>35) { $title= mb_substr($post->post_title,0,35) ; echo $title. '…' ;
										} else {echo $post->post_title;}?></h4>
							</a>
							<?php echo '<img src="'.$thumb_src.'">';?>
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
							<?php $primary_posts = get_posts(array('numberposts' => 4, 'offset' => 2)); ?>
							<?php foreach ( $primary_posts as $post ) : setup_postdata( $post ); ?>
							<?php
								$_cat = get_the_category();
								$cat_name = $_cat[0] -> name;
								$cat_slug = $_cat[0] -> slug;
								$title = get_the_title();
								$thumb_id = get_post_thumbnail_id();                         	// アイキャッチ画像のIDを取得
								$thumb_img = wp_get_attachment_image_src($thumb_id,large);  	// $sizeサイズの画像内容を取得
								$thumb_src = $thumb_img[0];    																// 画像のurlだけ取得
							?>
							<?php add_filter('the_category', 'add_category_en_name'); ?>
							<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
								<li class="article-contents">
									<?php echo '<img src="'.$thumb_src.'">';?>
									<div class="article-contents-text">
										<?php echo '<div class="article-contents-category '.$cat_slug.'">';?>
											<?php $cat = get_the_category(); for ($i = 0; $i < count($cat); ++$i) { echo $cat[$i]->cat_name;}?>
										</div>
										<h4><?php if(mb_strlen($post->post_title)>35) { $title= mb_substr($post->post_title,0,35) ; echo $title. '…' ;} else {echo $post->post_title;}?></h4>
										<time><?php the_time('Y.m.d'); ?></time>
									</div>
								</li>
							</a>
							<?php endforeach; wp_reset_postdata(); ?>
							<?php remove_filter('the_category', 'add_category_en_name'); ?>
							<?php else : ?>
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
							<?php endif; ?>
						</ul>
						<a href="article/">
						<div class="btn-more">
							さらに前の記事はこちら
						</div>
						</a>
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
						<h3>知識をローカライズする拠点</h3>
						<div class="contents-description-paragraph-wrapper">
							<p>
								東京大学は、1877年の創設以来、世界中の人々と協働し、様々な知識を生み出すことで、社会に貢献しようと試みてきました。<br>
								しかし、価値観が多様化し、地域の抱える問題が拡張した現代においては、世界のどこでも通用する普遍的な知識だけでなく、場所ごとの状況に対応するための、いわば「知識のローカライズ」が必要です。<br>
							</p>
							<p>
								加太分室では、	  東京大学の最新の研究成果を援用しつつ、住民組織や行政と連動し、デザインと政策の新しい関係を実践していきます。<br>
								地域の拠点から生まれる新しい知恵によって、ひろく社会に貢献していくことが、21世紀の私たちの使命だと考えています。
							</p>
						</div>
					</div>
					<div class="contents-description-paragraph">
						<h3>MEMBER</h3>
						<div class="contents-description-paragraph-wrapper">
							<div class="contents-description-profile">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/prof-kawazoe.jpg" alt="川添善行">
								<h4>川添 善行</h4>
								<p>東京大学生産技術研究所 准教授</p>
							</div>
							<div class="contents-description-profile">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/prof-aoki.jpg" alt="青木佳子">
								<h4>青木 佳子</h4>
								<p>東京大学生産技術研究所 特任助教</p>
							</div>
							<div class="contents-description-profile">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/prof-kawasaki.jpg" alt="川﨑麻衣子">
								<h4>川﨑 麻衣子</h4>
								<p>デザイナー・運営サポート</p>
							</div>
						</div>
					</div>
					<!-- <div class="btn-more">
						くわしくはこちら
					</div> -->
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
						<div class="map-wrapper">
							<div id="map">
							</div>
							<a href="https://goo.gl/maps/cho1dS1GzTR2">
								<div class="btn-more">
								GoogleMapsでひらく
								</div>
							</a>
						</div>
					</div>
					<div class="contents-col-inner">
						<h3>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/h3-contact.svg" alt="contactform">
						</h3>
						<div class="form-wrapper">
							<p>加太分室へのご相談や活動に関するお問い合わせは下記リンク先のフォームよりお願いいたします。</p>
							<a href="contactform/contact">
								<div class="btn-more">
								お問い合わせフォームへ
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>


<?php get_footer(); ?>
