<?php
  /**
   * Template Name: Site en construction
   */
?>

<?php
  get_header();
?>

  <main id="main">
    <div class="wrapper">
      <h1 class="body body-xl body-lo"><?= esc_html(get_field('teasing_title')); ?></h1>
      <p class="body body-sm body-up"><?= esc_html(get_field('teasing_catchphrase')); ?></p>
      <div class="links">
        <a href="mailto:<?= get_field('teasing_mail'); ?>" target="_blank">
          <span class="body body-sm body-up"><?= esc_html(get_field('teasing_mailto_text')); ?></span>
        </a>
        <a href="<?= get_field('teasing_insta_url'); ?>" target="_blank">
          <span class="body body-sm body-up"><?= esc_html(get_field('teasing_insta_text')); ?></span>
        </a>
      </div>
    </div>
  </main>

<?php get_footer(); ?>