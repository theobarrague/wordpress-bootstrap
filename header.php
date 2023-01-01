<!DOCTYPE html>
<html lang="fr">

<head>
  <title><?php echo get_bloginfo('name'); ?></title>
  <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
  <meta name="author" content="<?php echo get_bloginfo('name'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />

  <meta property="og:url" content="<?php echo get_site_url(); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>">
  <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">
  <meta property="og:image" content="/favicon.svg">

  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="<?php echo parse_url(get_site_url())['host']; ?>">
  <meta property="twitter:url" content="<?php echo get_site_url(); ?>">
  <meta name="twitter:title" content="<?php echo get_bloginfo('name'); ?>">
  <meta name="twitter:description" content="<?php echo get_bloginfo('description'); ?>">
  <meta name="twitter:image" content="/favicon.svg">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="/manifest.webmanifest">

  <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>
  <header>
    <?php wp_nav_menu(array('container' => 'ul', 'menu' => 'primary-menu', 'menu_class' => 'flex space-x-2')); ?>
  </header>