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
    <div class="cor1"><img src="kkl.png" alt=""></div>
    <span class="subhead"><center><h3>Entry Marks</h3></center></span>
    <center>
<form method="post" action="">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online";

$conn = new mysqli($servername, $username, $password, $dbname);



if(isset($_POST['ADD']))
{
session_start();
$email=isset($_SESSION['email']);
$a=mysqli_query($conn,"SELECT * FROM stud");
$b=mysqli_fetch_array($a);
$name=$b['Name'];
$sem=$b['Semester'];

    $roll=$_POST['roll'];
    $s1=$_POST['s1'];
    $s2=$_POST['s2'];
    $s3=$_POST['s3'];
    $s4=$_POST['s4'];
    $s5=$_POST['s5'];
    $in=$_POST['IN'];
    $tot=$_POST['tt'];
    $grd=$_POST['gg'];
    $gs=$_POST['gs'];
    $gr=$_POST['gr'];
    $gm=$_POST['gm'];
    $gi=$_POST['gi'];
    $res1=$_POST['res1'];
    $res2=$_POST['res2'];
    $res3=$_POST['res3'];
    $res4=$_POST['res4'];
    $res5=$_POST['res5'];



    if($roll==NULL || $sem==NULL || $s1==NULL || $s2==NULL || $s3==NULL  || $s5==NULL || $in==NULL || $tot==NULL || $sem==NULL || $grd==NULL || $gs==NULL || $gr==NULL || $gm==NULL || $gi==NULL || $res1==NULL || $res2==NULL || $res3==NULL || $res4==NULL || $res5==NULL)
    {
        //
    }
    else
    {
        $sql=mysqli_query($conn,"INSERT INTO entrymarks(`sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `Internal`, `Total`,`Semester`,`Regno`,`Grade 1stM`,`Grade 2ndM`,`Grade 3rdM`,`Grade 4thM`,`Grade 5thM`,`Result1`,`Result2`,`Result3`,`Result4`,`Result5`) VALUES ('$s1','$s2','$s3','$s4','$s5','$in','$tot','$sem','$roll','$grd','$gs','$gr','$gm','$gi','$res1','$res2','$res3','$res4','$res5')");
        if($sql)
        {
            echo "Successfully Saved!";
        }
        else
        {
            echo "Email Already Exists!";
        }
}
}
    ?></td></tr>
    <?php
    
    $x=mysqli_query($conn,"SELECT * FROM subjects ");
    $y=mysqli_fetch_array($x);
    $m=mysqli_query($conn,"SELECT * FROM stud");
    ?>
    <tr><td class="labels">Roll No. : </td><td>
    <select name="roll" class="fields km"  required="required">
    <option value="" selected="selected" disabled="disabled">- - Select Roll - -</option>
    <?php
    $i=1;
    while($n=mysqli_fetch_array($m))
    {
        ?>
        <?php $i;$i++;?>
    <option value="<?php echo $n['Regno'];?>" style="color: black;"><?php echo $n['Regno']; ?></option>
    <?php } ?>
    </select></td></tr>
    <tr><td class="labels"><?php echo $y['sub1']?></td><td><input type="text" name="s1" class="fields" size="25" placeholder="Enter Marks" required="required" /></td></tr>
    <tr><td class="labels"><?php echo $y['sub2']?></td><td><input type="text" name="s2" class="fields" size="25" placeholder="Enter Marks" required="required" /></td></tr>
    <tr><td class="labels"><?php echo $y['sub3']?></td><td><input type="text" name="s3" class="fields" size="25" placeholder="Enter Marks" required="required" /></td></tr>
    <tr><td class="labels"><?php echo $y['sub4']?></td><td><input type="text" name="s4" class="fields" size="25" placeholder="Enter Marks" required="required" /></td></tr>
    <tr><td class="labels"><?php echo $y['sub5']?></td><td><input type="text" name="s5" class="fields" size="25" placeholder="Enter Marks" required="required" /></td></tr>
    <tr><td class="labels">Internal Marks:</td><td><input type="text" name="IN" class="fields" size="25" placeholder="Enter Marks" required="required" /></td></tr>
    <tr><td class="labels">Total :</td><td><input type="text" name="tt" class="fields" size="25" placeholder="Enter Total Mark" required="required" /></td></tr>
    <tr><td class="labels">Grade 1stM:</td><td><input type="text" name="gg" class="fields" size="25" placeholder="Enter Grade" required="required" /></td></tr>
    <tr><td class="labels">Grade 2ndM:</td><td><input type="text" name="gs" class="fields" size="25" placeholder="Enter Grade" required="required" /></td></tr>
    <tr><td class="labels">Grade 3rdM:</td><td><input type="text" name="gr" class="fields" size="25" placeholder="Enter Grade" required="required" /></td></tr>
    <tr><td class="labels">Grade 4thM:</td><td><input type="text" name="gm" class="fields" size="25" placeholder="Enter Grade" required="required" /></td></tr>
    <tr><td class="labels">Grade 5thM:</td><td><input type="text" name="gi" class="fields" size="25" placeholder="Enter Grade" required="required" /></td></tr>
    <tr><td class="labels">Result 1stM:</td><td><input type="text" name="res1" class="fields" size="25" placeholder="Enter Result" required="required" /></td></tr>
    <tr><td class="labels">Result 2ndM:</td><td><input type="text" name="res2" class="fields" size="25" placeholder="Enter Result" required="required" /></td></tr>
    <tr><td class="labels">Result 3rdM:</td><td><input type="text" name="res3" class="fields" size="25" placeholder="Enter Result" required="required" /></td></tr>
    <tr><td class="labels">Result 4thM:</td><td><input type="text" name="res4" class="fields" size="25" placeholder="Enter Result" required="required" /></td></tr>
    <tr><td class="labels">Result 5thM:</td><td><input type="text" name="res5" class="fields" size="25" placeholder="Enter Result" required="required" /></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" class="fields" name="ADD" value="Submit" /></td></tr>
    </table>
    </form>
    <br />   
<a href="home.php" class="cmd">HOME</a>
<br />
<br /> 
</div>
</body>
</html>