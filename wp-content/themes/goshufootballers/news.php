<?php 
/**
 * Template Name: news
 * Description: newsのテンプレート
 */
?>

<?php get_header(); ?>
<?php $paged = get_query_var('paged'); ?>
<!-- １ページに何件取得するか？ & 取得の順番 -->
<?php query_posts("posts_per_page=20&paged=$paged&orderby=date&order=DESC"); ?>


  <section class="pagetitle">
    <h2>ARCHIVES</h2>
    <hr>
    <!-- <p>補足説明用</p> -->
  </section>



  <section class="archives">
    <!-- TO:げんとくん ここを記事の一覧ページになるように、動的なしょりにしてほしいです。ループ文とページングボタンをお願いします  -->

     <?php if (have_posts()): ?>
       <?php while (have_posts()): ?>
         <?php the_post(); ?>
    <div class="effect-fade">
      <div class="archives__wrapper">
        <div class="archives__box1">
          <h2><a href="news.php/category/PLAYERS">PLAYERS</a></h2>
          <?php if ( has_post_thumbnail() ) : ?>
          <div class="archives__trimming">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
              </a>
          </div>
          <?php endif; ?>
        </div>
        <div class="archives__box2">
          <h3> <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
          <h6><?php the_time('Y.n.j'); ?></h6>
          <p><?php if(mb_strlen($post->post_content,'UTF-8')>200){
              $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 200,'UTF-8'));
              echo $content.'Read more...';
            }else{
              echo str_replace('\n', '', strip_tags($post->post_content));
            } ?></p>
          <div class="archives__box2__tag">
            <p>
              <a href="news.php">ACL</a>/<a href="news.php">シドニー日本チーム</a>/<a href="news.php">三吉幸樹</a>/<a href="news.php">三羽悠矢</a>/<a href="news.php">Tag</a>/<a href="news.php">Tag</a>/<a href="news.php">Tag</a>
            </p>
          </div>
        </div>
      </div>
    </div>
     <?php endwhile; ?>
     <?php endif; ?>

     <!-- <div class="pagination"> -->
           <?php
        the_posts_pagination( array(
          'mid_size' => 3,
          'prev_text' => '<p><</p>',
          'next_text' => '<p>></p>',
        ) );
      ?>
    <!-- </div> -->

   
  </section>




   <?php get_footer(); ?>