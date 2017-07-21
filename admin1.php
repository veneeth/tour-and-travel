  <?php
        session_start();
        if(!$_SESSION['username']){
           session_destroy();
           header("location:index.php");
           exit();
        }?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
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

    <center><p> <h3>Welcome <?php print($_SESSION['username']);?></h3> </p>
  
  <div class="uu">
  <div class="container2">

  <ul class="tabs">
    <li class="tab-link current" data-tab="tab-1">Package Details</li>
    <li class="tab-link" data-tab="tab-2">View package Details</li>
    <li class="tab-link" data-tab="tab-3">View Booking Details</li>
    <li class="tab-link" data-tab="tab-4">View User Details</li>
    <li class="tab-link current"> <a href="logout.php" style="color: #2a2a2a; font-family: Ubuntu, sans-serif;">Logout</a></li>
  </ul>
</div>
























  <div id="tab-1" class="tab-content current">
<script>
   function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(140);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>

    <div class="container">


   <form class="well form-horizontal" id="contact_form" action="adddetails.php" method="POST">
<fieldset>


<legend>Add Tour Packages</legend>

<div class="form-group">
  <label class="col-md-4 control-label">Package ID:</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="packageid" placeholder="packageid" class="form-control"  type="number" required>
  
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Add Place:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
  <input name="addplace" placeholder="Add Place" class="form-control"  type="text" required>
    </div>
  </div>
</div>


       <div class="form-group">
  <label class="col-md-4 control-label">No Of Adults:</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="adults" placeholder="No of Adults" class="form-control"  type="number">
    </div>
  </div>
</div>



       
<div class="form-group">
  <label class="col-md-4 control-label">No of children: </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="children" placeholder="No of children" class="form-control" type="number">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Description</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
 <!-- <input name="city" placeholder="city" class="form-control"  type="text">-->
  <textarea rows="2" cols="20" name="description" class="form-control" form="contact_form" required></textarea>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Stay Amount:</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="stayamount" placeholder="Amount" class="form-control" type="number" required>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Food Amount: </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-cutlery"></i></span>
  <input name="foodamount" placeholder="Amount" class="form-control" type="number">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Airlines Amount: </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-plane"></i></span>
  <input name="airlinesamount" placeholder="Amount" class="form-control" type="number">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">No of Days: </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-menu-hamburger"></i></span>
  
  <select name="noofdays" class="form-control selectpicker" required>
        <option value="">Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
    </select>
    </div>
  </div>
</div>
   
<div class="form-group">
  <label class="col-md-4 control-label">No of nights: </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-menu-hamburger"></i></span>
  
  <select name="noofnights" class="form-control selectpicker" required>
        <option value="">Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
    </select>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Add Image: </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
  <!--<input  name="choose"  class="form-control" type="file" >-->
  <input type='file' onchange="readURL(this);"  name="choose"  class="form-control" />
    <img id="blah" src="#" alt="your image" />
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" name="submit">upload <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>
  </div> 



















  <div id="tab-2" class="tab-content">
     
<?php


$con=  mysqli_connect("localhost", "root", "", "project");

        if(!$con)
       {
           die('not connected');
       }
            $result=  mysqli_query($con, "SELECT addplace, stayamount, foodamount, airlinesamount, noofdays,noofnights, 
    SUM(stayamount + foodamount + airlinesamount) AS totalamount,choose
FROM adddetails GROUP BY packageid");



?>
<div class="container">
<CENTER><h2>view packages</h2> 
<table class="table table-bordered">

  <th>place</th>
  <th>stay cost</th>
  <th>food cost</th>
  <th>flight cost</th>
  <th>no of days</th>
  <th>no of nights</th>
  <th>total amount</th>
  


        <?php

             while($row =mysqli_fetch_array($result))

             {
                 ?>
            <tr>
                <td><?php echo $row['addplace']; ?></td>
                <td><?php echo $row['stayamount']; ?></td>
                <td><?php echo $row['foodamount'] ;?></td>
                <td><?php echo $row['airlinesamount'] ;?></td>
                <td><?php echo $row['noofdays'] ;?></td>
                <td><?php echo $row['noofnights'] ;?></td>
                <td><?php echo $row['totalamount'] ;?></td>
                  
                
            </tr>
        <?php
             }
             ?>
             </table>
            </div>
  </div>
















  <div id="tab-3" class="tab-content">
  
<?php
        $con=  mysqli_connect("localhost", "root", "", "project");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select name,stay,food,travel,doj,total from placedetails");

       ?>
        <div class="container">
<CENTER><h2>Booking Details</h2>
</CENTER>  
<table class="table table-bordered" style="border-radius: ">

  <th>Place</th>
  <th>Travelling date</th>
  <th>Total Cost</th>
  <th>Stay cost</th>
  <th>Food Cost</th>
  <th>Travel Cost</th>
  


         <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['doj']; ?></td>
                <td><?php echo $row['total']; ?>  </td>
                <td><?php echo $row['stay']; ?></td>
                <td><?php echo $row['food']; ?></td>
                <td><?php echo $row['travel']; ?>  </td>
            </tr>

        <?php
             }
             ?>
             </table>
             </div>

  </div>










  <div id="tab-4" class="tab-content">
    
      <?php
        $con=  mysqli_connect("localhost", "root", "", "project");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select username,phoneno,emailid from registration");

       ?>
        <div class="container">
<CENTER><h2>User Details</h2>
</CENTER>  
<table class="table table-bordered" style="border-radius: ">

  <th>Username</th>
  <th>Phone No.</th>
  <th>Email_ID</th>
  


         <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['phoneno']; ?></td>
                <td><a href="adddetails.php"><?php echo $row['emailid']; ?></a>  </td>
            </tr>

        <?php
             }
             ?>
             </table>
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
