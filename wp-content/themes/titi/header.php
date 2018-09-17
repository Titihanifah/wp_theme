<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

  
<?php wp_head();?> 
  </head>

  <body>
    <div class="top-menu"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><?php theme_prefix_the_custom_logo()?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav ml-auto">
            <li>
              <?php wp_nav_menu( array(
                'theme_location' => 'extra-menu',
                'container_class' => 'my_extra_menu_class'
              )); ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>