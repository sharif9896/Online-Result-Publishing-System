

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="con1"><center><h3>Online Examination Results</h3></center></div><br>
    <marquee>
        <h2>The Government Examination of Tamil Nadu GoVT (2023-2024)</h2>
    </marquee>
    <div class="line"></div>
    <br>
    <div class="cor"><img src="ee.png" alt=""></div>
    <div class="cor1"><img src="kkl.png" alt=""></div>
    <span class="subhead"><center><h3>Change Password</h3></center></span>
    <center>
<form method="post" action="">
<table cellpadding="3" cellspacing="3" class="design" align="center">
<tr><td colspan="2" class="msg" align="center"><?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online";

$conn = new mysqli($servername, $username, $password, $dbname);
session_start();

if(isset($_POST['cp']))
{
$email=$_SESSION['email'];
$a=mysqli_query($conn,"SELECT * FROM facultyreg WHERE Email='$email'");
$b=mysqli_fetch_array($a);
$pass=$b['Password'];
$old=sha1($_POST['old']);
$p1=sha1($_POST['p1']);
$p2=sha1($_POST['p2']);
if($_POST['old']==NULL || $_POST['p1']==NULL || $_POST['p2']==NULL)
{
	//ASL Do Nothing
}
else
{
if($old!=$pass)
{
	echo "Incorrect Old Password";
}
elseif($p1!=$p2)
	{
		echo "New Password Didn't Matched";
	}
	else
	{
		mysqli_query($conn,"UPDATE facultyreg SET Password='$p2'");
		echo "Successfully Changed your Password";
	}

}
}
?></td></tr>
<tr><td class="labels">Old Password :</td><td><input type="password" name="old" size="25" class="fields" placeholder="Enter Old Password" required="required" /></td></tr>
<tr><td class="labels">New Password :</td><td><input type="password" name="p1" size="25" class="fields" placeholder="Enter New Password" required="required"  /></td></tr>
<tr><td class="labels">Re-Type Password :</td><td><input type="password" name="p2" size="25"  class="fields" placeholder="Re-Type New Password" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Change Password" name="cp" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<br />
<a href="home.php" class="cmd">HOME</a>
</div>
</body>
</html>