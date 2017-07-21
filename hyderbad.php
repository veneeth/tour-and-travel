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

<center><h3 style="color: #f57c00;"><strong>Place Details</strong></h3>
</center>
   
<?php


$con=  mysqli_connect("localhost", "root", "", "project");

        if(!$con)
       {
           die('not connected');
       }
            $result=  mysqli_query($con, "SELECT addplace,description, stayamount, foodamount, airlinesamount, noofdays,noofnights, adults,children,
    SUM(stayamount + foodamount + airlinesamount) AS totalamount,choose
FROM adddetails where addplace='hyderbad' GROUP BY packageid");



?>
<div class="container"> 
<form action="hyd.php" method="POST"> 
<table class="table table-bordered" >

 

        <?php

             while($row =mysqli_fetch_array($result))

             {
                 ?>
            <tr>
                <td rowspan="9" align="center" style="vertical-align:middle;"><img src="hyderabad.jpg" alt="" height=150 width=150></td>
                <td><strong>Place Name:</strong><input type="text" name="name" value="hyderbad" hidden> <?php echo $row['addplace']; ?></td>
               
            </tr>
            <tr>
                <td><strong>Description:</strong><?php echo $row['description']; ?></td>
            </tr>
            <tr>
                <td><strong>No of Days:</strong><input type="number" name="days" value="4" hidden> <?php echo $row['noofdays']; ?>&nbsp;&nbsp;&nbsp;<strong>No of Nights:</strong><input type="number" name="nights" value="3" hidden><?php echo $row['noofnights']; ?></td>

            </tr>
            <tr>
                <td><strong>No of Adults:</strong><?php echo $row['adults']; ?>&nbsp;&nbsp;&nbsp;<strong>No of Children:</strong><?php echo $row['children']; ?></td>

            </tr>
            <tr>
                <td><strong>Stay Amount&nbsp;</strong><input type="number" name="stay" value="2500" hidden> Rs:<?php echo $row['stayamount']; ?></td>

            </tr>
            <tr>
                <td><strong>Food Amount&nbsp;</strong><input type="number" name="food" value="1500" hidden> Rs:<?php echo $row['foodamount']; ?></td>
            </tr>
             <tr>
                <td><strong>Travelling Amount&nbsp;</strong><input type="number" name="travel" value="5000" hidden> Rs:<?php echo $row['airlinesamount']; ?></td>

            </tr>
            <tr>
                <td><strong>Date:</strong><input type="Date" name="doj" required></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Total:</strong><input type="number" name="total" value="9000" hidden><?php echo $row['totalamount']; ?></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Confirm booking">
</form></td>
            </tr>
        <?php
             }
             ?>
             </table>
             </form>
            </div>


   <br>
  

 



  

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
