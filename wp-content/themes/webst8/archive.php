<?php get_header(); ?>
<!-- 上記が追記するコード -->
       
<div class="container">
    <div class="contents">
<!--           カテゴリ名をリンクなしで出す-->
        <h1>
            <?php $cat = get_the_category(); ?>
            <?php $cat = $cat[0]; ?>
            <?php echo get_cat_name($cat->term_id); ?>
        </h1>

        <!-- ■■■■■■ 記事を古い順で表示する為のコード ■■■■■■■ -->
        <?php query_posts($query_string .'&order=ASC'); ?>
              

        <?php  if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h3>
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>

            <div class="postinfo">
                <time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>">
             <i class="fa fa-clock-o"></i>
      	   <?php echo get_the_date(); ?>
        </time>
                <span class="postcat">
      	   <?php the_category( ', ' ); ?>
      	    </span>
            </div>

            <div class="row">
                <div class="col one-second excerpt">
                    <?php the_excerpt(); ?>
                    <p class="more"><a href="<?php the_permalink(); ?>">続きを読む <i class="fa fa-chevron-right"></i></a></p>
                </div>
            </div>
        </article>

        <?php 
          endwhile;
      endif;
        wp_reset_query();
      ?>

        <div id="sidebar" class="col-md-3">
            <?php get_sidebar(); ?>
            <!-- 上記が追記するコード -->
        </div>
    </div>
    
    <div class="blogmenu">
            <ul>
                <!-- ウィジェット php dynamic_sidebar()を使って、WordPress管理画面の「外観」→「ウィジェット」で設定したサイドバーを表示-->
                <?php dynamic_sidebar(); ?>
            </ul>
        </div>
        
</div>

<?php get_footer(); ?>
