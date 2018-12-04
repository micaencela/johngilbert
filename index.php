<?php get_header(); ?>

<div class="container">

	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			get_template_part('content','index');
			//
		} // end while
	} // end if
	?>



</div>
<?php get_footer(); ?>
