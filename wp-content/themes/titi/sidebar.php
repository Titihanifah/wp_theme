
	<!-- Search Widget -->
  	<div class="card my-4">
    	<h5 class="card-header">Search</h5>
    	<div class="card-body">
      		<div class="input-group">
        		<input type="text" class="form-control" placeholder="Search for..." value=" <?php $search_query = get_search_query(); ?> ">
        		<span class="input-group-btn"><button class="btn btn-secondary" type="button">Go!</button></span>
      		</div>
    	</div>
  	</div>

  	<!-- Search Widget -->
  	<div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8">
              <ul class="list-unstyled mb-0">
                <li>
                <?php wp_list_categories( array(
			        'orderby' => 'name',
			        'include' => array( 0,1,2 )
			    ) ); ?> 
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
