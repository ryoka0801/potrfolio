<?php get_header(); ?>

  <main <?php body_class('p-self'); ?>>
    <section class="p-self__title c-site-head">
      <h1 class="c-site-title">
        <?php the_title(); ?>
      </h1>
      <p  class="c-site-title__desc">ポートフォリオを拝見いただきありがとうございます！</p>
    </section>

    <?php if(have_posts()):while(have_posts()): the_post();
      $me = SCF::get('about');
      foreach ($me as $item ) {
      ?>

      <section>
        <h2 class="p-self__head"><?php echo $item['title']; ?></h2>
        <p class="p-self__ans"><?php echo $item['name']; ?></p>
    </section>

    <?php } 
        endwhile; endif; ?>

        <p class="p-self__registration"><a href="https://coconala.com/mypage/dashboard_provider">ココナラ</a>や<a href="https://www.lancers.jp/profile/ryoka_0801?ref=header_menu">ランサーズ</a>に登録しており、取引者の方の評価など参考になればと思います。</p>

<?php get_footer(); ?>