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
	<meta property="og:title" content="加太分室 地域ラボ" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="東京大学生産技術研究所川添研究室加太分室地域ラボはデザインと政策の新しい関係を実践していきます。" />
	<meta property="og:url" content="http://kada-lab.jp" />
	<meta property="og:site_name" content="加太分室 地域ラボ" />
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/ogp.png" />
	<meta property="fb:app_id" content="266420997323154">
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<link rel="canonical" href="//kada-lab.jp">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/icon.png">
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

	<div class="sns-post-bar">
		<ul>
			<a href="https://twitter.com/intent/tweet?text=%E6%9D%B1%E4%BA%AC%E5%A4%A7%E5%AD%A6+%E7%94%9F%E7%94%A3%E6%8A%80%E8%A1%93%E7%A0%94%E7%A9%B6%E6%89%80+%E5%B7%9D%E6%B7%BB%E7%A0%94%E7%A9%B6%E5%AE%A4+%E5%8A%A0%E5%A4%AA%E5%88%86%E5%AE%A4+%E5%9C%B0%E5%9F%9F%E3%83%A9%E3%83%9C+-+http%3A%2F%2Fkada-lab.jp%2F">
				<li>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-twitter.svg" alt="Twitter">
				</li>
			</a>
			<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkada-lab.jp%2F&amp;src=sdkpreparse">
				<li>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-facebook.svg" alt="Facebook">
				</li>
			</a>
		</ul>
	</div>


	<main>
