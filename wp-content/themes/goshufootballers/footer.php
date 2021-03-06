<footer class="footer">
<section class="recommend">
  <h2>RECOMMEND</h2>
    <div class="recommend__archives">
      <?php
          if( function_exists( 'setPostViews' ) ) {
          setPostViews(get_the_ID());
        }
        query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=6');
        while(have_posts()) : the_post();
        ?>
        <div class="effect-recommend">
        <div class="effect-fade">
          <div class="recommend__archives-wrapper">
             <div class="recommend__archives-box1">
              <a href="<?php echo get_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>　
                <?php the_post_thumbnail( array( 'class' => 'alignleft')); ?>
                <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/recommend01.jpg" alt="おすすめ記事画像"></a>
                <?php endif; ?>
              </a>
            </div>
            <div class="recommend__archives-box2">
              <div class="recommend__archives-title">
                 <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
              </div>
              <p><?php echo getPostViews(get_the_ID()); ?></p>
            </div>

          </div>
        </div>
        </div>
        <?php
        endwhile;
        //クエリリセット
        wp_reset_query();
        ?>
    </div>
</section>



    <div id="about"></div>
    <section class="about">
      <h2>ABOUT</h2>
      <div class="effect-fade">
        <div class="about__wrapper">
          <div class="about__box1">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/about.jpg" alt="宮下忠士">
            <h4>宮下忠士<span>豪州ソリューションズ代表</span></h4>
            <p>1979年生まれ。12歳までは日本、12歳から23歳までは韓国、そして23歳から現在までオーストラリアで生活。<br>
            日本語と韓国語はネイティブレベルで、英語はアッパーインターミディエイトレベル。サッカーもさることながら、実は無類のバスケ好き。特にNBAが好きで、シーズン中には必ず毎日2試合は観戦するほど。好きなチームはフェニックス・サンズ。<br>
            <br>
            ■豪州ソリューションズ<br></p>
            <a target="_blank" href="http://goshusolutions.com/">http://goshusolutions.com/</a>
          </div>


        <div class="about__sns-wrapper">
          <div class="about__box2">
            <div class="twitter-wrap">
              <a class="twitter-timeline" href="https://twitter.com/tadasydney?ref_src=twsrc%5Etfw" data-height="600" >Tweets by 宮下忠士</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
          <div class="about__box3">
            <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/goshusolutions" data-tabs="timeline" data-width="285" data-height="656px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=300&amp;height=656px&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fgoshusolutions&amp;locale=ja_JP&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=285">
              <span style="vertical-align: bottom; width: 285px; height: 600px;">
                <iframe name="f3b0043b9fee8f4" width="285px" height="600px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.6/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D45%23cb%3Df1c10c31bc37414%26domain%3Dgoshusolutions.com%26origin%3Dhttp%253A%252F%252Fgoshusolutions.com%252Ff3489ad10022b4c%26relation%3Dparent.parent&amp;container_width=300&amp;height=656px&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fgoshusolutions&amp;locale=ja_JP&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=285" style="border: none; visibility: visible; width: 285px; height: 600px;" class="">
                </iframe>
              </span>
            </div>
          </div>
        </div>

      </div>
      <hr>
    </section>

    <section class="category--tag">
      <div class="effect-fade">
        <h2>CATEGORY</h2>
        <div class="category--tag__wapper">
          <p>
            <?php
            // パラメータを指定
            $args = array(
              // カテゴリー内の記事数順で指定
                'orderby' => 'count',
                // 降順で指定
                'order' => 'DSC'
            );
            $categories = get_categories( $args );
            foreach( $categories as $category ){
              echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> ';
              if ($category === end($categories)) {
                echo '';
              } else {
                echo ' / ';
              }
            }
            ?>
          </p>
        </div>
        <hr>
      </div>

      <div class="effect-fade">
        <h2>TAG</h2>
        <div class="category--tag__wapper">
          <?php $args = array(
            'separator' => " / ",
            'number' => 0,
             'smallest' => 8,
            'largest' => 8,
          );
          wp_tag_cloud($args);

           ?>
        </div>
      </div>
    </section>

    <div class="Copyright">
      <a href="index.php">
        <h4><?php bloginfo( 'name' ); ?><span><br>〜<?php bloginfo('description'); ?>〜</span></h4>

    </a>
      <p>Copyright © <?php bloginfo('name'); ?> All Rights Reserved.</p>
    </div>
  </footer>



  <!-- jquery利用 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="https://goshufootballers.com/wp-content/themes/w-caravan/src/js/jquery-3.4.1.min.js"><\/script>')</script>

  <!-- JS: Common -->
  <script src="<?php echo get_template_directory_uri(); ?>/src/js/common.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>




<!-- スムーズスクロール -->
  <script>
      $(function() {
          $('a[href^="#"]').click(function() {
              var speed = 400; // スクロールスピード(ミリ秒)
              var href = $(this).attr("href");
              var target = $(href == "#" || href == "" ? 'php' : href);
              var position = target.offset().top;
              $('body,php').animate({
                  scrollTop: position
              }, speed, 'swing');
              return false;
          });
      });
  </script>


  <!-- ふわっとエフェクト -->
  <script>
      $(function(){
    　$(window).scroll(function (){
        $('.effect-fade').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('effect-scroll');
            }
        });
    　});
    });
  </script>

 <?php wp_footer(); ?>
</body>
