<!--<?php if(! is_home()): ?>-->

<li class="post_list">
<h2 class="text-center">記事一覧</h2>
<?php $posts = get_posts('numberposts=10'); ?>
<?php foreach($posts as $post): ?>

<div class="list">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(50,50), array('class' => 'left')); ?></a>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>

<?php endforeach; ?>
</li>

<!--<?php endif; ?>-->
           

           
           
           
           
           
           
           
           
           
           

<!--
           <h1 class="text-center">記事一覧</h1>
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) :
dynamic_sidebar( 'sidebar-1' );
else: ?>
 			<section id="wordpress-seminar">
 				<h2></h2>
 				<p>
 					
 				</p>					
 			</section>
 			
 			<?php endif; ?>
-->
