
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
    <div class="cor"><img src="ee.png" alt=""></div>
    <div class="cor1"><img src="kkl.png" alt=""></div>
    <center>
    <br>
    <br>
    <span class="subheads">Welcome <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "online";

    $conn = new mysqli($servername, $username, $password, $dbname); 
    session_start();
        $a=mysqli_query($conn,"SELECT * FROM facultyreg");
        $b=mysqli_fetch_array($a);
        $name=$b['Name'];
        echo $name;

?>  </span>
    <div class="design" style="width: 300px;padding:20px 20px ">
    <a href="entrymarks.php" class="cmd">Entry Marks</a>
    <br>
    <br>
    <br>
    <a href="viewusers1.php" class="cmd">View Faculty</a>
    <br>
    <br>
    <br>
    <a href="viewusers.php" class="cmd">View Students</a>
    <br>
    <br>
    <br>
    <a href="addsubjects.php" class="cmd">Add Subjects</a>
    <br>
    <br>
    <br>
    <a href="changepassword.php" class="cmd">Change Password</a>
    <br>
    <br>
    <br>
    <a href="logout.php" class="cmd">Logout</a>
    </div>
    <br>
    <br>
</center>
    <br>
    <br>
    <script src="script.js"></script>
</body>
</html>