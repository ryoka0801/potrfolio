<?php get_header(); ?>

<main <?php body_class(); ?>>

    <article class="p-about blue-bg">
      <img class="p-about__img" src="#" alt="安原良和の写真">
      <section>
        <h2 class="p-about__title c-pictogram">僕について</h2>
        <p class="c-text">WordPressを用いたホームページ制作を行っている安原良和(やすはらりょうか)です。ホームページをお客様に納品した後のことも考え、お客様にとって使いやすいホームページ制作を常に心がけております。ホームページ制作だけでなく、普段のコミュニケーションから、メッセージが届いて24時間以内に必ず返信するなど、ストレスのないコミュニケーションも心がけておりま<span>す。</span></p>
      </section>
    </article>

    <article class="p-works">
      <section>
        <h2 class="p-works__title c-title c-pictogram">実績一覧</h2>
      </section>

      <div class="p-works-card__wrap c-card__wrap">
        <div class="p-works-card c-card">
          <a href="#">
            <img class="p-works-card__img c-card__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ryoka-hum.png" alt="実績のスクリーンショット">
          </a>
          <div class="p-works-card__inner">
            <a href="#">
              <h3 class="p-works-card__title c-card__title">飲食店向けサイト</h3>
            </a>
            <div class="u-flex__between">
              <p class="p-works-card__schedule c-card__schedule">作成期間</p>
              <p class="p-works-card__schedule c-card__schedule">2ヶ月</p>
            </div>
            <button class="p-works-card__button c-button">
              <a href="#">詳細へ</a>
            </button>
          </div>
        </div>

        <div class="p-works-card c-card">
          <a href="#">
            <img class="p-works-card__img c-card__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ryoka-hum.png" alt="実績のスクリーンショット">
          </a>
          <div class="p-works-card__inner">
            <a href="#">
              <h3 class="p-works-card__title c-card__title">飲食店向けサイト</h3>
            </a>
            <div class="u-flex__between">
              <p class="p-works-card__schedule c-card__schedule">作成期間</p>
              <p class="p-works-card__schedule c-card__schedule">2ヶ月</p>
            </div>
            <button class="p-works-card__button c-button">
              <a href="#">詳細へ</a>
            </button>
          </div>
        </div>

        <div class="p-works-card c-card">
          <a href="#">
            <img class="p-works-card__img c-card__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ryoka-hum.png" alt="実績のスクリーンショット">
          </a>
          <div class="p-works-card__inner">
            <a href="#">
              <h3 class="p-works-card__title c-card__title">飲食店向けサイト</h3>
            </a>
            <div class="u-flex__between">
              <p class="p-works-card__schedule c-card__schedule">作成期間</p>
              <p class="p-works-card__schedule c-card__schedule">2ヶ月</p>
            </div>
            <button class="p-works-card__button c-button">
              <a href="#">詳細へ</a>
            </button>
          </div>
        </div>

        <div class="p-works-card c-card">
          <a href="#">
            <img class="p-works-card__img c-card__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ryoka-hum.png" alt="実績のスクリーンショット">
          </a>
          <div class="p-works-card__inner">
            <a href="#">
              <h3 class="p-works-card__title c-card__title">飲食店向けサイト</h3>
            </a>
            <div class="u-flex__between">
              <p class="p-works-card__schedule c-card__schedule">作成期間</p>
              <p class="p-works-card__schedule c-card__schedule">2ヶ月</p>
            </div>
            <button class="p-works-card__button c-button">
              <a href="#">詳細へ</a>
            </button>
          </div>
        </div>

      <button class="p-works__archive-button c-button">
        <a href="#">実績一覧へ</a>
      </button>
    </article>

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

    <div class="p-contact">
      <section>
        <h2 class="p-contact__title c-title c-pictogram">お問い合せ</h2>
      </section>

      <form>
        <div class="form-item">
          <label class="form-item-Label" for="name">
            お名前
          </label>
          <input id="name" type="text" class="form-item-Input">
        </div>
        <div class="form-item">
          <label class="form-item-Label" for="mail">
            メールアドレス
          </label>
          <input id="mail" type="text" class="form-item-Input">
        </div>
        <div class="form-item">
          <label class="form-item-Label isMsg">
            お問い合わせ内容
          </label>
          <textarea class="form-item-Textarea"></textarea>
        </div>
        <input type="submit" class="Form-Btn" value="送信する">
      </form>
    </div>

<?php get_footer(); ?>