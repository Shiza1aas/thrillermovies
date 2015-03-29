<?php 
	require_once('connectvars.php');
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
     <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
   



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<div class="well">
  		<div class = "container">
	  		<div class = "row">
	  			<div role="tabpanel">

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
				    <li role="presentation"><a href="#title" aria-controls="title" role="tab" data-toggle="tab">Titles</a></li>
				    <li role="presentation" class="active"><a href="#explaination" aria-controls="explaination" role="tab" data-toggle="tab">Explaination</a></li>
				    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane" id="home">
				    	<br>
				    	<div class = "row">
					        <div class="alert alert-success text-center" role="alert">
					        	<h3> Welcome in the world of thriller movies.</h3>
					        	<h4>Here, we will give you a platform to dive in the world of Thriller Movies.</h4>
					        </div>
					    	
					    </div>
				    </div>
				    <div role="tabpanel" class="tab-pane " id="title">
				    	<?php require_once('title.php'); ?>
				    </div>
				    <div role="tabpanel" class="tab-pane  active" id="explaination">
				    	<?php require_once('explaination.php'); ?>
				  	</div>
				    <div role="tabpanel" class="tab-pane" id="settings">...</div>
				  </div>

				</div>
	  		</div>
	  	</div>
  	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/title.js"></script>
  </body>
</html>