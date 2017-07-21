<?php



	 $conn=mysql_connect("localhost","root","");
 $db=mysql_select_db("project",$conn);
if($conn)
{
	header('location:admin1.php');
}
else
{
	echo "not connected";
}

$packageid=$_POST['packageid'];
$addplace=$_POST['addplace'];
$adults=$_POST['adults'];
$children=$_POST['children'];
$description=$_POST['description'];
$stayamount=$_POST['stayamount'];
$foodamount=$_POST['foodamount'];
$airlinesamount=$_POST['airlinesamount'];
$noofdays=$_POST['noofdays'];
$noofnights=$_POST['noofnights'];
$choose=$_POST['choose'];
$sql="INSERT INTO adddetails(packageid,addplace,adults,children,description,stayamount,foodamount,airlinesamount,noofdays,noofnights,choose) VALUES('$packageid','$addplace','$adults','$children','$description','$stayamount','$foodamount','$airlinesamount','$noofdays','$noofnights','$choose')";


if(mysql_query($sql))
{
			echo '<script language="javascript">';
  			echo 'alert("succesfully uploaded")';  //not showing an alert box.
  			echo '</script>';
}


?>

