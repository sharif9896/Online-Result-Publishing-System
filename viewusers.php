<?php
$username = "root";
$servername="localhost";
$password = "";
$dbname = "online";

$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
// if(!isset($_SESSION['email']))
// {
// 	header("location:index.php");
// }
$a=mysqli_query($conn,"SELECT * FROM facultyreg");
$b=mysqli_fetch_array($a);
$sem=$b['Semester'];
?>
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
    <span class="subhead"><center><h3>View Student Users</h3></center></span>
    <center>
<table border="1" style="background: white;" cellpadding="3" cellspacing="3" class="design" align="center">
<tr class="labels" style="text-decoration:underline;color:#C60;"><th>Sr.No.</th><th>Roll No.</th><th>Name</th><th>Email</th><th>Delete</th></tr>
<?php 
$i=1;
$x=mysqli_query($conn,"SELECT * FROM stud");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:15px;color:black;">
<td><?php echo $i;$i++;?></td>
<td><?php echo $y['Regno'];?></td>
<td><?php echo $y['Name'];?></td>
<td><?php echo $y['Email'];?></td>
<td><a href="delete.php" onclick="return confirm('Are You Sure..?');" class="link" style="font-size:14px;"><div class="ho">Delete</div></a></td>
</tr>
<?php } ?>
</table>
<br>
<a href="home.php" class="cmd">HOME</a>
<br>
<br>
<br>
</div>
</body>
</html>