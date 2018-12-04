<section class="portfolio" id="<?php echo $slug ?>">
		<div class="portfolio-content container content">
      <div class="portfolio-text">
		<h2>--- What we have to offer.</h2>
		<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
	</div>
	    <div class="container">

      <div class="portfolio-wrap content">
        <div class="row">
          <?php 
            $args = array('post_type' => 'portfolio');
            $query = new WP_Query($args);
            while($query->have_posts()){

              $query->the_post();

              get_template_part('portfolio/content','portfolio-item');  

            }
            /* Restore original Post Data */
            wp_reset_postdata();

          ?>
        </div>
		

	</div>

		</div>
	</section>