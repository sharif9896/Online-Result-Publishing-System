
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
    <span class="subhead"><center><h3>Faculty Registration</h3></center></span>
    <center>
<form method="post" action="">
<table border="0" cellpadding="5" cellspacing="5" class="design jk">
<tr><td colspan="2" align="center" class="msg"><?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online";

$conn = new mysqli($servername, $username, $password, $dbname);

// if(isset($roll) || isset($sem) || isset($email) || isset($nam))
// {
//     $roll=$_POST['roll'];
//     $sem=$_POST['sem'];
//     $email=$_POST['email'];
//     $pass=$_POST['pass'];
//     $nam=$_POST['nam'];

    if (isset($_POST['Register'])) {
        $nam = $_POST['nam'];
        $password =$_POST['pass'];
        $email=$_POST['email'];
        $sem=$_POST['sem'];
        $roll=$_POST['roll'];
        $sql = "INSERT INTO `facultyreg`(`Name`, `Regno`, `Semester`, `Email`, `Password`) VALUES ('$nam','$roll','$sem','$email','$password')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Registered successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    // $msg="Regitered successful!";
    // $msg1="Email Already Exists!";
// }
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $name=$_POST['nam'];
// $roll=$_POST['roll'];
// $sems=$_POST['sem'];
// $email=$_POST['email'];

// $sql= "INSERT INTO stud (nam,roll,sems,email) VALUES ('$name','$roll','$sems','$email')";

// $result=mysqli_query($conn,$sql);

// if($result)
// {
//     $sms="Sucessfully Registered";
// }
// else
// {
//     $sms="Email is Already Exists";
// }
?></td></tr>
<tr><td class="labels">NAME :</td><td><input type="text" required="required" name="nam" class="fields" size="25" placeholder="Enter Name" /></td></tr>
<tr><td class="labels">REG NO :</td><td><input type="text" required="required" name="roll" class="fields" size="25" placeholder="Enter Register No"/></td></tr>
<tr><td class="labels">Semester :</td><td><select name="sem" class="fields" style="background-color:#fff;" required="required">
<option value="" disabled="disabled" selected="selected">- - Semester - -</option>
<option value="1">First Sem</option>
<option value="2">Second Sem</option>
<option value="3">Third Sem</option>
<option value="4">Fourth Sem</option>
<option value="5">Fifth Sem</option>
<option value="6">Sixth Sem</option>
<option value="7">Seventh Sem</option>
<option value="8">Eighth Sem</option>
</select>
</td></tr>
<tr><td class="labels">EMAIL ID :</td><td><input type="email" required="required" name="email" class="fields" size="25" placeholder="Enter Email Id" /></td></tr>
<tr><td class="labels">Password :</td><td><input type="Password" required="required" name="pass" class="fields" size="25" placeholder="Enter Password"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Register" name="Register" class="fields fg" /></td></tr>
</table>
</form>
</center>
    
    <div class="buuut">
        <a href="index.php">
        <div class="stureg">Main Page</div></a>
    </div>
    <script src="script.js"></script>
</body>
</html>