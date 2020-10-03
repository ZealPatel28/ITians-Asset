<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "id5944263_root";
$password = "root123";
$dbname = "id5944263_itian";

// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
if (isset($_GET['logout'])){
	session_unset();
	session_destroy(); 
	header("Location:index.php");
	exit();
}
if (isset($_POST['login'])){
	$sql = "SELECT * FROM user where usr_email='$_POST[email]'	 and usr_pass='$_POST[password]'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$_SESSION['login'] =  true;
			$_SESSION['usr_id'] =  $row["iduser"];
			$_SESSION['usr_name'] =  $row["usr_name"];
			$_SESSION['usr_email'] =  $row["usr_email"];
			$_SESSION['usr_type'] =  $row["usr_type"];
			$_SESSION['usr_mobile'] =  $row["usr_mobile"];
		}
		header("Location:dashboard.php?");
		exit();
	} else {
		header("Location:index.php?error=true");
		exit();
	}
}else if (isset($_POST['signup'])){
	
	
	if(!isset($_POST['usr_er_no'])){
		$_POST['usr_er_no'] = 0;
	}
	if(!isset($_POST['usr_sem'])){
		$_POST['usr_sem'] = 0;
	}
	if(!isset($_POST['usr_branch'])){
		$_POST['usr_branch'] = "";
	}
	if(!isset($_POST['usr_subject'])){
		$_POST['usr_subject'] = "";
	}
	if(!isset($_POST['usr_doubt'])){
		$_POST['usr_doubt'] = "";
	}
	$sql = "INSERT INTO user (usr_name,usr_email, usr_mobile, usr_pass, usr_type, usr_er_no, usr_sem, usr_branch, usr_subject, usr_doubt)
				VALUES ('$_POST[usr_name]','$_POST[usr_email]','$_POST[usr_mobile]','$_POST[usr_pass]','$_POST[usr_type]','$_POST[usr_er_no]','$_POST[usr_sem]','$_POST[usr_branch]','$_POST[usr_subject]','$_POST[usr_doubt]')";

	if ($conn->query($sql) === TRUE) {
		header("Location:signup.php?type=".$_POST['usr_type']); /* Redirect browser */
		exit();
	} else {
		header("Location:signup.php?type=".$_POST['usr_type']); /* Redirect browser */
		exit();
	}
}	

mysqli_close($conn);
?>
