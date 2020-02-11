
<?php get_header(); ?>

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
          <p><?php the_content('Read more...'); ?></p>
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

    <!-- archives01 -->
    <div class="effect-fade">
      <div class="archives__wrapper">
        <div class="archives__box1">
          <h2><a href="news.php/category/PLAYERS">PLAYERS</a></h2>
          <div class="archives__trimming">
            <a href="detail.php"><img src="<?php echo get_template_directory_uri(); ?>/src/img/archives01.jpg" alt="記事画像"></a>
          </div>
        </div>
        <div class="archives__box2">
          <h3><a href="detail.php">タイトルは１行まで表示されます。本文は、はじめの文章３行分まで表示されます。</a></h3>
          <h6>2019.07.29</h6>
          <p>本文は、はじめの文章３行分まで表示されます。本文は、はじめの文章３行分まで表示されます。本文は、はじめの文章３行分まで表示されます。本文は、はじめの文章３行分まで表示されます。本文は、はじめの文章３行分まで表示されます。本文は、はじめの文章３行分まで表示されます。本文は、はじめの文章３行分まで表示されます。
          </p>
          <div class="archives__box2__tag">
            <p>
              <a href="news.php">ACL</a>/<a href="news.php">シドニー日本チーム</a>/<a href="news.php">三吉幸樹</a>/<a href="news.php">三羽悠矢</a>/<a href="news.php">Tag</a>/<a href="news.php">Tag</a>/<a href="news.php">Tag</a>
            </p>
          </div>
        </div>
      </div>
    </div>

   

    <div class="pagination">
      <p>＜</p>
      <a href="news.php">1</a>
      <a href="news.php">2</a>
      <a href="news.php">3</a>
      <a href="news.php">4</a>
      <a href="news.php">5</a>
      <p>...</p>
      <a href="news.php">54</a>
      <p>＞</p>
    </div>
  </section>

  <?php previous_post_link('%link','古い記事へ'); ?>
<?php next_post_link('%link','新しい記事へ'); ?>




   <?php get_footer(); ?>