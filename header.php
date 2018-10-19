<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- OGP TAG COMMON -->
<meta property="og:site_name" content="<?php bloginfo('name');?>" />
<meta property="og:locale" content="jp_JP" />
<!-- No Index Page -->
<?php if(is_tag() || is_date() || is_search() || is_404()): ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<!-- Meta Data For Each Page -->
<?php if(is_single() || is_page()): ?>
<!-- OGP TAG For Single,Page -->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:url" content="<?php the_permalink(); ?>" />
  <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
  <?php if(has_post_thumbnail()): ?>
    <?php 
      $postthumb = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
    ?>
    <meta property="og:image" content="<?php echo $postthumb[0]; ?>">
  <?php endif; ?>

  <?php setup_postdata($post) ?>
    <meta name ="descrition" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    <?php if(has_tag()): ?>
    <?php 
      $tags = get_the_tags();
      $kwds = [];
      foreach($tags as $tag){
        $kwds[]=$tag->name;
      }
    ?>
    <meta name="keywords" content="<?php echo implode(',',$kwds); ?>" />
  <?php endif; ?>
<?php else: ?>

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <?php
  $http = is_ssl() ? 'https'.'://' : 'http'.'://';
  $url = $http.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  ?>
  <meta name="og:url" content="<?php echo $url; ?>" />
  <meta name="og:description" content="<?php echo bloginfo('description'); ?>" />
  <meta name="og:image" content="/wp-content/uploads/2018/10/images.png" />
  <?php
    $allcats = get_categories();
    $kwds = [];
    foreach($allcats as $allcat){
      $kwds[] = $allcat->name;
    }
  ?>
  <meta name="keywords" content="<?php echo implode(',',$kwds); ?>" />
<?php endif; ?>

<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory().'/images/favicon.ico'?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">
    <div class="site-title">
      <h1>
        <a href="<?php echo home_url(); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
      <!--spbutton-->
      <button type="button" id="navbutton">
      <i class="fas fa-list-ul"></i>
      </button>
    </div>
  </div>
  <?php
      wp_nav_menu([
        'theme_location' => 'header-nav',
        'container' => 'nav',
        'container_class' => 'header-nav',
        'container_id' => 'header-nav',
        'fallback_cb' => '',
      ]);
    ?>
</header>
