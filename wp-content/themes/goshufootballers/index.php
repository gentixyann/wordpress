<?php get_header(); ?>


  <div class="topimg-sp">
     <!-- custom header -->
         <?php if ( get_header_image() ) : ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <?php else: ?>
    <img src="<?php echo get_template_directory_uri(); ?>/src/img/top_img.jpg">
    <?php endif; ?>
  </div>



  <section class="archives">
    <!-- To:げんとくん　TODO:このarchives01の単位をfor文で最新10件出るような形に動的に動くようにしてほしいです -->
    <!-- archives01 -->
     <?php if (have_posts()): ?>
       <?php while (have_posts()): ?>
         <?php the_post(); ?>
    <div class="effect-fade">
      <div class="archives__wrapper">
        <div class="archives__box1">
          <h2><a href="news/category/PLAYERS">PLAYERS</a></h2>
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
               <?php the_tags('', ' / ' ); ?>
            </p>
           
          </div>
        </div>
      </div>
    </div>
     <?php endwhile; ?>
     <?php endif; ?>
    
    <div class="readmore">
      <a href="news">READ MORE</a>
    </div>

  </section>




  <?php get_footer(); ?>