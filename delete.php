<?php

$username = "root";
$password = "";
$dbname = "online";

$conn = new mysqli($servername, $username, $password, $dbname);
$d=$_GET['del'];
$sql=mysqli_query($conn,"DELETE FROM stud WHERE Email='$d'");
if($sql)
{
	?>
	<script type="text/javascript" language="javascript">
	alert('Successfully Deleted');
	window.location="viewUsers.php";
	</script>
<?php

}
?>
