	<footer class="py-5 bg-dark">
	  	<div class="container">
	    	<p class="m-0 text-center text-white"><?php $copyright= get_option('copyright');?> <?php echo $copyright ?></p>
	  	</div>
	  	<div>
			<?php wp_nav_menu( array(
		        'theme_location' => 'footer-menu',
		        'container_class' => 'my_extra_menu_class'
		    )); ?>
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
