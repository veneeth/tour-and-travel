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

$cardno=$_POST['cardno'];
$cvvno=$_POST['cvvno'];
$expiremonth=$_POST['expiremonth'];
$expireyear=$_POST['expireyear'];

$sql="INSERT INTO payment(cardno,cvvno,expiremonth,expireyear) VALUES('$cardno','$cvvno','$expiremonth','$expireyear')";


if(mysql_query($sql))
	header('location:paymentdone.php');
			
?>