<?php get_header() ?>

<main class="main">
  <section class="default-page wrap">
    <?php get_template_part( 'partials/components/breadcrumb' ) ?>
    <article class="default-page__content">
      <?php if(has_post_thumbnail()): ?>
      <div class="default-page__banner"><?php echo the_post_thumbnail() ?></div>
      <?php endif; ?>
      <h1 class="default-page__title"><?php echo get_the_title() ?></h1>
      <main class="default-page__article">
        <?php the_content(); ?>
      </main>
    </article>
  </section>
</main>

<?php get_footer() ?>

