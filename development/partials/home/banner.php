<?php

  $args = array(
    'post_type' => 'post',
    'post_per_page' => 3
  );

  query_posts($args);

  if(have_posts()):
  
?>
<section class="banner">
  <!-- Slider main container -->
  <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">

        <?php while(have_posts()): the_post(); ?>
        <?php
          $banner_title = get_field('titulo_banner');
        ?>
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="banner__bg" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
              <?php echo the_post_thumbnail() ?>
            </div>

            <div class="banner__content">
              <h2 class="banner__title">
                <?php echo $banner_title ?>
              </h2>
              <a href="<?php echo get_permalink() ?>" alt="<?php echo $banner_title ?>" class="banner__cta">Veja Mais</a>
            </div>
          </div>

        <?php endwhile; ?>
      </div>

      <!-- If we need navigation buttons -->
      <div class="banner__button banner__button--prev">
        <img alt="Icone que representa a ação de trocar o banner para o anterior" src="<?php echo get_template_directory_uri() . '/images/icons/arrow.svg'; ?>">
      </div>
      <div class="banner__button banner__button--next">
      <img alt="Icone que representa a ação de trocar o banner para o próximo" src="<?php echo get_template_directory_uri() . '/images/icons/arrow.svg'; ?>">
      </div>
  </div>
</section>

<?php endif; wp_reset_query(); ?>