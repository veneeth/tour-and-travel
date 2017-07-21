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
    <li class="tab-link current" data-tab="tab-1" ><a href="user.php"> view places</a></li>
    <li class="tab-link current"> <a href="logout.php" style="color: #2a2a2a; font-family: Ubuntu, sans-serif;">Logout</a></li>
    

  </ul>
<center><p style="font-size: 15">Hello <?php print($_SESSION['username']);?> </p>

   <br>
  
<center><h3>Payment Succesfull!!!</h3></center>
 



  

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
