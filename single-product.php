<?php get_header(); ?>

<section class="contact">
		<div class="contact-content container">
	   <h1><?php the_title(); ?></h1>
  <!-- <button type="button" class="btn btn-warning btn-lg">More Info</button> -->
		</div>
	</section>

	<div class="contact-container nav-sticky">
		<!-- Default form contact -->

<div class="container">

	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			get_template_part('content','product-single');
			//
		} // end while
	} // end if
	?>



</div>

<?php get_footer(); ?>

