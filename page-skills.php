<?php get_header(); ?>

  <main <?php body_class('p-usable'); ?>>
    <section class="p-usable__title c-site-head">
      <h1 class="c-site-title">
        スキル
      </h1>
      <p  class="c-site-title__desc">今まで扱ってきたプログラミング言語や、制作、連絡などで使用しているアプリケーションの一覧です。</p>
    </section>

    <article class="p-usable__list">
      <ul class="p-usable__list-container c-list">
        <h2>LPやWordPressサイトの作成</h2>
        <?php if(have_posts()):while(have_posts()): the_post();
          $lp = SCF::get('lp');
          foreach ($lp as $item ) {
          ?>
        <li>
          <p class="p-usable__list-item"><?php echo $item['coding']; ?></p>
          <span class="star5_rating" data-rate="<?php echo $item['star']; ?>"></span>
          <p class="p-usable__list-item u-flex__right"><?php echo $item['period']; ?></p>
        </li>
        <?php } 
        endwhile; endif; ?>
      </ul>

      <p class="p-usable__list-desc c-site-title__desc">HTMLは常にセマンティックなコーディングを心がけています。</p>
      <p class="p-usable__list-desc c-site-title__desc">CSSはSass記法,BEM,FLOCSSを使用しています。</p>
      <span class="p-usable__list-desc c-site-title__desc">jQueryは</span>
        <li class="p-usable__list-cont c-site-title__desc">スムーススクロール</li>
        <li class="p-usable__list-cont c-site-title__desc">ハンバーガーボタン</li>
        <li class="p-usable__list-cont c-site-title__desc">トップへ戻るボタン</li>
        <li class="p-usable__list-cont c-site-title__desc">スライダー</li>
        <li class="p-usable__list-cont c-site-title__desc">ローディング画面</li><span class="p-usable__list-desc c-site-title__desc">の実装は経験があります。</span>
        <p class="p-usable__list-desc c-site-title__desc">上記以外にも調べながら実装いたします。</p>
      <p class="p-usable__list-desc c-site-title__desc">WordPressでは自作テーマの作成の経験があります。</p>

    </article>



    <article class="p-usable__list">
      <ul class="p-usable__list-container p-usable__list-container--app c-list">
        <h2>ホームページ制作時に使用するアプリケーション</h2>
        <?php if(have_posts()):while(have_posts()): the_post();
          $app = SCF::get('application');
          foreach ($app as $fields ) {
          ?>
        <li>
          <p class="p-usable__list-item"><?php echo $fields['app']; ?></p>
          <span class="star5_rating" data-rate="<?php echo $fields['star']; ?>"></span>
          <p class="p-usable__list-item u-flex__right"><?php echo $fields['period']; ?></p>
        </li>
        <?php } 
        endwhile; endif; ?>
      </ul>
    </article>

<?php get_footer(); ?>