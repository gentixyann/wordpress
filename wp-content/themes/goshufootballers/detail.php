<!-- <?php 
/**
 * Template Name: detail.phpのテンプレ
 * Description: detailのテンプレート
 */
?> -->

<?php get_header(); ?>

<!-- 記事詳細のページ。一覧からリンクで飛んできたときに、その記事の内容が表示されるようになっていてほしいです -->
 <?php if(have_posts()): while(have_posts()):the_post(); ?>

  <section class="detail-mv">
    <div class="detail-mv__bgimg"></div>
    <div class="detail-mv__title">
      <a href="news.php/category/COLUME">COLUME</a>
      <h2><?php the_title(); ?></h2>
      <span><?php the_time('Y.n.j'); ?></span>
      <p>12,345<span>view</span></p>
    </div>
  </section>

 <section class="detail-body">
    <div class="detail-body__margin">
      <hr>
    </div>
    <div class="effect-fade">
      <div class="detail-body__main">
       <?php the_content(); ?>
      </div>
    </div>
    <div class="detail-body__margin">
      <hr>
      <div class="effect-fade">
        <a class="btn-twitter" href="https://twitter.com/share?url=[URL]&text=[タイトル]" rel="nofollow" target="_blank">ツイート</a>
        <a class="btn-facebook" href="https://www.facebook.com/share.php?u=[URL]" rel="nofollow" target="_blank">&nbsp;シェア&nbsp;</a>
      </div>
    </div>
  </section>

  <section class="detail-mv">
    <div class="detail-mv__bgimg"></div>
    <div class="detail-mv__title">
      <a href="news.html/category/COLUME">COLUME</a>
      <h2>豪州フットボーラーズとは？</h2>
      <span>2019.02.26</span>
      <p>12,345<span>view</span></p>
    </div>
  </section>


  <section class="detail-body">
    <div class="detail-body__margin">
      <hr>
    </div>
    <div class="effect-fade">
      <div class="detail-body__main">
        <p>豪州フットボーラーズとは、オーストラリアを拠点とするサッカーマネージメント会社、豪州ソリューションズが運営するブログです。<br><br>オーストラリアでプレーする日本人の活躍を中心に、オーストラリアサッカー界での出来事を、画像や動画を交えながら、世界へと発信しています。</p>
        <h3>執筆　宮下忠士)(見出しh3)</h3>
        <p>豪州ソリューションズ代表。<br><br>1979年生まれ。12歳までは日本、12歳から23歳までは韓国、そして23歳から現在までオーストラリアで生活。<br>日本語と韓国語はネイティブレベルで、英語はアッパーインターミディエイトレベル。サッカーもさることながら、実は無類のバスケ好き。特にNBAが好きで、シーズン中には必ず毎日2試合は観戦するほど。好きなチームはフェニックス・サンズ。</p>
        <h4>宮下忠士の実績（見出しh4）</h4>
        <p>2014AFCチャンピオンズリーグ公式記者会見で、Western Sydney Wanderersの小野伸二選手の通訳を担当<br><br>2014AFCチャンピオンズリーグ公式記者会見で、川崎フロンターレの中村憲剛選手、そして風間八宏監督の通訳を担当<br><br>2015AFCチャンピオンズリーグ公式記者会見で、Western Sydney WanderersのTony Popovic監督とNikolai Topor-Stanle選手、鹿島アントラーズの植田直道選手、西大伍選手、そしてトニーニョ・セレーゾ監督の通訳を担当</p>
        <h5>宮下忠士の実績（見出しh5）</h5>
        <p>オーストラリアのテレビ番組にも、多数出演する、宮下忠士の実績の一覧です。</p>
        <ol>
          <li>番号ありリスト</li>
          <li>番号ありリスト(長文の場合)番号ありリスト(長文の場合)番号ありリスト(長文の場合)番号ありリスト(長文の場合)</li>
          <li>番号ありリスト</li>
        </ol>
        <ul>
          <li>番号なしのただのリスト</li>
          <li>番号なしのただのリスト(長文の場合)番号なしのただのリスト(長文の場合)番号なしのただのリスト(長文の場合)番号なしのただのリスト(長文の場合)</li>
          <li>番号なしのただのリスト</li>
        </ul>
        <blockquote>
          宮下忠士の実績は、2014AFCチャンピオンズリーグ公式記者会見で、Western Sydney Wanderersの小野伸二選手の通訳を担当。
        </blockquote>
      </div>
    </div>
    <div class="detail-body__margin">
      <hr>
      <div class="effect-fade">
        <a class="btn-twitter" href="https://twitter.com/share?url=[URL]&text=[タイトル]" rel="nofollow" target="_blank">ツイート</a>
        <a class="btn-facebook" href="https://www.facebook.com/share.php?u=[URL]" rel="nofollow" target="_blank">&nbsp;シェア&nbsp;</a>
      </div>
    </div>
  </section>

<?php endwhile; endif; ?>


  <?php get_footer(); ?>