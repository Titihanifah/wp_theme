<script type='text/javascript'>
	/* <![CDATA[ */
	var userSettings = {"url":"\/blog\/","uid":"1","time":"1537167965","secure":""};var pluploadL10n = {"queue_limit_exceeded":"You have attempted to queue too many files.","file_exceeds_size_limit":"%s exceeds the maximum upload size for this site.","zero_byte_file":"This file is empty. Please try another.","invalid_filetype":"Sorry, this file type is not permitted for security reasons.","not_an_image":"This file is not an image. Please try another.","image_memory_exceeded":"Memory exceeded. Please try another smaller file.","image_dimensions_exceeded":"This is larger than the maximum size. Please try another.","default_error":"An error occurred in the upload. Please try again later.","missing_upload_url":"There was a configuration error. Please contact the server administrator.","upload_limit_exceeded":"You may only upload 1 file.","http_error":"HTTP error.","upload_failed":"Upload failed.","big_upload_failed":"Please try uploading this file with the %1$sbrowser uploader%2$s.","big_upload_queued":"%s exceeds the maximum upload size for the multi-file uploader when used in your browser.","io_error":"IO error.","security_error":"Security error.","file_cancelled":"File canceled.","upload_stopped":"Upload stopped.","dismiss":"Dismiss","crunching":"Crunching\u2026","deleted":"moved to the trash.","error_uploading":"\u201c%s\u201d has failed to upload."};/* ]]> */
</script>
<script type='text/javascript' src='http://localhost/blog/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=jquery-core,jquery-migrate,utils,moxiejs,plupload,plupload-handlers&amp;ver=4.9.8'></script>
<style type="text/css"> 
#adminmenu #toplevel_page_edit-post_type-acf a[href="edit.php?post_type=acf&page=acf-upgrade"]{ display: none; }
#adminmenu #toplevel_page_edit-post_type-acf .wp-menu-image { background-position: 1px -33px; }
#adminmenu #toplevel_page_edit-post_type-acf:hover .wp-menu-image,
#adminmenu #toplevel_page_edit-post_type-acf.wp-menu-open .wp-menu-image { background-position: 1px -1px; }
</style>
<link id="wp-admin-canonical" rel="canonical" href="http://localhost/blog/wp-admin/media-new.php" />
<script>
	if ( window.history.replaceState ) {
		window.history.replaceState( null, null, document.getElementById( 'wp-admin-canonical' ).href + window.location.hash );
	}
