<?php
	$connect=mysqli_connect("localhost","root","root","amc") or die("Connection Failed");
	if(!empty($_POST['save']))
	{
	$username=$_POST['un'];
	$password=$_POST['pw'];
	$query="select * from staff where username='$username' and password='$password'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	
	if($count>0)
	{
		echo '<script>alert("login successfull")</script>';
		

	}
	else{
		echo '<script>alert("Login Failed Enter the password correctly")</script>';
	}
	}
?>

<html>
	<head>
	<link rel="stylesheet" href="http://localhost/css.php">	
	<title>Login Form</title></head>
<center>	

<body>
	<header>
		<nav>
			<h3 id="nav1">menu</h3>
			<h3 id="nav1">Edit</h3>
			<h3 id="nav1">options</h3>
			<h3 id="nav1">options</h3>
			<h3 id="nav1">save</h3>
			</nav>
	</header>
	<section>
<img id="img" width=300 height=130 src="https://www.pngplay.com/wp-content/uploads/1/Login-PNG.png">

	<div class="sec1">
<form method="post">
	<h3 id="id1" >Enter username<input id="id2" type="text" name="un"/></h3>
	
	<h3 id="id1">Enter password<input id="id2" type="text" name="pw"/></h3>
	
	<input id="id3" type="submit" name="save" value="Click here to login"/><br><br>
	<input id="id3" type="submit" name="reg" value="Click here to register"/>
</div>
</section>
</form>
  
<?php
if (isset($_POST['reg']))
{   
?>
<script type="text/javascript">
window.location = "http://localhost/mcasignup.php/";
</script>      
<?php
}
?>
 
<script>
	function myFunction() {
		window.location = "http://localhost/mcasignup.php/";
	}
	</script>
 


</body>
</center>
</html>