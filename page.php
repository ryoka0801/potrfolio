<?php get_header(); ?>

<main <?php body_class("p-contact"); ?>>

<section class="c-site-head">
      <h1 class="c-site-title">
         <?php the_title(); ?>
      </h1>
      <p  class="c-site-title__desc">お仕事の相談やご依頼など、お気軽にご相談ください！</p>
    </section>


<?php if(have_posts()):while(have_posts()): the_post(); ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>