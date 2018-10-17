<?php 
/**
 * Template Name: Page Home
 *
 * @package WordPress
 * @subpackage Titi
 */

get_header(); ?>
<?php echo 'page home'; echo 'page'.$_GET['halaman'];  ?>

	

<?php if ( have_posts() ) { ?>
	<div class="container">
      	<div class="row">
      		<div class="col-md-8"> 

		<?php 

		if ( isset($_GET['genre']) || isset($_GET['writer']) || isset($_GET['halaman'])){
			$args = array(
				'post_type' 	=> 'book',
				'post_status'   => 'publish',
				'posts_per_page'=> -1,
				'nopaging'		=> true,
				'order'	 		=> 'DESC',
				'meta_key'		=> 'halaman',
				'meta_value'	=> $_GET['halaman'], 
				'meta_compare' => '=',	
				'tax_query'		=> array(
					'relation'  => 'OR',
						array(
							'taxonomy'		=> 'genre' , 
							'field'			=> 'slug',
							// 'field' 		=> 'term_id'
							'terms'			=>  $_GET['genre'],
							// 'terms'			=>  $_GET['genre'],
							'operator'  	=> 'IN',
							'include_children' => true,		
						),
						array(
							'taxonomy'		=> 'writer' , 
							'field'			=> 'slug',
							'terms'			=>  $_GET['writer'],
							'operator'  	=> 'IN',
						)									
				),
				
			);

			}else{

				$args = array( 'post_type' => 'book', 'posts_per_page' => 10 );

			}

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) {
						$loop->the_post();	
						echo '<div class="card mb-4">
					            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
					            <div class="card-body">
					              	<h2 class="card-title">';					
					  	the_title();
					  	echo '</h2><p class="card-text">';
					  	the_excerpt();
					  	echo '</p>';
					  	echo '<a href="';
					  	the_permalink();
					  	echo '" class="btn btn-primary">Read More &rarr;</a></div></div>';
					  	echo 'halaman acf =';
					  	echo get_field('halaman'); 
					} 
		     ?>
		 </div>
		 <div class="col-md-4">
		 	<form method="GET" action="">
		 		<div>
			 		<label>Page</label>
			 		<input type="number" name="halaman" value="<?php echo $_GET['halaman']; ?>" />
			 	</div>
			 	<!-- <div>
			 		<label>Movies</label>
			 		<input type="text" name="movies" value="<?php echo $_GET['movies']; ?>" />
			 	</div> -->
			 	<div>
			 		<label>Genre</label>
			 		<input type="text" name="genre" value="<?php echo $_GET['genre']; ?>" />
			 	</div>
			 	<div>
			 		<label>Writer</label>
			 		<input type="text" name="writer" value="<?php echo $_GET['writer']; ?>" />
			 	</div>
		 		<button type="submit">Search</button>
		 	</form>
		 </div>
		</div>
	</div>
<?php  } ?>
<?php wp_reset_query(); ?>
	



<?php get_footer(); ?>
