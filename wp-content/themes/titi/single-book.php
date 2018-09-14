<?php 
/**
 * Template Name: Book
 *
 * @package WordPress
 * @subpackage Titi
 */

get_header(); ?>	

<?php if ( have_posts() ) { ?>
	<div class="container">
      	<div class="row">
      		<div class="col-md-8">      			
		<?php while ( have_posts() ) {

			$args = array( 'post_type' => 'book', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) {
						$loop->the_post();	
						echo '<div class="card mb-4">
					            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
					            <div class="card-body">
					              	<h2 class="card-title">';					
					  	the_excerpt();
					  	echo '</h2><p class="card-text">';
					  	the_content();
					  	echo '</p>';
					  	echo '<a href="';
					  	the_permalink();
					  	echo '" class="btn btn-primary">Read More &rarr;</a></div></div>';
					} 
		     } ?>
	      	</div>
	    </div>
	</div>
<?php  } ?>


<?php get_footer(); ?>
