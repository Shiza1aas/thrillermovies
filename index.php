<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thriller Movies</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
      <header>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a id ="home">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#" id ="list">List</a></li>
                <li><a href="#" id ="setting">Compare</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>  
      </header>

      <!-- body elements -->
      
      <div class = "well">
                  
        <div id ="contents">
          <br>
          <!-- Text which has greater value -->
          <div>
            <div class = "row">
              <div class="alert alert-success text-center" role="alert"><h3>If you are looking for a site, where you can see the list of all verified thrillers, then you are at the right place.</h3></div>
            </div>
          </div>
          <!-- slider for the home page -->
          <div class="container">
            <div class="row">
              <div class = "col-md-6 col-lg-6 col-sm-6">
                <div id="caurasoul">
                  <div class="text-center">
                    <img class="img img-responsive" src="image/loading.gif">

                  </div>
                  <!-- Get content from ajax call -->
                </div>
              </div>
              <div class ="col-md-6 col-lg-6 col-sm-6">
                 <div class="well">
                  <div class="thriller">
                      <h3>What is a thriller movie?</h3>
                      <h4>If the genre is to be defined strictly, a genuine thriller is a film that rentlessly pursues a single-minded goal - to provide thrills and keep the audience cliff-hanging at the 'edge of their seats' as the plot builds towards a climax.</h4>
                      <h4>
                       Believe me, I love watching thriller movies more than anything. These movies are real movies, where you can't guess the last scene. I enjoyed a lot of thriller movies and then thought to make a site, where you can easily watch a movie.
                      </h4>
                  </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/home.js"></script>
  </body>
</html>