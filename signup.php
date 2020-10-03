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
<title>SignUp | ITians' Asset</title>
<?php include 'header_files.php';?>
	<style>
		
	</style>
	
	<script>
			document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('select');
			var instances = M.FormSelect.init(elems, options);
		  });

		  // Or with jQuery

		  $(document).ready(function(){
			$('select').formSelect();
		  });
	</script>
</head>
<body>
	
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		
		<?php include 'header.php';?>
		
		<main class="mdl-layout__content">
			<br/>
			<br/>
			<?php if(isset($_GET['type'])) { ?>
			<div class="row" align="center">
			
			<!--<img src="assets/images/acb-logo.png" class="img-responsive" alt="Cinque Terre">-->
				<a href="signup.php?type=hod"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" <?php if($_GET['type']=="hod"){ echo "disabled"; } ?> >HOD</button></a>
				<a href="signup.php?type=student"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" <?php if($_GET['type']=="student"){ echo "disabled"; } ?> >Student</button></a>
				<a href="signup.php?type=teacher"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" <?php if($_GET['type']=="teacher"){ echo "disabled"; } ?> >Teacher</button></a>
				<a href="signup.php?type=parent" ><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" <?php if($_GET['type']=="parent"){ echo "disabled"; } ?> >Parent</button></a>
			</div>
			<br/>
			
			<form action="demo.php" method="post">
			
				<div class="row">
					<div class="col-xs-1"></div>
					<div class="col-xs-10" align="center">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="usr_name" name="usr_name" required>
							<label class="mdl-textfield__label" for="usr_name">Name</label>
						</div>
					</div>
					<div class="col-xs-1"></div>
				</div>
			  <div class="row">
				<div class="col-xs-1"></div>
				<div class="col-xs-10" align="center">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" id="usr_email" name="usr_email" required>
						<label class="mdl-textfield__label" for="usr_email">Email</label>
					</div>
				</div>
				<div class="col-xs-1"></div>
			  </div>
			  <div class="row" align="center">
					<div class="col-xs-1"></div>
					<div class="col-xs-10" align="center">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="password" id="usr_pass" name="usr_pass" required>
						<label class="mdl-textfield__label" for="usr_pass">Password</label>
					  </div>
					</div>
					<div class="col-xs-1"></div>
			  </div>
			  
				<div class="row" align="center">
					<div class="col-xs-1"></div>
					<div class="col-xs-10" align="center">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" id="usr_mobile" name="usr_mobile" required>
						<label class="mdl-textfield__label" for="usr_mobile">Mobile No.</label>
					  </div>
					</div>
					<div class="col-xs-1"></div>
				</div>
				
				<?php if($_GET['type']=="student" || $_GET['type']=="parent"){ ?>
				<div class="row" align="center">
					<div class="col-xs-1"></div>
					<div class="col-xs-10" align="center">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" id="usr_er_no" name="usr_er_no" required>
						<label class="mdl-textfield__label" for="usr_er_no"><?php if($_GET['type']=="parent"){ echo "Child's"; } ?>Enrollment Number</label>
					  </div>
					</div>
					<div class="col-xs-1"></div>
				</div>
				<?php } ?>
				
				<?php if($_GET['type']=="student"){ ?>
				<div class="row" align="center">
					
					
					 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
						<input type="text" value="" class="mdl-textfield__input" id="usr_sem" readonly>
						<input type="hidden" value="" name="usr_sem">
						
						<label for="usr_sem" class="mdl-textfield__label">Semester</label>
						<ul for="usr_sem" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
							<li class="mdl-menu__item" data-val="1">1</li>
							<li class="mdl-menu__item" data-val="2">2</li>
							<li class="mdl-menu__item" data-val="3">3</li>
							<li class="mdl-menu__item" data-val="4">4</li>
							<li class="mdl-menu__item" data-val="5">5</li>
							<li class="mdl-menu__item" data-val="6">6</li>
							<li class="mdl-menu__item" data-val="7">7</li>
							<li class="mdl-menu__item" data-val="8">8</li>
						</ul>
					</div>
					
			
					
				<?php } ?>
				
				<?php if($_GET['type']=="student"){ ?>
				<div class="row" align="center">
				
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
						<input type="text" value="" class="mdl-textfield__input" id="usr_branch" readonly>
						<input type="hidden" value="" name="usr_branch">
						<label for="usr_branch" class="mdl-textfield__label">Branch</label>
						<ul for="usr_branch" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
							<li class="mdl-menu__item" data-val="Information Technology">Information Technology</li>
						</ul>
					</div>
					
					
				</div>
				
				
				<?php } ?>
				
				<?php if($_GET['type']=="teacher"){ ?>
				<div class="row" align="center">
					
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
						<input type="text" value="" class="mdl-textfield__input" id="usr_subject" readonly>
						<input type="hidden" value="" name="usr_subject">
						
						<label for="usr_subject" class="mdl-textfield__label">Subject</label>
						<ul for="usr_subject" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
							<li class="mdl-menu__item" data-val=".Net">.Net</li>
							<li class="mdl-menu__item" data-val="Advanced Java">Advanced Java</li>
							<li class="mdl-menu__item" data-val="Web Technology">Web Technology</li>
							<li class="mdl-menu__item" data-val="Data Compression Data Retrieval">Data Compression Data Retrieval</li>
							<li class="mdl-menu__item" data-val="Software Engineering">Software Engineering</li>
						</ul>
					</div>
					
				</div>
				<?php } ?>
				
				<?php if($_GET['type']=="teacher"){ ?>
				<div class="row" align="center">
					<div class="col-xs-1"></div>
					<div class="col-xs-10" align="center">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" id="usr_doubt" name="usr_doubt" required>
						<label class="mdl-textfield__label" for="usr_doubt">Doubt Solving Slot</label>
					  </div>
					</div>
					<div class="col-xs-1"></div>
				</div>
				<?php } ?>
				
				<input class="mdl-textfield__input" type="hidden" id="usr_type" name="usr_type" value="<?php echo $_GET['type']; ?>" required>
				
				<div class="row" align="center">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="signup" value="Signup">
				</div>
			</form>
			<?php }else{ ?>
			
			<h3 style="text-align:center;color:red;">404! Not Found!</h3>
			
			<?php } ?>
			<br/>
			<br/>
			<div class="row" align="center" style="margin-bottom:20px;">
				<a href="index.php">
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">
				Already a User?
				</button>
				</a>
			</div>

		</main>
	</div>
	
	
</body>
</html>