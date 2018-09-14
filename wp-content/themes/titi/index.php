<?php 

get_header(); ?>

	<div class="container">
      	<div class="row">
      		<div class="col-md-8">
      			<h1 class="my-4">Page Heading<small>Secondary Text</small></h1>

				<?php if ( have_posts() ) 
				{
					while ( have_posts() ) :
						the_post();
					?>
					<?php get_template_part( 'page-templates/template','page' ); ?>
					<?php endwhile;
								
				}; ?>
				 	
			</div>			
			<div class="col-md-4">
			    <?php get_sidebar(); ?>
			</div>
        </div>
    </div>
	</div>
</div>

<?php get_footer(); ?>
