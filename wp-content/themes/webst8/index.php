<?php get_header(); ?>
   
    <!-- コンテンツ(記事、記事一覧) -->
    <div class="container">
        <div class="contents">
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
        
        <?php get_sidebar(); ?>

        <div class="blogmenu">
            <ul>
                <!-- ウィジェット php dynamic_sidebar()を使って、WordPress管理画面の「外観」→「ウィジェット」で設定したサイドバーを表示-->
                <?php dynamic_sidebar(); ?>
            </ul>
        </div>

    </div>
    <!--- container -->

   <?php get_footer(); ?>