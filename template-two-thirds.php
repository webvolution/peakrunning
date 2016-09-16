<?php
/*
Template Name: Two-Thirds
*/
get_header(); ?>
<main role="main">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
?>
  <div class="row">
    <div class="eight columns">
      <article>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>
    </div>

    <div class="four columns">
      <aside>
        <?php if (get_the_ID() == 17 ): ?>
        <div class="aside_container">
          <?php echo do_shortcode('[content_block id=29]'); ?>
        </div>

        <div class="aside_container">
          <?php echo do_shortcode('[content_block id=29]'); ?>
        </div>
        <?php endif; ?>
      </aside>
    </div>

  </div>
<?php
    }
  } elseif (is_404()) {
    get_template_part('partials', '404');
  }
?>
</main>
<?php get_footer(); ?>