<?php
/**
 * design_gakubu functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package kadalab
 */

function custom_search($search, $wp_query  ) {
	//query['s']があったら検索ページ表示
	if (isset($wp_query->query['s'])) $wp_query->is_search = true;
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);

add_filter( 'query_vars', 'my_query_vars' );
function my_query_vars( $public_query_vars ) {
    return array_merge( $public_query_vars, array( 'cat_slug' ) );
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//ページャー機能
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if (1 != $pages) {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "&laquo; First";
         if($paged > 1 && $showitems < $pages) echo "&lsaquo; Previous";

         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"".$i."";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "Last &raquo;";
         echo "</div>\n";
     }
}

remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head');
// Since 4.4
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','rest_output_link_wp_head');
add_theme_support( 'post-thumbnails' );


function my_setup_theme() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'my_setup_theme' );


if(!function_exists('_log')){
	function _log($message) {
	  if (WP_DEBUG === true) {
		if (is_array($message) || is_object($message)) {
		  error_log(print_r($message, true));
		} else {
		  error_log($message);
		}
	  }
	}
  }
  



/*********************
OGPタグ/Twitterカード設定を出力
*********************/
function my_meta_ogp() {
 if( is_front_page() || is_home() || is_singular() ){
	 global $post;
	 $ogp_title = '';
	 $ogp_descr = '';
	 $ogp_url = '';
	 $ogp_img = '';
	 $insert = '';

	 if( is_singular() ) { //記事＆固定ページ
			setup_postdata($post);
			$ogp_title = $post->post_title;
			$ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
			$ogp_url = get_permalink();
			wp_reset_postdata();
	 } elseif ( is_front_page() || is_home() ) { //トップページ
			$ogp_title = get_bloginfo('name');
			$ogp_descr = get_bloginfo('description');
			$ogp_url = home_url();
	 }

	 //og:type
	 $ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';

	 //og:image
	 if ( is_singular() && has_post_thumbnail() ) {
			$ps_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			$ogp_img = $ps_thumb[0];
	 } else {
		$ogp_img = 'http://kada-lab.jp/wp-content/themes/kadalab/assets/img/icon/ogp.png';
	 }

	 //出力するOGPタグをまとめる
	 $insert .= '	<meta property="og:title" content="'.esc_attr($ogp_title).'" />' . "\n";
	 $insert .= '	<meta property="og:description" content="'.esc_attr($ogp_descr).'" />' . "\n";
	 $insert .= '	<meta property="og:type" content="'.$ogp_type.'" />' . "\n";
	 $insert .= '	<meta property="og:url" content="'.esc_url($ogp_url).'" />' . "\n";
	 $insert .= '	<meta property="og:image" content="'.esc_url($ogp_img).'" />' . "\n";
	 $insert .= '	<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'" />' . "\n";


	 echo $insert;
 }
} //END my_meta_ogp

add_action('wp_head','my_meta_ogp');//headにOGPを出力


// ユーザープロフィールの項目のカスタマイズ
function my_user_meta($wb)
{
	//項目の追加
	$wb['position'] = '学部学科';

	return $wb;
}
add_filter('user_contactmethods', 'my_user_meta', 10, 1);
