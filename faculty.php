

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="con1"><center><h3>Online Examination Results</h3></center></div><br>
    <marquee>
        <h2>The Government Examination of Tamil Nadu GoVT (2023-2024)</h2>
    </marquee>
    <div class="line"></div>
   
    <div class="cor"><img src="ee.png" alt=""></div>
    <div class="cor1"><img src="kkl.png" alt=""></div>
    <span class="subhead"><center><h3>Faculty Login</h3></center></span>
    <center>
    <form method="post" action="">
<table border="0" cellpadding="5" cellspacing="5" class="design"><br><br>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['pass'];

    $sql=mysqli_query($conn,"SELECT * FROM facultyreg WHERE Email='$email' && Password='$password'");

    $total=mysqli_num_rows($sql);

    if ($total==1)
    {
        header("location:home.php");
    }
    else{
        echo "Invalid Email or Password";
    }
}

// if(isset($_SESSION['email']))
// {
// 	header("location:home.php");
// }
// $email=mysqli_real_escape_string($conn,isset($_POST['email']));
// $pass=mysqli_real_escape_string($conn,sha1(isset($_POST['pass'])));
// if(isset($_POST['email'])==NULL || isset($_POST['pass'])==NULL)
// {
// 	//
// }
// else
// {
// 	$sql=mysqli_query($conn,"SELECT * FROM `facultyreg` WHERE Email='$email' && Password='$pass'");
// 	if(mysqli_num_rows($sql)==1)
// 	{
// 		$_SESSION['email']=$email;
// 		header("location:home.php");
// 	}
// 	else
// 	{
// 		echo "Incorrect Email ID or Password";
// 	}
// }
    
?>
<tr><td class="labels">Email ID :</td><td><input type="text" required="required" name="email" class="fields" size="25" placeholder="Enter Email ID" /></td></tr>
<tr><td class="labels">password :</td><td><input type="password" required="required" name="pass" class="fields" size="25" placeholder="Enter Password" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login" name="login" class="fields fg" /></td></tr>
</table>
</form>
</center>
    <br>
    <br>
    <div class="buuut">
        <a href="index.php">
        <div class="stureg">Main Page</div></a>
        <!-- <a href="faculty.php">
        <div class="facu">Faculty Login</div></a>
        <a href="registerfacult.php">
        <div class="faculreg">Faculty Registration</div></a> -->
    </div>
    <script src="script.js"></script>
</body>
</html>