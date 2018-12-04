<?php 
  $slug = get_post_field('post_name');
?>
  <!-- About -->
  <section class="services" id="<?php echo $slug ?>">
  
<div class="service-content container content-margin content">

<h2> --- What we can do.</h2>

<div class="service-text">

<h1>John Gilbert transit door and window products have been designed for long service life and maximum reliability. </h1>

</p></div>

    <div class="container">

      <div class="service-wrap">
        <div class="row">
          
          <?php 
            $args = array('post_type' => 'service');
            $query = new WP_Query($args);
            while($query->have_posts()){

              $query->the_post();

              get_template_part('services/content','service');  

            }
            /* Restore original Post Data */
            wp_reset_postdata();

          ?>
        </div>
      </div>
    </div>
    </div>
  </section>