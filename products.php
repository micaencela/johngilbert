<section class="products">
		<div class="products-content">
	   <h1>Our Products</h1>

  <!-- <button type="button" class="btn btn-warning btn-lg">More Info</button> -->
		</div>

	</section>

	<section class=" nav-sticky">

	<!--  -->
	</section>

	<div class="prod-container res-container container">
<ul id="filters" class="clearfix">
<li><span class="filter active" data-filter="all">All</span></li>
<?php 
                //get the terms
                $terms = get_terms('type',array('hide_empty'=>false));
                
                //loop through the terms and make a link for each term
                foreach($terms as $term){
                  echo '<li><span class="filter" data-filter=".'.$term->slug.'">'.$term->name.'</span></li>';
                }

            ?>

</ul>


<div id="portfoliolist">
           <?php

            $args = array('post_type' => 'product');
            $query = new WP_Query($args);

            while($query->have_posts()){

              $query->the_post();

              get_template_part('content','product');

            }
          ?>
</div>

</div>


