<?php
  get_header();

  $projects = Inc\Projects::getProjects();
?>

  <main id="main">
    <?php foreach ($projects as $i => $project): ?>
      <section
        id="<?= esc_attr($project['name']); ?>"
        class="section"
        data-key="<?= esc_attr($project['name']); ?>"
        data-index="<?= $i + 1 ?>"
      > <!-- Si besoin pour les animations: $i == 0 ? ' is-open' : '' -->
        <div class="section__heading body body-sm">
          <h2 class="section__heading__title"><?= $project['title']; ?></h2>
          <p class="section__heading__category"><?= nl2br($project['category']); ?></p>
          <p class="section__heading__contributor"><?= nl2br($project['contributor']); ?></p>
        </div>
        <div class="section__content">
          <div class="section__content__description">
            <p class="body body-sm"><?= nl2br($project['description']); ?></p>
          </div>
          <div class="section__content__medias">
            <?php foreach ($project['media'] as $media): ?>
              <?php if ($media['type'] === 'video'): ?>
                <video
                  class="media <?= $media['landscape'] ? 'media--landscape' : 'media--portrait' ?>"
                  src="<?= esc_url($media['url']); ?>"
                  autoplay loop muted
                ></video>
              <?php else: ?>
                <img
                  class="media <?= $media['landscape'] ? 'media--landscape' : 'media--portrait' ?>"
                  src="<?= esc_url($media['url']); ?>"
                  alt=""
                  loading="lazy"
                >
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    <?php endforeach; ?>
  </main>

<?php get_footer(); ?>