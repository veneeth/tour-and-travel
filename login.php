<!DOCTYPE html>
<html>
<head>
	<title>login_page</title>
	<meta charset="utf-8">
 
	
	<style>
	body
	{
		width: 100%;
		height: 100%;

    background-image: url("background.jpg");
	background-size: cover;
	background-repeat: no-repeat;
    background-attachment: fixed;


	}
	header
	{
		
	    border: 1px ;
	    margin-top: 0px;
		font-color: black;

         height: 50px;
         top: 10px;

		background: rgba(0,0,0,0.5);
		width: 100%;
		text-c
	}
	
	
div.container
{
	
	
	width: 300px;
	height: 290px;
	background-color: rgba(0,0,0,0.5);
	margin: 0 auto;
	margin-top: 80px;
	padding-top: 10px;
	padding-left: 50px;
	border-radius: 15px;
	border-top-style: 
	color: white;
	font-weight: bolder;
	box-shadow: 4px 4px rgba(1,1,1,0.5);
	


}
div.container input[type="text"]
{
	width: 210px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;


}
div.container input[type="password"]
{
	width: 210px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;

}
div.container input[type="submit"]
{
	width: 100px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	font-weight: bolder;
	font-size: "50";



}
</style>
<!--<script>
function myFunction() {
    alert("[!] login succesfully. ");
}
</script>-->


</head>
<body>
<?php

$message = "";
?>

			<div class="background_wallpaper">
				
			<div class="header-content">
				<header>
				<h1 style="text-align:center">POTHERI TOURS AND TRAVELS</h1><br><br>
			</header>
			</div>
			<div class="container">

				<P>(LOGIN PAGE)</P>
				<div class="hello">
			<FORM name="Login" method="POST" action="valid.php">
				
				 <p>
   					 <label for="email">USER NAME</label><br>
					<input type="text" placeholder="your username....." name="username"  required><br>
				</p>	
				 <p>
    				<label for="password">PASSWORD</label><br>
					<input type="PASSWORD" placeholder="your password....." name="pass" required><br>
				</p>
				 <p>
    				<input type="checkbox" name="remember" id="remember">
    				<label for="remember">Remember me for 1 Day</label><br>
  				</p>
				<p>
    				<span id="message"><?php echo $message;	?></span>
    				<input type="submit" name="go" id="go" onclick="myFunction()" value="Log in">
    				
  				</p>
				

				
			</FORM>
				</div>
				<p>New User?&nbsp;&nbsp;<a href="registration.php" target="_blank" title="sign up" >sign up</a> </p>

			</div>
			</div>
				
</body>
</html>

