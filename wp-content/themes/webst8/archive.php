<?php get_header(); ?>
<!-- 上記が追記するコード -->
 
 <section id="content">
	 <div id="content-wrap" class="container">
 		<div id="main" class="col-md-9">
<h1>
    <?php $cat = get_the_category(); ?>
    <?php $cat = $cat[0]; ?>
    <?php echo get_cat_name($cat->term_id); ?>
</h1>
      <hr>
        <!-- ■■■■■■ 記事を古い順で表示する為のコード ■■■■■■■ -->
        <?php query_posts($query_string .'&order=ASC'); ?>
      <?php  if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
          <h2>
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <section>
            <p>作成日時：<?php the_time('Y年n月j日'); ?></p>
            <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
          </section>
          <hr>
      <?php 
          endwhile;
      endif;
      ?>
 		</div>
 		<div id="sidebar" class="col-md-3">
			<?php get_sidebar(); ?>
			<!-- 上記が追記するコード -->
 		</div>
 	</div>
 </section>
 <!-- 下記が追記するコード -->
<?php get_footer(); ?>
