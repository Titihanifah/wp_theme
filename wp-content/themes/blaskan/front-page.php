<?php get_header();

if( get_option('show_on_front') == 'posts'): ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<section id="blog">
					<?php 
					// jika terdapat post
					if( have_posts()):
						while (have_posts()): 
							the_post();
							get_template_part('template-parts/content', get_post_format());
						endwhile;
					else:
						get_template_part('template-parts/content','none');
					endif;
					?>
				</section>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php
else:

	if( have_posts()):
		while( have_posts()): the_post();
			$static_page_content = get_the_content();
			if ($static_page_content != '') : ?>
				<section class="front-page-section" id="static-page-content">
					<div class="section-header">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<h3><?php the_title(); ?></h3>
								</div><!--/.col-sm-12-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<?php echo $static_page_content; ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endif;
		endwhile;
	endif;

endif;