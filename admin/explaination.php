<br>
<div class="panel panel-success">
  <div class="panel-heading">Explaination Of The Movie</div>
  <div class="panel-body">
  	<!-- <div id="addTitleStatus" class="alert alert-default text-center" role="alert">
    	<img src="../image/loading.gif">
    </div> -->

  	<form id="addExplaination" class="form-horizontal" method="post">

	  <div class="form-group">
	    <label for="title" class="col-sm-2 control-label">Select A Title</label>
	    <div class="col-sm-10">
	      <select class="form-control">
			  
			<?php 
	    		$result=mysqli_query($dbc,"select * from slide_show"); 
	    		while ( $row = mysqli_fetch_array($result))
	    		{
		    	?>
		    		<option>
		    			<?php echo $row['slide_title']; ?>
		    		</option>
		    	<?php
		    	}
	    	?>
			  
			  
		  </select>
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="explaination" class="col-sm-2 control-label">Explaination</label>
	    <div class="col-sm-10">
	    	<textarea class="form-control" rows="20" placeholder="Divide in three parts, start, middle and end ">
	    	<?php 
	    		$result=mysqli_query($dbc,"select * from slide_show"); 
	    		while ( $row = mysqli_fetch_array($result))
	    		{
		    	?>
		    		<option>
		    			<?php echo $row['slide_title']; ?>
		    		</option>
		    	<?php
		    	}
	    	?>
	    	</textarea>
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" value="Add Explaination" class="btn btn-success" name="btnSubmit">
	    </div>
	  </div>

	</form>	
   
  </div>
</div>