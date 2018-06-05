<?php
/**
 * Template Name: all_page.php */
?>

<?php get_header(); ?>

<?php 
$args = array(
    'post_type' => 'post', //投稿を表示
    'posts_per_page' => 100, //表示する件数
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
?>

<div class="container">
    <h2>目次</h2>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="col-md-6 col-md-offset-3">
        <article <?php post_class(); ?>>
            <h4>
                <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>
            </h4>
        </article>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
  
   <?php get_footer(); ?>