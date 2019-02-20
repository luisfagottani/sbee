<?php

  $args = array(
    'post_type' => 'messages',
    'posts_per_page' => 1
  );

  query_posts($args);

  if(have_posts()):
  
?>
<section class="message">
  <div class="wrap">
    <div class="message__content">
    <?php while(have_posts()): the_post(); ?>
      <h3 class="message__title"><?php echo get_the_title(); ?></h3>
      <figure class="message__figure"> 
        <blockquote class="blockquote"><?php echo get_field('mensagem') ?></blockquote>
        <figcaption class="message__caption"><?php echo get_field('autor') ?></figcaption>
      </figure>
    </div>
    <?php endwhile; ?>
  </div>
</section>

<?php endif; wp_reset_query(); ?>
