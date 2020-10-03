<?php
// Start the session
session_start();
if(!isset($_SESSION['login'])){
    header("Location:index.php?");
}
?>
<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
<title>Dashboard | ITians' Asset</title>
	<?php include 'header_files.php';?>
    <style>
		
	</style>
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	    <?php include 'header.php';?>
		<main class="mdl-layout__content">
			<br/><br/><br/><br/>
			<div class="row" align="center">
                <h1>Welcome, <?php echo $_SESSION['usr_name']; ?>!</h1>
			</div>
		</main>
	</div>
</body>
</html>