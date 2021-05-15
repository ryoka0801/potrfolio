<?php get_header(); ?>

<main <?php body_class('p-archive'); ?>>
    <section class="p-archive__title c-site-head">
      <h1 class="c-site-title">
        実績一覧
      </h1>
      <p class="c-site-title__desc">今までコーディングやデザインを行ったWebサイトの一覧です。実際にお客様に納品したものや、お客様を想定して作ったものを許可を得て掲載しております。</p>
    </section>

    <div class="p-works-card__wrap c-card__wrap">
      <?php if(have_posts()):while(have_posts()): the_post(); ?>
        <div class="p-works-card c-card">
          <?php if (has_post_thumbnail()) {?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php
                the_post_thumbnail( 'full',array(
                  'class' => 'p-works-card__img c-card__img'
                ));
              ?>
            </a>
          <?php } ?> 
          <div class="p-works-card__inner">
            <h3 class="p-works-card__title c-card__title"><?php the_title(); ?></h3>
            <?php
              $text_field = get_field('schedule');
              if($text_field):
              ?>
              <div class="u-flex__between">
                <p class="p-works-card__schedule c-card__schedule">作成期間</p>
                <p class="p-works-card__schedule c-card__schedule"><?php the_field('schedule'); ?></p>
              </div>
            <?php endif; ?>
            <button class="p-works-card__button c-button">
              <a href="<?php the_permalink(); ?>">詳細へ</a>
            </button>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>