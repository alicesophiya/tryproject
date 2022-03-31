<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "amc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(!empty($_POST['save']))
	{ 

    $username=$_POST['un'];
    $email=$_POST['em'];
    $password=$_POST['pw'];
    $sql = "INSERT INTO staff (username, email, password)
    VALUES ('$username','$email','$password');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
  
$conn->close();
?> 

<html>
<head>
<title>Registration Form</title>
</head>
<body id="body1">
<center>
    <br><br><br><br><br>
    <img id="img" width=300 height=130 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx2c0Vo6JA998wk8P5IJb0pH6RkvywuRg9rA&usqp=CAU">
    <link rel="stylesheet" href="http://localhost/css.html">
<form method="post" > 
<h3 id="id1">Firstname: <input type="text" name="un"></h3>
<h3 id="id1">Email    : <input type="email" name="em"></h3>
<h3 id="id1">password : <input type="password" name="pw"></h3>
<input id="id4" type="submit" name="save" value="login"/>
<input id="id4" type="submit" name="login" value="Go to Login"/>

<?php
if (isset($_POST['save']))
{   
?>
<script type="text/javascript">
    
window.location = "http://localhost/mcalogin.php/";

</script>      


<?php
}

if (isset($_POST['login']))
{   
?>
<script type="text/javascript">
    
window.location = "http://localhost/mcalogin.php/";

</script>      
<?php
}
?>

</form>

</center>
</body>