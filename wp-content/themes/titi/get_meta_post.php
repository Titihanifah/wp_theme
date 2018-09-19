<?php $halaman = get_post_meta( $book->ID, 'Book', TRUE);
  	if (!empty($halaman)) {  ?>
  		<div class="">
  			<?php echo $chk ?>
  		</div>
  	<?php }
   ?>