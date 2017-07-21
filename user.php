     <?php
        session_start();
        if(!$_SESSION['username']){
           session_destroy();
           header("location:index.php");
           exit();
        }?>


        <?php
if(isset($_GET['submit'])){
  if(empty($_GET['query'])){
echo "Enter a search term";
  }

$query=$_GET['query'];
echo $query;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Tours</title>

 
    <link href="css/bootstrap.min.css" rel="stylesheet">

 
    <link href="css/travel.css" rel="stylesheet">

 
<script>




$(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})
  </script>
</head>

<body>

   


    <header id="myCarousel" class="carousel slide">
    
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

       
        <div class="carousel-inner">
            <div class="item active">
           
                <div class="fill" style="background-image:url('01.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Are You Planning For a Trip</h2>
                </div>
            </div>
            <div class="item">
              
                <div class="fill" style="background-image:url('02.jpg');"></div>
                <div class="carousel-caption">
                    <h2>...Lets Go...</h2>
                </div>
            </div>
            <div class="item">
                
                <div class="fill" style="background-image:url('03.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Grab Huge Discounts</h2>
                </div>
            </div>
        </div>

       
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
  
  <div class="uu">
  <div class="container2">

  <ul class="tabs">
    <li class="tab-link current" data-tab="tab-1">view places</li>
    <li class="tab-link current"> <a href="logout.php" style="color: #2a2a2a; font-family: Ubuntu, sans-serif;">Logout</a></li>
    

  </ul>
<center><p>Where are you planning <?php print($_SESSION['username']);?> ? </p>
<form action="" method="GET">
        <input type="text" name="query" />
        <input type="submit" name="submit" value="Search" />
    </form>
   
</center><br>
  

  <div id="tab-1" class="tab-content current">

  <div class="row">
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img  src="mumbai.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="mumbai.php" id="mumbai"> Mumbai </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 3 Days 2 Nights</p>
                    <p>Rs 7500 Approximate</p>

                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="delhi1.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="delhi.php"> Delhi </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 5 Days 4 Nights</p>
                    <p>Rs 17,500 Approximate</p>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="banglore.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="banglore.php"> Banglore </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 4 Days 3 Nights</p>
                    <p>Rs 10,500 Approximate</p>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="goa.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="goa.php"> Goa </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 5 Days 4 Nights</p>
                    <p>Rs 25,500 Approximate</p>

                </div>
            </div>
        </div>
    </div>


































    <div class="row">
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img  src="kerla.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="kerla.php"> Kerla </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 6 Days 5 Nights</p>
                    <p>Rs 27,500 Approximate</p>

                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="kolkata.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="kolkata.php"> Kolkata </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 5 Days 4 Nights</p>
                    <p>Rs 17,500 Approximate</p>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="pondicherry.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="pondicherry.php"> Pondicherry </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 3 Days 2 Nights</p>
                    <p>Rs 5,500 Approximate</p>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="kashmir.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="kashmir.php"> Kashmir </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 7 Days 6 Nights</p>
                    <p>Rs 40,000 Approximate</p>

                </div>
            </div>
        </div>
    </div>




    </div>




















   <div class="row">
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img  src="hyderabad.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="hyderbad.php"> Hyderbad </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 4 Days 3 Nights</p>
                    <p>Rs 13000 Approximate</p>

                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="kodaikanal.jpg" alt="Card image cap" width="230" height="240">
            <div class="card-block">

               <center><h4 class="card-title"><a href="kodaikanal.php"> Kodaikanal </a></h4></center> 
                <div class="card-text">
                    
                    <p>Number of Days: 3 Days 2 Nights</p>
                    <p>Rs 9500 Approximate</p>

                </div>
            </div>
        </div>
    </div>
    

  </div>


























  

</div>
</div>
  

    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

   
    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
    </script>

</body>

</html>
