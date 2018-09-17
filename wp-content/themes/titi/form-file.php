<h1>Upload Logo</h1>

<!-- <form method="POST">
    <label for="awesome_text">Awesome Text</label>
    <input type="text" name="awesome_text" id="awesome_text" value="<?php echo $value; ?>">
    <input type="submit" value="Save" class="button button-primary button-large">
</form> -->
<form method="POST">
	<div class="container">
	    <div class="row">    
	        <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">  
	            <!-- image-preview-filename input [CUT FROM HERE]-->
	            <div class="input-group image-preview">
	                <input type="text" class="form-control image-preview-filename"> <!-- don't give a name === doesn't send on POST/GET -->
	                <span class="input-group-btn">
	                    <!-- image-preview-clear button -->
	                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
	                        <span class="glyphicon glyphicon-remove"></span> Clear
	                    </button>
	                    <!-- image-preview-input -->
	                    <div class="btn btn-default image-preview-input">
	                        <span class="glyphicon glyphicon-folder-open"></span>
	                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input_file" id="input_file" value="<?php echo $value; ?>"> <!-- rename it -->
	                        <!-- <?php wp_nonce_field( 'wpshout_option_page_example_action' ); ?> -->
	                    </div>
	                </span>
	            </div><!-- /input-group image-preview [TO HERE]--> 
	        </div>
	    </div>
	</div>
	<input type="submit" value="Save Changes" class="btn btn-primary"></input>
</form>