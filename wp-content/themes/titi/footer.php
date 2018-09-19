	<footer class="py-5 bg-dark">
		<h4 class="text-muted text-center">Partners</h4>
		<div class="text-center">
			<?php

				// check if the repeater field has rows of data
				if( have_rows('partner','option') ): ?>

				 	<?php while( have_rows('partner','option') ): 

				 		the_row();

						// variable
				 		$image = get_sub_field('logo-partner','option');
				 		$link = get_sub_field('perusahaan','option');

				 		if( $link ): ?>
				 			<a href="<?php echo $link['url']; ?>">
				 		<?php endif; ?>
		 					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />		 				
		 					</a>
				 	<?php endwhile; ?>
				<?php
				endif;
			?>
		</div>
		<hr>
		<div class="text-center">
			<?php wp_nav_menu( array(
		        'theme_location' => 'footer-menu',
		        'container_class' => 'my_extra_menu_class'
		        
		    )); ?>
	  	</div>
		<p class="m-0 text-muted text-center"><?php echo get_field('email_contact','option');?></p>
		<p class="m-0 text-muted text-center"><?php echo get_field('alamat','option');?></p>
		<p class="text-center">
			<a href="<?php echo get_field('twitter','option');?>" class="btn btn-primary social-login-btn social-twitter" ><i class="fa fa-twitter"> </i></a>
			<a href="<?php echo get_field('facebook','option');?>" class="btn btn-primary social-login-btn social-facebook"><i class="fa fa-facebook"> </i></a>
			<a href="<?php echo get_field('linkedin','option');?>" class="btn btn-primary social-login-btn social-linkedin"><i class="fa fa-linkedin"> </i></a>
		</p>
		<hr>		
		<div class="container">
			<p class="m-0 text-white text-center"><?php $copyright= get_option('copyright');?> <?php echo $copyright ?></p>
		</div>
	</div>
	  	
	  <!-- /.container -->
	</footer>

<!-- Bootstrap core JavaScript -->
<!-- <script src="jquery/jquery.min.js" ></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<?php wp_footer();?>
</html>

