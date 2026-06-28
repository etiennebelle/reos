<?php
  $header_title = get_field('header_title');
  $menu_title = get_field('menu_title');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
  <div class="header__wrapper">
    <h1 class="header__title body body-sm"><?= esc_html($header_title); ?></h1>
    <h2 class="header__menu body body-sm"><?= esc_html($menu_title); ?></h2>
  </div>
</header>
