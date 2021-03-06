<?php 
	require_once('admin/connectvars.php');
	require_once('functions.php');

 ?>

<div class="row">
<?php 
	$result=mysqli_query($dbc,"select * from slide_show"); 
	$i = 0 ;
	while ( $row = mysqli_fetch_array($result))
	{
		$i++;
	?>
		<div class="col-xs-6 col-md-3 col-lg-3 col-sm-3 " data-toggle="modal" data-target="#<?php echo $i; ?>" >
		    <a class="thumbnail">
		      <?php 
		      	$details = getMovieInfo($row['slide_title']); 
		      	echo "<img src=\"$details->Poster\">"; 
		      ?>
		    </a>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $i; ?>Label" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="<?php echo $i; ?>Label"><?php echo $details->Title.'<br>'; ?></h4>
		      </div>
		      <div class="modal-body">
		      	
		      		<div class = "well">
		      			<div class="row">
		      				<div class = "col-md-5 col-sm-5 col-lg-5">
		      					<?php echo "<img src=\"$details->Poster\"><br>";  ?>
		      				</div>
		      				<div class = "col-md-2 col-lg-2 col-sm-2" >
		      				
		      				</div>
		      				<div class = "col-md-5 col-sm-5 col-lg-5">
		      					<?php 
		      						echo "Year : ".$details->Year.'<br>';
						            echo "Rated : ".$details->Rated.'<br>';
						            // echo "Poster Image Path: ".$details->Poster.'<br>';
						            
						            echo "Released Date: ".$details->Released.'<br>';
						            echo "Runtime : ".$details->Runtime.'<br>';
						            echo "Genre : ".$details->Genre.'<br>';
						            echo "Director : ".$details->Director.'<br>';
						            echo "Writer : ".$details->Writer.'<br>';
						            echo "Actors : ".$details->Actors.'<br>';
		      					?>
		      				</div>
		      				
		      			</div>
		      			<div class="row">
		      				<br>
		      				<?php  echo "Plot : ".$details->Plot.'<br>'; ?>
		      			</div>
		      			<div class="row">
		      				<div class = "col-md-3">
		      					Rating : 
		      				</div>
		      				<?php 
		      					$rating = $details->imdbRating * 10 ;

		      					if ( $rating > 75 )
		      					{
		      						$progressClass = "success";
		      					}
		      					else if ( $rating > 50 )
		      					{
		      						$progressClass = "warning";
		      					}
		      					else
		      					{
		      						$progressClass = "danger";
		      					}

		      				 ?>
		      				<div class = "col-md-9">
		      					<div class="progress">
								  <div class="progress-bar progress-bar-<?php echo $progressClass;  ?>" style="width: <?php echo $rating; ?>%">
								    
								  </div>
								</div>
		      				</div>
		      				
		      			</div>
		      		</div>

		      	




		       <?php 
		       		// echo "IMDB-ID : ".$details->imdbID.'<br>'
		            
		           
		            // echo "Language : ".$details->Language.'<br>';
		            // echo "Country : ".$details->Country.'<br>';
		            // echo "Awards : ".$details->Awards.'<br>';
		            // echo "Metascore : ".$details->Metascore.'<br>';
		            // echo "IMDB Rating : ".$details->imdbRating.'<br>';
		            // echo "IMDB Votes : ".$details->imdbVotes.'<br>';

		        ?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		
	<?php
	}
?>
  
 </div>

 <!-- Button trigger modal -->