</script>
<script type="text/javascript">var _wpColorScheme = {"icons":{"base":"#82878c","focus":"#00a0d2","current":"#fff"}};</script>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
</head>
<body class="wp-admin wp-core-ui no-js  media-new-php auto-fold admin-bar branch-4-9 version-4-9-8 admin-color-fresh locale-en-us no-customize-support no-svg">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
				// The customizer requires postMessage and CORS (if the site is cross domain)
				b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
			}());
		</script>
		<!--<![endif]-->

		<div id="wpwrap">
			<div id="wpbody" role="main">
				<div id="wpbody-content" aria-label="Main content" tabindex="0">
					<div id="screen-meta" class="metabox-prefs">
						<div id="contextual-help-wrap" class="hidden" tabindex="-1" aria-label="Contextual Help Tab">
							<div id="contextual-help-back"></div>
							<div id="contextual-help-columns">
								<div class="contextual-help-tabs">
									<ul>
										<li id="tab-link-overview" class="active">
											<a href="#tab-panel-overview" aria-controls="tab-panel-overview">
											Overview								</a>
										</li>
									</ul>
								</div>
								<div class="contextual-help-sidebar">
									<p><strong>For more information:</strong></p><p><a href="https://codex.wordpress.org/Media_Add_New_Screen">Documentation on Uploading Media Files</a></p><p><a href="https://wordpress.org/support/">Support Forums</a></p>
								</div>

								<div class="contextual-help-tabs-wrap">

									<div id="tab-panel-overview" class="help-tab-content active">
										<p>You can upload media files here without creating a post first. This allows you to upload files to use with posts and pages later and/or to get a web link for a particular file that you can share. There are three options for uploading files:</p><ul><li><strong>Drag and drop</strong> your files into the area below. Multiple files are allowed.</li><li>Clicking <strong>Select Files</strong> opens a navigation window showing you files in your operating system. Selecting <strong>Open</strong> after clicking on the file you want activates a progress bar on the uploader screen.</li><li>Revert to the <strong>Browser Uploader</strong> by clicking the link below the drag and drop box.</li></ul>							</div>
									</div>
								</div>
							</div>
						</div>
						<div id="screen-meta-links">
							<div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
								<button type="button" id="contextual-help-link" class="button show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">Help</button>
							</div>
						</div>
						<div class="wrap">
							<h1>Upload New Logo</h1>

							<form enctype="multipart/form-data" method="post" action="http://localhost/blog/wp-admin/media-new.php" class="media-upload-form type-form validate" id="file-form">
								<div id="media-upload-notice"></div>
								<div id="media-upload-error"></div>

								<script type="text/javascript">
									var resize_height = 1024, resize_width = 1024,
									wpUploaderInit = {"browse_button":"plupload-browse-button","container":"plupload-upload-ui","drop_element":"drag-drop-area","file_data_name":"async-upload","url":"http:\/\/localhost\/blog\/wp-admin\/async-upload.php","filters":{"max_file_size":"134217728b"},"multipart_params":{"post_id":0,"_wpnonce":"e70e702ef5","type":"","tab":"","short":"1"}};
								</script>

								<div id="plupload-upload-ui" class="hide-if-no-js">
									<div id="drag-drop-area">
										<div class="drag-drop-inside">
											<p class="drag-drop-info">Drop files here</p>
											<p>or</p>
											<p class="drag-drop-buttons"><input id="plupload-browse-button" name="file-logo" type="button" value="Select Files" class="button" /></p>
										</div>
									</div>
									<p class="upload-flash-bypass">
										You are using the multi-file uploader. Problems? Try the <a href="http://localhost/blog/wp-admin/media-new.php?browser-uploader" target="_blank">browser uploader</a> instead.	</p>
								</div>

								<div id="html-upload-ui" class="hide-if-js">
									<p id="async-upload-wrap">
										<label class="screen-reader-text" for="async-upload">Upload</label>
										<input type="file" name="async-upload" id="async-upload" />
										<input type="submit" name="html-upload" id="html-upload" class="button button-primary" value="Upload"  />		<a href="#" onclick="try{top.tb_remove();}catch(e){}; return false;">Cancel</a>
									</p>
									<div class="clear"></div>
									<p class="upload-html-bypass hide-if-no-js">
										You are using the browser&#8217;s built-in file uploader. The WordPress uploader includes multiple file selection and drag and drop capability. <a href="#">Switch to the multi-file uploader</a>.	</p>
								</div>

								<p class="max-upload-size">Maximum upload file size: 128 MB.</p>

								<script type="text/javascript">
									var post_id = 0, shortform = 3;
								</script>
								<input type="hidden" name="post_id" id="post_id" value="0" />
								<input type="hidden" id="_wpnonce" name="_wpnonce" value="e70e702ef5" /><input type="hidden" name="_wp_http_referer" value="/blog/wp-admin/media-new.php" />	<div id="media-items" class="hide-if-no-js"></div>

								<div class="clear"></div>
								<input type="text" value="<?php echo $_POST['file-logo'] ?>">

								<button type="submit"  class="button button-primary" >Save</button>
							</form>
						</div>


						<div class="clear"></div></div><!-- wpbody-content -->
						<div class="clear"></div></div><!-- wpbody -->
						<div class="clear"></div></div><!-- wpcontent -->


						<script type='text/javascript'>
							/* <![CDATA[ */
							var commonL10n = {"warnDelete":"You are about to permanently delete these items from your site.\nThis action cannot be undone.\n 'Cancel' to stop, 'OK' to delete.","dismiss":"Dismiss this notice.","collapseMenu":"Collapse Main menu","expandMenu":"Expand Main menu"};var heartbeatSettings = {"nonce":"48e6e6a040"};var authcheckL10n = {"beforeunload":"Your session has expired. You can log in again from this page or go to the login page.","interval":"180"};/* ]]> */
						</script>
						<script type='text/javascript' src='http://localhost/blog/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=hoverIntent,common,admin-bar,svg-painter,heartbeat,wp-auth-check&amp;ver=4.9.8'></script>

						<div class="clear"></div></div><!-- wpwrap -->
						<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>
					</body>

