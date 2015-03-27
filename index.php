<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thriller Movies</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
       require_once('functions.php'); 
       $triangle = getMovieInfo('triangle');
       $Predestination = getMovieInfo('Predestination');
       $silence_of_the_lambs = getMovieInfo('The Silence of the Lambs');
       $shutter_island = getMovieInfo('Shutter Island');
    ?>
  	<!-- Navbar for the header goes here -->
		<nav class="navbar navbar-default navbar-custom">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Thriller Movies</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">List of Movies <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Compare</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

	<!-- slider for the home page -->
		
		<div class="container">
		  
      <div class="row">
        <div class = "col-md-6 col-lg-6 col-sm-6">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              
              <div class="item active">
                <?php  echo "<img src=\"$triangle->Poster\">"; ?>
                <span> <?php echo "Plot : ".$triangle->Plot; ?> </span>
              </div>
              <div class="item">
                <?php  echo "<img src=\"$silence_of_the_lambs->Poster\">"; ?>
                 <span> <?php echo "Plot : ".$silence_of_the_lambs->Plot; ?> </span>
              </div>
              <div class="item">
                <?php  echo "<img src=\"$Predestination->Poster\">"; ?>
                 <span> <?php echo "Plot : ".$Predestination->Plot; ?> </span>
              </div>
              <div class="item">
                <?php  echo "<img src=\"$shutter_island->Poster\">"; ?>
                 <span> <?php echo "Plot : ".$shutter_island->Plot; ?> </span>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>  
          </div>
          <div class ="col-md-6 col-lg-6 col-sm-6">
             <div class="well">
              <div class="thriller">
                  <h3>What is a thriller movie?</h3>
                  <h4>If the genre is to be defined strictly, a genuine thriller is a film that rentlessly pursues a single-minded goal - to provide thrills and keep the audience cliff-hanging at the 'edge of their seats' as the plot builds towards a climax.</h4>
                  <h4>
                    Here, I am giving you some lists of the thriller movies, which are beyond imaginations. Believe me, I have watched all these movies myself and tried to understand.
                  </h4>
              </div>
             </div>
          </div>
        </div>
		  
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>