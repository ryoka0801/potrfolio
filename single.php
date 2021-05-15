<?php get_header(); ?>

<main <?php body_class('p-archive'); ?>>

  <section class="p-archive__title">
    <h1 class="c-site-title">
      実績
    </h1>
    <p  class="c-site-title__desc">今まで作成したサイトの詳細ページになります。デザインの意図やコーディングの際に気をつけた事などを掲載しております。</p>
  </section>

  <?php if(have_posts()):while(have_posts()): the_post(); ?>

  <article class="p-archive__columns">
      <figure class="p-archive__image">
        <?php if (has_post_thumbnail()){ ?>
          <?php
            the_post_thumbnail();
          ?>
        <?php };?>
      </figure>

      <div class="p-archive__description c-works">
        <section class="c-works__text">
          <h2><?php the_title(); ?></h2>
        </section>
    
        <section class="c-works__text">
          <h2>納期</h2>
          <p><?php the_field('schedule'); ?></p>
        </section>
    
        <section class="c-works__text">
          <h2>担当業務</h2>
          <?php $field = get_field_object( "rep" );
            echo $field["value"];
          ?>
        </section>
    
        <section class="c-works__text">
          <h2>使用言語</h2>
          <?php $lang = get_field_object( "lang" );
            echo $lang["value"];
          ?>
        </section>
    
        <?php if($concept = get_field('concept')): ?>
          <section class="c-works__text">
            <h2>コンセプト</h2>
            <p><?php echo $concept; ?></p>
          </section>
        <?php endif; ?>
    
        <section class="c-works__text">
          <h2>こだわり</h2>
          <p><?php the_field('detailed'); ?></p>
        </section>
    
        <?php if( $git = get_field('github')):?>
          <button class="p-archive__button c-button">
            <a href="<?php echo $git;?>" target="_brank">GitHub</a>
          </button>
        <?php endif; ?>
    
        <?php if( $site = get_field('site')):?>
          <button class="p-archive__button c-button">
            <a href="<?php echo $site;?>" target="_brank">サイトへ</a>
          </button>
        <?php endif; ?>
      </div>
    </article>


  <?php endwhile; endif; ?>

<?php get_footer(); ?>