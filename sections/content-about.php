<?php 
  $slug = get_post_field('post_name');
?>
	<!-- About -->
	<section class="about-main nav-sticky" id="<?php echo $slug ?>">
		<div class="about-content container content-margin content">

		<div class="about-info left">

			<h2> ---This is our company.</h2>

			<h1>John Gilbert and Co. Ltd. was established in 1932 and is redefining standards for the design and manufacture of door and window systems.</h1>

		<?php the_content()?></div>

		<div class="right">

		<img class ="about-image" src="<?php the_field('image')?>" alt="">
	

		</div>
	</section>