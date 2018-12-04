<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/style.css">


  <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Oswald" rel="stylesheet">
   <?php wp_head();?>

	<title>John Gilbert & Co. Ltd. | Transit Doorgear and Window Systems</title>
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar sticky-top navbar-expand-lg navbar-transparent navbar-dark" style="width: 100%;">
  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/index.php/home/' ) ); ?>">John Gilbert</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">

      <?php 
          //output the main nav
          $args = array(
              'theme-location'=>'main-menu',
              'container'=>'ul',
              'menu_class'=>'navbar-nav'

          );
          wp_nav_menu($args);

        ?>
   
  </div>
</nav>