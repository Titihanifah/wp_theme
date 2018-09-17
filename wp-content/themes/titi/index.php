<?php 

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
								
				}  

				 	// list categories
					$taxonomy = 'category';
					 
					// Get the term IDs assigned to post.
					$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
					 
					// Separator between links.
					$separator = ', ';
					 
					if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) 
					{
					 
					    $term_ids = implode( ',' , $post_terms );
					 
					    $terms = wp_list_categories( array(
					        'title_li' => '',
					        'style'    => 'none',
					        'echo'     => false,
					        'taxonomy' => $taxonomy,
					        'include'  => $term_ids
					    ) );
					 
					    $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
					 
					    // Display post categories.
					    echo  $terms;
					} ?>
			</div>
			<div class="navigation">
				<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			 	<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
			</div>
			<div class="col-md-4">
			</div>
        </div>
    </div>
	</div>
</div>

<?php get_footer(); ?>
