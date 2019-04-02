<?php
// We want Featured Images on Pages and Posts
add_theme_support( 'post-thumbnails' );

// Don't resize Featured Images
function my_thumbnail_size() {
  set_post_thumbnail_size();
}
add_action('after_setup_theme', 'my_thumbnail_size', 11);

// Don't wrap images in P tags
add_filter('the_content', 'filter_ptags_on_images');
function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// Wrap video embed code in DIV for responsive goodness
add_filter('embed_oembed_html', 'my_oembed_filter', 10, 4);
function my_oembed_filter($html, $url, $attr, $post_ID) {
  $return = '<div class="video">'.$html.'</div>';
  return $return;
}

// Remove emojis (and other crud)
function disable_wp_emojicons() {
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  add_filter( 'emoji_svg_url', '__return_false' );
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );

  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'start_post_rel_link');
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'adjacent_posts_rel_link');
}

add_action( 'init', 'disable_wp_emojicons' );
function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

function meta_og() {
  global $post;
  if (is_single()) {
    if(has_post_thumbnail($post->ID))
      $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
    $excerpt = strip_tags($post->post_content);
    $excerpt_more = '';
    if (strlen($excerpt ) > 155) {
      $excerpt = substr($excerpt,0,155);
      $excerpt_more = ' ...';
    }
    $excerpt = str_replace('"', '', $excerpt);
    $excerpt = str_replace("'", '', $excerpt);
    $excerptwords = preg_split('/[\n\r\t ]+/', $excerpt, -1, PREG_SPLIT_NO_EMPTY);
    array_pop($excerptwords);
    $excerpt = implode(' ', $excerptwords) . $excerpt_more;
    ?>

    <meta name="author" content="Riv/Crete">
    <meta name="description" content="<?php echo $excerpt; ?>">
    <meta property="og:title" content="<?php echo the_title(); ?>">
    <meta property="og:description" content="<?php echo $excerpt; ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo the_permalink(); ?>">
    <meta property="og:site_name" content="Riv/Crete">
    <meta property="og:image" content="<?php echo $img_src[0]; ?>">
    <?php
  } else {
    return;
  }
}
add_action('wp_head', 'meta_og', 5);

function fg_excerpt($limit, $more = '') {
  return wp_trim_words(get_the_excerpt(), $limit, $more);
}
?>