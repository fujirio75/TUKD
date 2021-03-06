<?php?>
<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124740773-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-124740773-1');
	</script>
	<script src='https://www.google.com/recaptcha/api.js?render=6LcCcH8UAAAAALQiPCurenBVRXYa1n-LGrzc1-5M'></script>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="//kada-lab.jp">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no,address=no,email=no">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta property="fb:app_id" content="266420997323154">
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<link rel="canonical" href="//kada-lab.jp">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/common.css">
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyOWxUm0wD1O9kdIRsW6CBt5HliZrAiS0&callback=initMap" type="text/javascript"></script>
	<script>
		var wp_path = "<?php echo get_template_directory_uri();?>";//script.jsへの受け渡し
    function initMap() {
      var latlng = new google.maps.LatLng( 34.276179, 135.073952 );//中心の緯度, 経度
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,//ズームの調整
        center: latlng//上で設定した中心
      });
      var marker = new google.maps.Marker({
        position: latlng,
        map: map
      });
    }
	</script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/script.js"></script>
</head>
<body <?php body_class(); ?>>

	<header>
		<div class="header-inner">
			<div id="logo" class="header-logo">
				<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/kada-lab-logo.svg" alt="logo"></a>
			</div>
			<nav class="header-nav">
				<ul>
					<a href="/#about">
						<li>加太分室について</li>
					</a>
					<a href="/#article">
						<li>ニュース</li>
					</a>
					<!-- <a href="/document/">
						<li>研究資料</li>
					</a> -->
					<a href="/#contact">
						<li>アクセス</li>
					</a>
					<a href="/contactform/contact">
						<li class="header-action-btn">お問い合わせ</li>
					</a>
				</ul>
			</nav>
		</div>
	</header>

	<?php if ( is_singular() ): ?>

		<div class="sns-post-bar">
			<ul>
				<a href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>-東京大学生産技術研究所川添研究室加太分室地域ラボ" rel="nofollow" target="_blank">
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-twitter.svg" alt="Twitter">
					</li>
				</a>
				<a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" rel="nofollow" target="_blank">
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-facebook.svg" alt="Facebook">
					</li>
				</a>
			</ul>
		</div>

	<?php else: ?>

		<div class="sns-post-bar">
			<ul>
				<a href="https://twitter.com/share?url=http://kada-lab.jp/&text=東京大学生産技術研究所川添研究室加太分室地域ラボ" rel="nofollow" target="_blank">
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-twitter.svg" alt="Twitter">
					</li>
				</a>
				<a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" rel="nofollow" target="_blank">
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-facebook.svg" alt="Facebook">
					</li>
				</a>
			</ul>
		</div>

	<?php endif; ?>




	<main>
