<?php 



  $terms = get_the_terms(get_the_ID(),'type');

  $classes = ''; 
  foreach($terms as $term){
    $classes .= $term->slug .' ';
  }

?>
            
  <div class="portfolio mix logo <?php echo $classes;?>" data-cat="logo" data-bound>
    <div class="portfolio-wrapper">
      <a href="<?php the_permalink()?>"><img src="<?php the_field('image')?>" alt=""></a>
      <div class="label">
        <div class="label-text">
          <a class="text-title"><?php the_title()?></a> 
     <!--      <span class="text-category">Logo</span> -->
        </div>
        <div class="label-bg"> </div>
      </div>
    </div>
  </div>