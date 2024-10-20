<?php

$sever = "localhost";
$username ="root";
$password = "";
$dbname = "onlineresults";

$con = mysqli_connect($sever, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

// include("config.php");
$nam=$_POST["nam"];
$roll=$_POST["roll"];
$sem=$_POST["sem"];
$email=$_POST["regno"];

if($nam==NULL || $roll==NULL || $sem==NULL || $email==NULL)
{
    // 
}
else
{
    $sql= "INSERT INTO `studentreg`(name,`nam`,`roll`,`sem`,`email`) VALUES ('$nam','$roll','$sem','$email')";
    
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $msg="Registered Successfully";
    }
    else
    {
        $msg="Email Already Exists";
    }
}
?>