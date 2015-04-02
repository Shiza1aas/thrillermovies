<?php
       require_once('functions.php'); 
       $triangle = getMovieInfo('triangle');
       $Predestination = getMovieInfo('Predestination');
       $silence_of_the_lambs = getMovieInfo('The Silence of the Lambs');
       $shutter_island = getMovieInfo('Shutter Island');
?>
  
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner center-block " role="listbox">
              
              <div class="item  active">
                <?php  echo "<img src='$triangle->Poster'>"; ?>
                
              </div>
              <div class="item ">
                <?php  echo "<img src='$Predestination->Poster'>"; ?>
                
              </div>
              <div class="item ">
                <?php  echo "<img src='$shutter_island->Poster'>"; ?>
                 
              </div>
              <div class="item ">
                <?php  echo "<img src='$silence_of_the_lambs->Poster'>"; ?>
                
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
          