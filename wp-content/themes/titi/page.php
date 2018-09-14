<?php 

get_header(); ?>
	

<?php if ( have_posts() ) { ?>
	<div class="container">
      	<div class="row">
      		<div class="col-md-8">      			
		<?php while ( have_posts() ) {

			the_post(); ?>   

	          	<div class="card mb-4">
		            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
		            <div class="card-body">           	
		              	<h2 class="card-title"><?php the_title(); ?></h2>		              	
		              	<p class="card-text"><?php the_content(); ?></p>
		              	<a href="<?php the_permalink(); ?>" rel="bookmark" class="btn btn-primary">Read More &rarr;</a>
		              	<a class="btn btn-primary" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		            </div>
		            <div class="card-footer text-muted">
		              <?php _e( 'Posted in ' ); the_time('F jS, Y'); ?> by <?php the_author_posts_link(); the_category(  ' ,   '  ); ?>
		            </div>
		         </div>
	      	</div>
	    </div>
	</div>

<?php } } ?>
</div>

<?php get_footer(); ?>
