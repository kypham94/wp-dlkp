<?php
require get_template_directory() . '/libs/options.php';
/********************************************************************
//remove tag width & height in post
********************************************************************/
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

/********************************************************************
//config excerpt length
********************************************************************/
function custom_excerpt_length( $length ) {
	return 300;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter( 'wpseo_next_rel_link', '__return_false' );

add_filter( 'wpseo_prev_rel_link', '__return_false' );

remove_action('wp_head', 'rel_canonical');
add_action('wp_head', 'my_rel_canonical');

function my_rel_canonical() {
    if (is_page('item') && isset($_GET['pubID'])) {
        global $post;
        $link = get_permalink($post->ID) . '?pubID=' . absint($_GET['pubID']);
        echo "<link rel='canonical' href='$link' />\n";
    }else if(is_category()) {
	    $obj_id = get_queried_object_id();
		$current_url = get_term_link( $obj_id );
	    echo '<link rel="canonical" href="' .  $current_url . '" />';
	}else if(is_home()) {
		echo '<link rel="canonical" href="https://dulichkhampha.net" />';
	} else {
        rel_canonical();
    }
}
/********************************************************************
//Allow HTML tags in Widget title
********************************************************************/
function html_widget_title( $var) {
	$var = (str_replace( '[', '<', $var ));
	$var = (str_replace( ']', '>', $var ));
	$var = (str_replace( '__', '"', $var ));
	return $var ;
}
add_filter( 'widget_title', 'html_widget_title' );
/********************************************************************
//register short code url
********************************************************************/
add_filter('widget_text', 'do_shortcode');
// [url_base]
function url_base_function() {
	return get_bloginfo( "url" );
}
add_shortcode('url_base', 'url_base_function');


/********************************************************************
//register my menu in theme
********************************************************************/
add_action( 'init', 'register_my_menus' );
function register_my_menus(){
	register_nav_menus(
	array(
		'main_nav' => 'Menu chính',
		'link_nav' => 'Liên kết',
		'info_nav' => 'Thông tin',
		'footer_nav' => 'Menu Footer',
		)
	);
}


/********************************************************************
global teaser function
********************************************************************/
function teaser($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'[...]';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt.'...';
}
/********************************************************************
Post Views
********************************************************************/
function setpostview($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function getpostviews($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
/********************************************************************
get link img post
********************************************************************/
function get_link_img_post(){
	global $post;
	preg_match_all('/src="(.*)"/Us',get_the_content(),$matches);
	$link_img_post = $matches[1];
	return $link_img_post;
}

/********************************************************************
check link thumbnail
********************************************************************/
function check_link_thumb($post_id) {
	$img_customfield = get_post_meta($post_id, 'thumb', true);
	$img_attachment_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	// get thumbnail
	if ($img_customfield) {
		$link_thumb = $img_customfield;
	} elseif ($img_attachment_image) {
		$link_thumb = $img_attachment_image[0];
	} else {
		$link_thumb = "";
	}
	return $link_thumb;
}
/********************************************************************
get link thumbnail
********************************************************************/
function get_link_thumb($post_id) {
	$img_customfield = get_post_meta($post_id, 'thumb', true);
	$img_attachment_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	$img_uploads = get_children( array('post_parent' => $post_id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID', 'numberposts' => 1) );
	
	$post_content = get_post_field('post_content', $post_id);
	$img_post = preg_match_all('/\< *[img][^\>]*src *= *[\"\']{0,1}([^\"\'\ >]*)/',$post_content,$matches);
	$img_default = get_bloginfo('template_directory').'/images/no-thumb.png';
	
	// get thumbnail
	if ($img_customfield) {
		$link_thumb = $img_customfield;
	} elseif ($img_attachment_image) {
		$link_thumb = $img_attachment_image[0];
	} elseif ($img_uploads == true) {
		foreach($img_uploads as $id => $attachment) {
			$img = wp_get_attachment_image_src($id, 'full');
			$link_thumb = $img[0];
		}
	} elseif (count($matches[1]) > 0) {
		$link_thumb = $matches[1][0];
	} else {
		$link_thumb = $img_default;
	}
	return $link_thumb;
}
/********************************************************************
creating thumbnails (no permalink to story, image only)
********************************************************************/
function show_thumb($w,$h,$zc,$cropfrom) {
	global $post;
	$img_customfield = get_post_meta($post->ID, 'thumb', true);
	$img_attachment_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	$img_uploads = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID', 'numberposts' => 1) );
	$img_post = preg_match_all('/\< *[img][^\>]*src *= *[\"\']{0,1}([^\"\'\ >]*)/',get_the_content(),$matches);
	$img_default = get_bloginfo('template_directory').'/images/no-thumb.png';

	$thumbnail = 'thumbnail.php';
	
	// get thumbnail
	if ($img_customfield) {
		print '<img src="'.get_bloginfo('template_directory').'/'.$thumbnail.'?src='.urlencode($img_customfield).'&amp;w='.$w.'&amp;h='.$h.'&amp;zc='.$zc.'&amp;a='.$cropfrom.'" alt="'.get_the_title($post).'" title="'.get_the_title($post).'"/>';
	} elseif ($img_attachment_image) {
		print '<img src="'.get_bloginfo('template_directory').'/'.$thumbnail.'?src='.urlencode($img_attachment_image[0]).'&amp;w='.$w.'&amp;h='.$h.'&amp;zc='.$zc.'&amp;a='.$cropfrom.'" alt="'.get_the_title($post).'" title="'.get_the_title($post).'"/>';
	} elseif ($img_uploads == true) {
		foreach($img_uploads as $id => $attachment) {
			$img = wp_get_attachment_image_src($id, 'full');
			print '<img src="'.get_bloginfo('template_directory').'/'.$thumbnail.'?src='.urlencode($img[0]).'&amp;w='.$w.'&amp;h='.$h.'&amp;zc='.$zc.'&amp;a='.$cropfrom.'" alt="'.get_the_title($post).'" title="'.get_the_title($post).'" />';
		}
	} elseif (count($matches[1]) > 0) {
		print '<img src="'.get_bloginfo('template_directory').'/'.$thumbnail.'?src='.urlencode($matches[1][0]).'&amp;w='.$w.'&amp;h='.$h.'&amp;zc='.$zc.'&amp;a='.$cropfrom.'" alt="'.get_the_title($post).'" title="'.get_the_title($post).'" />';
	} else {
		print '<img src="'.get_bloginfo('template_directory').'/'.$thumbnail.'?src='.urlencode($img_default).'&amp;w='.$w.'&amp;h='.$h.'&amp;zc='.$zc.'&amp;a='.$cropfrom.'" alt="'.get_the_title($post).'" title="'.get_the_title($post).'" />';
	}
}
/********************************************************************
custom post_type slider
********************************************************************/
add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
     add_image_size( 'slider-thumb', 750, 375, true); 
     add_image_size( 'post-thumb', 300, 200, true);
     add_image_size( 'tour-thumb', 270, 200, true);
     add_image_size( 'video-thumb', 215, 130, true);
}

function fb_disable_feed() {
wp_die( __('Tính năng RSS đã bị vô hiệu. Vui lòng quay về <a href="'. get_bloginfo('url') .'">Trang Chủ</a>!') );
}
add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'fb_disable_feed', 1);
add_action('do_feed_atom_comments', 'fb_disable_feed', 1);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
