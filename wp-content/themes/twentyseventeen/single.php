<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );
?>


<div id="related">
<h3>
	<span>関連記事</span>
</h3>
<ol>
				<?php
				// カテゴリーが複数設定されている場合は、どれかをランダムに取得
				$categories = wp_get_post_categories($post->ID, array('orderby'=>'rand'));
				//表示したい記事要素を設定
				if ($categories) {
				    $args = array(
				        'category__in' => array($categories[0]), // カテゴリーのIDで記事を取得
				        'post__not_in' => array($post->ID), // 表示している記事は除外する
				        'showposts'=>4, // 取得したい記事数
				        'caller_get_posts'=>1, // 取得した記事を1番目から表示する
				        'orderby'=> 'rand' // ランダムで取得する
				    );
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) { $my_query->the_post();
				?>
				<li>
					<span class="cat-thum">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>の詳細へ"><?php
					if ( has_post_thumbnail()) {
							 the_post_thumbnail('thumbnail');
							} else {
						 echo '<img src="'.get_bloginfo('template_url').'/images/no-image.gif" alt="hoge" />';
						 };
					?></a>
					</span>
				<div>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</div>
		</li>
				<?php } wp_reset_query();
				} else { ?>
				<p class="no-related">関連記事ないわ</p>
				<?php } } ?>
			</ol>
</div>

<?php
















				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation(
					array(
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
					)
				);


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
