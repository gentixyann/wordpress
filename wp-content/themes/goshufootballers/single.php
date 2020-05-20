<?php get_header(); ?>

<!-- 記事詳細のページ。一覧からリンクで飛んできたときに、その記事の内容が表示されるようになっていてほしいです -->
<?php  if( function_exists( 'setPostViews' ) ) {
          setPostViews(get_the_ID());
        }
        ?>
 <?php if(have_posts()): while(have_posts()):the_post(); ?>


  <section class="detail-mv">
    <div class="detail-mv__bgimg"></div>
    <div class="detail-mv__title">
      <a href="news.php/category/COLUME">COLUME</a>
      <h2><?php the_title(); ?></h2>
      <span><?php the_time('Y.n.j'); ?></span>
      <p><?php echo getPostViews(get_the_ID()); ?></p>
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

 

<?php endwhile; endif; ?>



  <?php get_footer(); ?>