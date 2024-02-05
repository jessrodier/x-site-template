<!DOCTYPE HTML>
<html lang="en">

<head>
  <title><?php echo get_bloginfo(
    'name'
  ); ?> - <?php echo get_the_title(); ?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon"/>
  <!-- Metadata -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-store" />
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/1759cd857e.js" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap-grid.min.css">

  <!-- Open Graph Meta for Social Media Sharing -->
  <meta property="og:title" content="<?php echo the_field('og_title'); ?>">
  <meta property="og:description" content="<?php the_field(
    'og_description'
  ); ?>">
  <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>">
  <meta property="og:image:alt" content="<?php echo get_post_meta(
    get_post_thumbnail_id(),
    '_wp_attachment_image_alt',
    true
  ); ?>">
  <meta property="og:url" content="<?php echo get_permalink(get_the_ID()); ?>">
</head>

<?php wp_head(); ?>
