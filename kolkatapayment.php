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
     <style>
      
input[type=radio] + .details{
  display: none;
}

input[type=radio]:checked + .fordebit {
  display: block;
}

input[type=radio]:checked + .forcredit {
  display: block;
}
input[type=radio] {
  float:left;
}



    </style>


 
    <link href="css/bootstrap.min.css" rel="stylesheet">

 
    <link href="css/travel1.css" rel="stylesheet">

 
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
<center><p style="font-size: 10">Hello <?php print($_SESSION['username']);?> </p><br>

<h3>Payment Details</h3><br>

<?php


$con=  mysqli_connect("localhost", "root", "", "project");

        if(!$con)
       {
           die('not connected');
       }
            $result=  mysqli_query($con, "SELECT name, stay, food, travel,  
    total,doj
FROM placedetails where name='kolkata' ORDER BY id desc limit 1");



?>
<div class="container">  
<table class="table table-hover">
<thead>
    <tr>
        <th>place</th>
        <th>stay cost</th>
        <th>food cost</th>
        <th>flight cost</th>
        <th>Date of journey</th>
        <th>Total cost</th>
    </tr>

</thead>
  


       <tbody>
               <?php

             while($row =mysqli_fetch_array($result))
          
             {
                 ?>
            
              <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['stay']; ?></td>
                <td><?php echo $row['food'] ;?></td>
                <td><?php echo $row['travel'] ;?></td>
                <td><?php echo $row['doj'] ;?></td>
                <td><?php echo $row['total'] ;?></td>                
            </tr>

            
        <?php
             }
             ?>

       </tbody>
             </table>
            </div>






 <form method="post" name="myForm" action="confirmpayment.php">

  <h2>Payment type:</h2>
  <div>
    <div>
      Credit card
      <input type="radio" name="payment_type" id="credit" required>

      <div class="forcredit details">
       <table>
       <tr>
          <td> <label>Card no:</label></td>
              <td><input type="text" name="cardno"><br><span style="color: red;">*enter 16 digit card no</span></td>
       </tr>
        <tr>
            <td><label>Cvv no:</label></td>
                 <td><input type="text" name="cvvno"><br><span style="color: red;">*enter 3 digits</span></td>
        </tr>
        <tr>
             <td><label>Expiration MM/YYYY</label></td>
                 <td><select name="expiremonth">
                  <?php
                   for ($i=01; $i<=12; $i++)
                    {
                  ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
                    }
                  ?>
                   </select>
                   <select name="expireyear">
                  <?php
                   for ($i=2000; $i<=2050; $i++)
                    {
                  ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
                    }
                  ?>
                   </select><span style="color: red;">*</span></td>
        </tr>
       </table>
      </div>
    </div>

    <div>
      Debit card
      <input type="radio" name="payment_type" checked="checked" id="debit">

      <div class="fordebit details">
        <table>
         <tr>
              <td> <label>Card no:</label></td>
              <td><input type="text" name="cardno" required=""><br> <span style="color: red;">*enter 16 digit card no</span></td>
         </tr>
         <tr>
                <td><label>Cvv no:</label></td>
                 <td><input type="text" name="cvvno" required=""><br><span style="color: red;">*enter 3 digit</span></td>
         </tr>
        <tr>
                 <td><label>Expiration MM/YYYY</label></td>
                 <td><select name="expiremonth" required="">
                  <?php
                   for ($i=01; $i<=12; $i++)
                    {
                  ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
                    }
                  ?>
                   </select>
                   <select name="expireyear" required="">
                  <?php
                   for ($i=2000; $i<=2050; $i++)
                    {
                  ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
                    }
                  ?>
                   </select><span style="color: red;">*</span></td>
        </tr>
       </table>
      </div>
    </div>
  </div>

  <div>
    <input type="submit" value="Pay">
  </div>

</form>









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
