<?php get_header(); ?>

<main <?php body_class(); ?>>

    <article class="p-about blue-bg">
      <img class="p-about__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ryoka.jpg" alt="安原良和の写真">
      <section>
        <h2 class="p-about__title c-pictogram">僕について</h2>
        <p class="c-text">WordPressを用いたホームページ制作を行っている安原良和(やすはらりょうか)です。ホームページをお客様に納品した後のことも考え、お客様にとって使いやすいホームページ制作を常に心がけております。ホームページ制作以外にも、普段のコミュニケーションからメッセージが届いて24時間以内に必ず返信するなど、ストレスのないコミュニケーションも心がけておりま<span>す。</span></p>
      </section>
    </article>

    <article class="p-works">
      <section>
        <h2 class="p-works__title c-title c-pictogram">実績一覧</h2>
      </section>

      <div class="p-works-card__wrap c-card__wrap">
        <?php
          $args = [
            'posts_per_page' => 4,
            'post_type' => 'work',
            'orderby' => 'rand',
            'meta_key' => 'schedule',
          ];
          $myposts = get_posts($args);

          if($myposts):
            foreach( $myposts as $post ):
              setup_postdata( $post ); ?>

                <div class="p-works-card c-card scrool js-trigger">
                  <a href="<?php the_permalink(); ?>">
                    <?php 
                      the_post_thumbnail( 'full',array(
                      'class' => 'p-works-card__img c-card__img'
                      )); 
                    ?>
                  </a>
                  <div class="p-works-card__inner">
                    <a href="<?php the_permalink(); ?>">
                      <h3 class="p-works-card__title c-card__title"><?php the_title(); ?></h3>
                    </a>
                    <div class="u-flex__between">
                      <p class="p-works-card__schedule c-card__schedule">作成期間</p>
                      <p class="p-works-card__schedule c-card__schedule"><?php the_field('schedule'); ?></p>
                    </div>
                    <button class="p-works-card__button c-button">
                      <a href="<?php the_permalink(); ?>">詳細へ</a>
                    </button>
                  </div>
                </div>
              <?php endforeach;
                wp_reset_postdata();
            endif; ?>
      </div>

      <button class="p-works__archive-button c-button">
        <a href="#">実績一覧へ</a>
      </button>
    </article>

    <article>
      <div class="p-skills blue-bg">
        <section>
          <h2 class="p-skills__title c-title c-pictogram">可能業務</h2>
        </section>
  
        <ul class="p-skills__list c-list">
          <li>ホームページ(LPやWordPress)の作成</li>
          <li>レンタルサーバー及びドメインの取得、サーバーへのアップ</li>
          <li>既存サイトの機能の追加</li>
          <li>既存サイトのデザインの変更(WordPress化)</li>
        </ul>
  
        <div class="p-skills__button-wrap">
          <p class="p-skills__more">使用言語はこちらから→</p>
          <button class="p-skills__button c-button">
            <a href="#">スキル一覧へ</a>
          </button>
        </div>
      </div>
    </article>

    <article>
      <div class="p-check js-scrool-triger">
        <section>
          <h2 class="p-check__title c-title c-pictogram">チェックリスト</h2>
          <p class="p-check__desc c-site-title__desc">納品時には以下の事を特に気をつけています。</p>
        </section>
  
        <ul class="p-check__list">
          <li class="p-check__item c-pictogram" id="slide">特に指定がない場合は画面幅が320px~2400pxでデザインの崩れが無いか</li>
          <li class="p-check__item c-pictogram" id="slide">HTMLがセマンティックな構造になっているか</li>
          <li class="p-check__item c-pictogram" id="slide">Windows、Macで見た目の変化はないか</li>
          <li class="p-check__item c-pictogram" id="slide">第三者がソースコードを見たときに見やすくなっているか</li>
        </ul>
      </div>
    </article>

    

<?php get_footer(); ?>