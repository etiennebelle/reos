<?php
  namespace Inc;

  abstract class Cpt {
    protected static string $postType = '';

    public static function getPosts(array $args = []): \WP_Query {
      return new \WP_Query(array_merge([
        'post_type'      => static::$postType,
        'posts_per_page' => -1,
        'post_status'    => 'publish',
      ], $args));
    }
  }

  class Projects extends Cpt {
    protected static string $postType = 'projects';

    protected static function formatPost(\WP_Post $post): array {
      return [
        'name'        => $post->post_name,
        'title'       => get_the_title($post),
        'description' => get_field('project_description', $post->ID),
        'category' => get_field('project_category', $post->ID),
        'contributor' => get_field('project_contributor', $post->ID),
        'media' => array_map(fn($item) => [
          'type'    => $item['project_media_file']['type'],
          'url'     => $item['project_media_file']['url'],
          'caption' => $item['project_media_caption'],
          'landscape' => ($item['project_media_file']['width'] ?? 0) > ($item['project_media_file']['height'] ?? 1),
        ], get_field('project_content', $post->ID) ?: []),
      ];
    }

    public static function getProjects(): array {
      $query = static::getPosts();
      $projects = [];

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          $projects[] = static::formatPost($query->post);
        }
        wp_reset_postdata();
      }

      return $projects;
    }
  }