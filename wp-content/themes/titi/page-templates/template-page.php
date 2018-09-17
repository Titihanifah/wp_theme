<?php 
/**
 * Template Name: Page
 *
 * @package WordPress
 * @subpackage Titi
 */

get_header(); ?>

	<div class="container">
      	<div class="row">
      		<div class="col-md-8">
      			<h1 class="my-4">Page Heading<small>Secondary Text</small></h1>

				<?php if ( have_posts() ) 
				{
					while ( have_posts() ) 
					{
						the_post(); ?>          
				          	<div class="card mb-4">
					            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
					            <div class="card-body">
					              	<h2 class="card-title"><?php the_title(); ?></h2>
					              	<p class="card-text"><?php the_excerpt(); ?></p>
					              	<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
					            </div>
					            <div class="card-footer text-muted">
					              <?php _e( 'Posted in ' ); the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?><?php _e(' '); ?> <?php the_category(  ' ,  '  ); ?>
					            </div>
					        </div>	
					        	
					<?php 
					}             
								
				} ?> 

				 	
			</div>
			<div class="navigation">
				<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			 	<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
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
	</div>
</div>

<?php get_footer(); ?>
