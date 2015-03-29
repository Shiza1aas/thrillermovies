<br>
<!-- Add more titles in the database -->
<div class="panel panel-success">
  <div class="panel-heading">Add a title</div>
  <div class="panel-body">
  	<div id="addTitleStatus" class="alert alert-default text-center" role="alert">
    	<img src="../image/loading.gif">
    </div>

  	<form id="addTitle" class="form-horizontal" method="post">

	  <div class="form-group">
	    <label for="title" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="title" id="title" placeholder="Movie Title">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" value="Add Question" class="btn btn-success" name="Submit ">
	    </div>
	  </div>

	</form>	
   
  </div>
</div>

<!-- List of all titles in our database -->
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">List of thriller movies</h3>
  </div>
  <div class="panel-body">
    <div class = "well list">
		<div class="row">

			<?php 
	    		$result=mysqli_query($dbc,"select * from slide_show"); 
	    		while ( $row = mysqli_fetch_array($result))
	    		{
		    	?>
		    		<div class="col-md-4 col-sm-4 col-lg-4">
		    			<?php echo $row['slide_title']; ?>
		    		</div>
		    	<?php
		    	}
	    	?>
		</div>
	</div>
  </div>
</div>