<?php get_header(); ?>

<main <?php body_class('p-price'); ?>>
    <section class="p-price__title">
      <h1 class="c-site-title">
        料金表
      </h1>
      <p  class="c-site-title__desc">こちらは料金の目安となっております。ヒアリングの段階で予算や納期を伺い、予算内に収まるように柔軟に対応していきますので、気軽にご相談ください。</p>
    </section>

    <table class="p-price__table">
      <thead>
        <tr>
          <th class="p-price__table-head"></th>
          <th class="p-price__table-head">プランA</th>
          <th class="p-price__table-head">プランB</th>
          <th class="p-price__table-head">プランC</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="p-price__table-item">価格</td>
          <td class="p-price__table-item">10,000円</td>
          <td class="p-price__table-item">10,000円</td>
          <td class="p-price__table-item">10,000円</td>
        </tr>
        <tr>
          <td class="p-price__table-item">オリジナルテーマ</td>
          <td class="p-price__table-item">○</td>
          <td class="p-price__table-item">○</td>
          <td class="p-price__table-item">×</td>
        </tr>
        <tr>
          <td class="p-price__table-item">レンタルサーバー、独自ドメイン取得代行(必要に応じて)</td>
          <td class="p-price__table-item">○</td>
          <td class="p-price__table-item">○</td>
          <td class="p-price__table-item">○</td>
        </tr>
        <tr>
          <td class="p-price__table-item">運用中の保守点検</td>
          <td class="p-price__table-item">○</td>
          <td class="p-price__table-item">○</td>
          <td class="p-price__table-item">×</td>
        </tr>
      </tbody>
    </table>

<?php get_footer(); ?>