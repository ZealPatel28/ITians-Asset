<?php
// Start the session
session_start();
if(isset($_SESSION['login'])){
	header("Location:dashboard.php?");
}
?>
<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
<title>Login | ITians' Asset</title>
	<?php include 'header_files.php';?>
	<style>
		
	</style>
</head>
<body>
	
	
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		
		<?php include 'header.php';?>
		<main class="mdl-layout__content">
			
			<br/>
			<br/>
			<div class="row" align="center">
			<!--<img src="assets/images/acb-logo.png" class="img-responsive" alt="Cinque Terre">-->
			</div>
			<br/>
			<br/>
			<form action="demo.php" method="post">
			  <div class="row">
				<div class="col-xs-1"></div>
				<div class="col-xs-10" align="center">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" id="email" name="email">
						<label class="mdl-textfield__label" for="email">Email</label>
					</div>
				</div>
				<div class="col-xs-1"></div>
				  
			  </div>
			  <div class="row" align="center">
					<div class="col-xs-1"></div>
					<div class="col-xs-10" align="center">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="password" id="password" name="password">
						<label class="mdl-textfield__label" for="password">Password</label>
					  </div>
					</div>
					<div class="col-xs-1"></div>
			  </div>
			  
			  <div class="row" align="center">
			  <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="login" value="Login">
				</div>
			</form>
			<br/>
			<br/>
			<div class="row" align="center">
				<a href="signup.php?type=student">
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">
				  New User?
				</button>
				</a>
			</div>
		</main>
	</div>
	
	
</body>
</html>