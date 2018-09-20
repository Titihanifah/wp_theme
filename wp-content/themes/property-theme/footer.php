<!-- Footer -->
	<div class="footer">
		<div class="top-footer">
			<div class="container property-agency">
				<div class="col-md-4 property-logo">
					<img src="assets/images/tonjoo-property-footer.jpg">
				</div>
				<div class="col-md-8 property-info">
					<div class="col-md-8">
						Tonjoo Property is theme <strong>designed for you POPERTY AGENCY</strong>
					</div>
					<div class="col-md-4 text-right">
						<button class="default-rounded">
							SIGN UP
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="middle-footer">
			<div class="container">
				<div class="col-md-3 overview-footer">
					<div class="overview-logo">
						<img src="assets/images/tonjoo-corp-footer.jpg">
					</div>
					<div class="overview-content">
						Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an
					</div>
				</div>
				<div class="col-md-5">
					<div class="col-md-6">
						<div class="title">
							USEFULL LINK
						</div>
						<ul>
							<li><a href="">Blog</a></li>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Listing</a></li>
							<li><a href="">Property Listing</a></li>
							<li><a href="">Property Search</a></li>
							<li><a href="">SPecial Tabs</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<div class="title">
							INFORMATION
						</div>
						<ul>
							<li><a href="">About Company</a></li>
							<li><a href="">Our Team</a></li>
							<li><a href="">Registration</a></li>
							<li><a href="">Payment Option</a></li>
							<li><a href="">Information</a></li>
							<li><a href="">FAQ</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="title">
						INSTAGRAM
					</div>
					<div class="instagram-images">
						<img src="assets/images/image01.jpeg">
						<img src="assets/images/image02.jpeg">
						<img src="assets/images/image03.jpeg">
						<img src="assets/images/image04.jpeg">
						<img src="assets/images/image05.jpg">
						<img src="assets/images/image06.jpeg">
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="col-md-6 text-left">
					&copy;2014 - ALL RIGHT RESERVED
				</div>
				<div class="col-md-6 text-right">
					<a href="https://tonjoo.com/" target="_blank">TONJOOSTUDIO.COM</a>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

   	<script>
	    jQuery(function() {
			jQuery( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 200,
			values: [ 0, 150 ],
			slide: function( event, ui ) {
			jQuery( "#amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
			}
	    });

	    	jQuery( "#amount" ).val(jQuery( "#slider-range" ).slider( "values", 0 ) +" - " + jQuery( "#slider-range" ).slider( "values", 1) );
	 	});
	</script>
</body>
<?php wp_footer();?>
</html>