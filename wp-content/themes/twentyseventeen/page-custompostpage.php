	<?php
	$PostType = 'post';
	$PostStatus = 'publish';
	$PostsPerPage = -1;
	CustomPostCall($PostType, $PostStatus, $PostsPerPage);
	?>

	<?php
	function CustomPostCall($PostType, $PostStatus, $PostsPerPage) {

		// In the below array we can set more parameters and pass along to the function
		$args = array (
			'post_type' => $PostType,
			'post_status' => $PostStatus,
			'posts_per_page' => $PostsPerPage,
		);

		$the_query = new WP_Query($args); //calling the post with the above arguments
		?>

		<?php if ( $the_query->have_posts() ) : ?>

		<ul>
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    <li>
		    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    	<?php the_content(); ?>
		    </li>
		<?php endwhile; ?>
		<!-- end of the loop -->
		</ul>

		<?php wp_reset_postdata(); ?>

		<?php endif; ?>
	<?php } ?>
