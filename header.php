<?php
?><!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="//kada-lab.jp">
	<meta name="description" content="セイカ未来プロジェクトは新しい未来を提案します。">
	<meta name="format-detection" content="telephone=no,address=no,email=no">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="canonical" href="//kada-lab.jp">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/blog/img/icon/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/blog/img/icon/icon.png">
	<link rel="stylesheet" href="/assets/css/sanitize.css">
	<link rel="stylesheet" href="/css/common.css">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/blog/assets/js/jquery-2.2.1.min.js"></script>
	<script>

	</script>
</head>
<body <?php body_class(); ?>>

	<header class="flex">
		<a href="//kada-lab.jp"><img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/blog/img/seika-mirai_logo_w-sq.svg"></a>
		<nav>
			<ul>
				<li><a href="<?php echo home_url(); ?>/../blog/" title="">BLOG</a></li>
				<li><a href="<?php echo home_url(); ?>/../works/">WORKS</a>
			</ul>
		</nav>
	</header>


	<main>

		<h1 class="title">BLOG</h1>
		<small class="title-info">日々の活動や、注目した最新技術など</small>
		<?php $_cat = get_the_category() ?>
		<nav class="category clearfix">
			<ul>
				<li class="all"><a href="<?php echo home_url(); ?>">ALL</a></li>
				<li><a href="<?php echo get_category_link( get_category_by_slug('press') -> term_id ); ?>">PRESS</a></li>
				<li><a href="<?php echo get_category_link( get_category_by_slug('diary') -> term_id ); ?>">DIARY</a></li>
				<li><a href="<?php echo get_category_link( get_category_by_slug('casestudy') -> term_id ); ?>">CASESTUDY</a></li>
				<li><a href="<?php echo get_category_link( get_category_by_slug('other') -> term_id ); ?>">OTHER</a></li>
			</ul>
		</nav>
