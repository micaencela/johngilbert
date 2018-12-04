<?php 
	/* Template Name: One Page */ 
?>
<?php get_header(); ?>


	<?php 

	$sectionsIds = get_field('sections',false,false);

  	// The Query
  	$args = array(
  		'post_type' =>'section',
  		'post__in'	=> $sectionsIds,
  		'orderby'	=> 'post__in'
  	);
	$the_query = new WP_Query( $args );

	// The Loop
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$slug = get_post_field('post_name');

		if(locate_template(array('sections/content-'.$slug.'.php'))){
			get_template_part('sections/content',$slug);
		}else{
			get_template_part('sections/content','default');
		}
		
	}

	/* Restore original Post Data */
	wp_reset_postdata();
?>


<?php get_footer(); ?>










