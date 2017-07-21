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

$fname=$_POST['frstname'];
$lname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['pass'];
$dob=$_POST['dob'];
$emailid=$_POST['emailid'];
$phoneno=$_POST['phoneno'];
$sql="INSERT INTO registration(frstname,lastname,username,pass,dob,emailid,phoneno) VALUES('$fname','$lname','$username','$password','$dob','$emailid','$phoneno')";


if(mysql_query($sql))
			header('location:yes.php');
?>