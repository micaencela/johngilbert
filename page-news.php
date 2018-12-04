<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>

<section class="news">
		<div class="news-content container">
	   <h1>News</h1>
  <!-- <button type="button" class="btn btn-warning btn-lg">More Info</button> -->
		</div>
	</section>

	<div class="contact-container nav-sticky"></div>

	<article>


		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="single-post">
		<h2 class="news-heading"><?php the_title();?></h2>
		<p><?php the_content(); ?></p>
		<div class="post-details">
			<p><b>Posted on:</b>

		<span class="icon-date"><?php echo get_the_date( 'Y-m-d' ); ?></span> | 
		<span class="icon-time"><?php the_time( 'H:i:s' ); ?></span></p></div></div>
		<?php endwhile; ?>



		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>

<?php get_footer(); ?>