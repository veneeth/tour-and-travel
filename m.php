<?php
 $conn=mysql_connect("localhost","root","");
 $db=mysql_select_db("project",$conn);
if($conn)
{
	echo "connected";
}
else
{
	echo "not connected";
}

$name=$_POST['name'];
$days=$_POST['days'];
$nights=$_POST['nights'];
$stay=$_POST['stay'];
$food=$_POST['food'];
$travel=$_POST['travel'];
$doj=$_POST['doj'];
$total=$_POST['total'];
$sql="INSERT INTO placedetails(name,days,nights,stay,food,travel,doj,total) VALUES('$name','$days','$nights','$stay','$food','$travel','$doj','$total')";


if(mysql_query($sql))
			header('location:mumbaipayment.php');
?>


<!--noofdays,noofnights,stayamount,foodamount,airlinesamount,-->
<!--,'$noofdays','$noofnights','$stayamount','$foodamount','$airlinesamount'-->