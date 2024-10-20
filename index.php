
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
    <span class="subhead"><center><h3>View Results</h3></center></span>
    <center>
    <form method="post" action="viewResult.php">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo "Enter Details For Result";?></td></tr>
<tr><td class="labels">Reg No.:</td><td><input type="text" required="required" name="roll" class="fields" size="25" placeholder="Enter Roll No." /></td></tr>
<tr><td class="labels">Date-Of-Birth.:</td><td><input type="text" required="required" name="dob" class="fields" size="25" placeholder="Enter Date-Of-Birth." /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="SHOW" class="fields fg" /></td></tr>
</table>
</form>
</center>
    <br>
    <br>
    <div class="buuut">
        <a href="register.php">
        <div class="stureg">Student Registration</div>
    </a>
        <a href="faculty.php">
        <div class="facu">Faculty Login</div>
    </a>
        <a href="registerfacult.php">
        <div class="faculreg">Faculty Registration</div>
    </a>
    </div>
    <script src="script.js"></script>
</body>
</html>