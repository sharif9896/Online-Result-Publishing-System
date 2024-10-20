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
    <span class="subhead"><center><h3>Add Subjects</h3></center></span>
    <center>
<form method="post" action="">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online";

$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
if(isset($_POST['ADD']))
{
$email=isset($_SESSION['email']);
$a=mysqli_query($conn,"SELECT * FROM facultyreg");
$b=mysqli_fetch_array($a);
$name=$b['Name'];
$sem=$b['Semester']; 
$roll=$_POST['roll'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];
if($s1==NULL || $s2==NULL || $s3==NULL || $s4==NULL || $s5==NULL)
{
	// 
}
else
{	
	$sql=mysqli_query($conn,"INSERT INTO subjects(sub1,sub2,sub3,sub4,sub5,Semester,Regno) VALUES('$s1','$s2','$s3','$s4','$s5','$sem','$roll')");
	if($sql)
	{
		echo "Successfully Saved";
	}
	else
	{
		echo "Already Saved for Your Sem";
	}
}

}
	
?></td></tr>
<tr><td class="labels">Subject 1 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s1" /></td></tr>

<tr><td class="labels">Subject 2 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s2" /></td></tr>

<tr><td class="labels">Subject 3 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s3" /></td></tr>

<tr><td class="labels">Subject 4 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s4" /></td></tr>

<tr><td class="labels">Subject 5 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s5" /></td></tr>

<?php
    $m=mysqli_query($conn,"SELECT * FROM stud");
    ?>
    <tr><td class="labels">Roll No. : </td><td>
    <select name="roll" class="fields nn"  required="required">
    <option value="" selected="selected" disabled="disabled">- - Select Roll - -</option>
    <?php
    $i=1;
    while($n=mysqli_fetch_array($m))
    {
        ?>
        <?php $i;$i++;?>
    <option value="<?php echo $n['Regno'];?>" style="color: black;"><?php echo $n['Regno']; ?></option>
    <?php } ?>
<tr><td colspan="2" align="center"><input type="submit" class="fields" name="ADD" value="SAVE" /></td></tr>
</table>
</form>
<br />
<br />
<br />
<a href="home.php" class="cmd">HOME</a>
</div>
</body>
</html>