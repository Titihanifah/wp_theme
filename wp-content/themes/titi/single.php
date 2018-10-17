<?php 

get_header(); ?>
<?php echo 'single'; ?>

<?php if ( have_posts() ) { ?>
	<div class="container">
      	<div class="row">
      		<div class="col-md-8">

		<?php while ( have_posts() ) {

			the_post(); ?>   
				<h1 class="my-4"><?php the_title();?></h1>  
	          	<div class="card mb-4">

		            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
		            <div class="card-body">
		              	<h2 class="card-title"><?php the_title(); ?></h2>		              	
		              	<p class="card-text"><?php the_content(); ?></p>
		            </div>
		            <div class="card-footer text-muted">
		              <?php _e( 'Posted in - ' ); the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?>
		            </div>
		            <div>
		            	<?php
		            	$font_size = get_field('font_size');

						?>
						<style type="text/css">
						<?php if( $font_size ): ?>
							h2 {
								font-size: <?php echo $font_size; ?>px;
							}
						<?php endif; ?>

		            	<?php 

							$terms = get_field('taxonomy');

							if( $terms ): ?>

								<ul>

								<?php foreach( $terms as $term ): ?>

									<h2><?php echo $term->name; ?></h2>

									<!-- view all categories (taxonomy) -->
									<a href="<?php echo get_term_link( $term ); ?>">View all '<?php echo $term[0]->title; ?>' posts</a>

								<?php endforeach; ?>

								</ul>

							<?php endif; ?>
		            </div>
		         </div>
		     <?php } ?>
	      	</div>
	    </div>
	</div>
<?php  } ?>


<?php get_footer(); ?>
