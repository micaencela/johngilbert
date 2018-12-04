
	<div class="project-info">

	<div class="project-text">
		<p><?php the_content(); ?></p>

		<div class="button">
		<a href="<?php echo esc_url( home_url( '/index.php/contact/' ) ); ?>"><button class="contact-button">Inquire about this product</button></a>
		</div>

	</div>

	</div>
	<div class="row">
		<div class="single-image">
			<img src="<?php the_field('image')?>" alt="">
			<img src="<?php the_field('image2')?>" alt="">
		</div>
	</div>

<div class="return-button">
	<a href="<?php echo esc_url( home_url( '/index.php/products/' ) ); ?>"><button class="contact-button">Return to Products page</button></a></div></div>

