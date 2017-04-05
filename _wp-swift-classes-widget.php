<article id="wp-swift-classes-widget" class="row widget widget_meta">
	<?php if ($title): ?>
		<h6><?php echo $title; ?></h6>
		<div class="line"></div>
	<?php endif;

	if ($post_type && $posts_per_page):

		$args = array( 
		    'post_type' => $post_type, 
		    'posts_per_page' => $posts_per_page, 
		);
		global $wp_query;
		$wp_query = new WP_Query($args);
		if ( have_posts() ) :
			?>
			<ul>
				<?php
			    while ( have_posts() ) : the_post(); 
			    	$teacher = '';  
			    	if( get_field('teacher') ) {
	                 	$teacher = " <small>(".get_field('teacher').")</small>";
	                }                     
			        ?><li><a href="<?php the_permalink() ?>"><?php the_title(); echo $teacher; ?></a></li><?php 
			    endwhile; 
				?>
			</ul>
			<?php    
		endif; // End have_posts() check.	
	endif; // End $post_type && $posts_per_page check.	?>

	<?php if ($message): ?>
		<div class="message"><?php echo $message ?></div>
	<?php endif; ?>
</article>


