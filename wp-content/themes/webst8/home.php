<?php get_header(); ?>
   
    <!-- コンテンツ(記事、記事一覧) -->
    <div class="container">
        <div class="contents">
        
        
           <img data-toggle="modal" data-target="#exampleModal01" data-whatever="@mdo" src="https://maps.googleapis.com/maps/api/streetview?location=38.3645321,140.3816066&size=480x360&heading=266.26&pitch=6.52&fov=75&key=AIzaSyDv70w6GRxS_kQ6tupqQt0aVacU6As3tIw">
           
           <img data-toggle="modal" data-target="#exampleModal02" data-whatever="@mdo" src="https://maps.googleapis.com/maps/api/streetview?location=37.0535755,140.9044722&size=480x360&heading=262.13&pitch=-1.24&fov=75&key=AIzaSyDv70w6GRxS_kQ6tupqQt0aVacU6As3tIw">
                      
        
       <iframe src="https://www.google.com/maps/embed?pb=!4v1529904521801!6m8!1m7!1sCAoSLEFGMVFpcFA2YWpYdlJoZkhDUFByQ2R1aWZjSTZUUDVPZTFCanVHdGQ1ZzBl!2m2!1d38.364532144919!2d140.38160661781!3f265.38236571482213!4f0.1562227795501201!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
       
       
       
       <a href=" https://www.google.co.jp/maps/uv?hl=ja&pb=!1s0x601f67a0b38a8f7d%3A0x81fe3da3af57f13!2m22!2m2!1i80!2i80!3m1!2i20!16m16!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!2m2!1m1!1e6!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOjVDS0hFKUkaLwaI0yJwv2z8LFTzSt45v6cJ06%3Dw568-h320-k-no!5z5aSp54S25rip5rOJ44Kw44Op44Oz44OJ44K544ORIOWNl-Wkp-mWgCAtIEdvb2dsZSDmpJzntKI&imagekey=!1e10!2sAF1QipMOk8VA2JbMCI9fczoM79mSqbDThWq9_myME6x3&sa=X&ved=0ahUKEwic2sqK8O7bAhXKvrwKHV_OAfIQoioI5AEwCg" rel="shadowbox;width=920;height=686"><img src="wp-content/themes/webst8/images/sv-image-oosayama.jpg"></a>
       
       
       
       

<div class="modal fade" id="exampleModal01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
       <div class="wrapper">
        <iframe class="iframeContent" src="https://www.google.com/maps/embed?pb=!4v1529904521801!6m8!1m7!1sCAoSLEFGMVFpcFA2YWpYdlJoZkhDUFByQ2R1aWZjSTZUUDVPZTFCanVHdGQ1ZzBl!2m2!1d38.364532144919!2d140.38160661781!3f265.38236571482213!4f0.1562227795501201!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
  </div>
</div>
    
    <div class="modal fade" id="exampleModal02" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
       <div class="wrapper">
        <iframe class="iframeContent" src="https://www.google.com/maps/embed?pb=!4v1529927733320!6m8!1m7!1sCAoSLEFGMVFpcE9sWU9nWWEtVnZWMF9YdnI2TlpkVWZVb2pSNlZBTVoxRXk1X3Fw!2m2!1d37.053575512897!2d140.90447222529!3f262.13!4f-1.2399999999999949!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
  </div>
</div>
     
        
        
        
        
        
        
    
           <!-- ■■■■■■ 記事を古い順で表示する為のコード ■■■■■■■ -->
         <?php query_posts($query_string .'&order=ASC'); ?>
            <!-- ■■■■■■ 記事ループ スタート ■■■■■■■ -->
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article <?php post_class(); ?>>
                <!-- 記事タイトル -->

                <!-- is_single()を使って、記事の個別ページとトップページを切り分けています。else側のルートがトップページ用の処理-->
                <?php if( is_single() ): ?>
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php else: ?>

                <!-- aタグでthe_permalink()を指定し、クリックすると記事の個別ページへジャンプする-->
                <h1>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>
                <?php endif; ?>

                <!-- 記事情報（日付、カテゴリ、コメント） -->
                <div class="postinfo">
                    <time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>">
             <i class="fa fa-clock-o"></i>
      	   <?php echo get_the_date(); ?>
        </time>
                    <span class="postcat">
      	   <?php the_category( ', ' ); ?>
      	    </span>
                </div>

                <!-- 記事本文 -->
                <?php if (is_single() ): ?>
                <?php the_content(); ?>

                <!-- 記事概略 -->
                <?php else: ?>
                <div class="row">
                    <div class="col one-second eyecatch">

                        <!--  has_post_thumbnail()を使って、記事にアイキャッチ画像があるかどうかをチェック アイキャッチ画像が設定されている場合は、the_post_thumbnail( ‘large’ )を使ってアイキャッチ画像を表示-->
                        <?php if( has_post_thumbnail() ): ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="col one-second excerpt">
                        <?php the_excerpt(); ?>
                        <p class="more"><a href="<?php the_permalink(); ?>">続きを読む <i class="fa fa-chevron-right"></i></a></p>
                    </div>
                </div>
                <?php endif; ?>

                <!-- ページナビ -->
                <?php if( is_single() ): ?>
                <div class="pagenav">
                    <span class="old">
             
<!--             previous_post_linkを使って前後の記事のリンクボタンを表示-->
              <?php previous_post_link(
              '%link',
             '<i class="fa fa-chevron-circle-left"></i> %title'
              ); ?>
              </span>

                    <span class="new">
              <?php next_post_link(
                '%link',
                '%title <i class="fa fa-chevron-circle-right"></i>'
              ); ?>
              </span>
                </div>

                <?php endif; ?>

            </article>
            <?php endwhile; endif; ?>
            <!-- ■■■■■■ 記事ループ エンド ■■■■■■■ -->

            <!-- 記事一覧ページリンク ページ数が２ページ以上の場合は、前後のページのリンクボタンを表示-->
            <?php if ( $wp_query->max_num_pages > 1): ?>
            <div class="pagenav">
                <span class="old">
        <?php next_posts_link('<i class="fa fa-chevron-circle-left"></i> 古い記事 '); ?>
  </span>
                <span class="new">
        <?php previous_posts_link('<i class="fa fa-chevron-circle-right"></i> 新しい記事 '); ?>
  </span>
            </div>
            <?php endif; ?>

        </div>
        <!-- contents -->
        
       

        <div class="blogmenu">
            <ul>
                <!-- ウィジェット php dynamic_sidebar()を使って、WordPress管理画面の「外観」→「ウィジェット」で設定したサイドバーを表示-->
                <?php dynamic_sidebar(); ?>
            </ul>
        </div>

    </div>
    <!--- container -->

   <?php get_footer(); ?>