<?php 

get_header(); ?>
<?php echo 'page'; ?>
	

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
		              
			            </div>
		            <div class="card-footer text-muted">
		              <?php _e( 'Posted in ' ); the_time('F jS, Y'); ?> by <?php the_author_posts_link(); the_category(  ' ,   '  ); ?>
		            </div>
		         </div>
	      	</div>
	      	<div class="col-md-4">
				<?php if(is_active_sidebar('sidebar-1')): ?>
					<div id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar('sidebar-1'); ?>					
					</div>							
				<?php endif; ?>
			</div>
	    </div>
	</div>

<?php } } ?>
</div>

<?php get_footer(); ?>
