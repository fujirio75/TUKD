<?php?>
<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124740773-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-124740773-1');
	</script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="//kada-lab.jp">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no,address=no,email=no">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="canonical" href="//kada-lab.jp">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/blog/img/icon/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/blog/img/icon/icon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/common.css">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script>

	</script>
</head>
<body <?php body_class(); ?>>

	<header>
		<div class="header-inner">
			<div class="header-logo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/kada-lab-logo.svg" alt="logo">
			</div>
			<nav class="header-nav">
				<ul>
					<a href="about/">
						<li>加太分室について</li>
					</a>
					<a href="blog/">
						<li>ニュース</li>
					</a>
					<a href="document/">
						<li>研究資料</li>
					</a>
					<a href="#access">
						<li>アクセス</li>
					</a>
					<a href="#contact">
						<li class="header-action-btn">お問い合わせ</li>
					</a>
				</ul>
			</nav>
		</div>
	</header>

	<div class="sns-post-bar">
		<ul>
			<a href="">
				<li>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-twitter.svg" alt="Twitter">
				</li>
			</a>
			<a href="">
				<li>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-facebook.svg" alt="Facebook">
				</li>
			</a>
		</ul>
	</div>


	<main>
