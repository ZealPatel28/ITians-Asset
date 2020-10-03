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
<title>Timetable | ITians' Asset</title>
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
                
                <?php if(isset($_GET['type'])){ ?>

                    <?php if(isset($_SESSION['login']) && isset($_SESSION['usr_type'])){ ?>
                        <?php if(
                            ($_SESSION['usr_type']=="hod") || 
                            ($_SESSION['usr_type']=="teacher" && $_GET['type']=="study_material")
                        ){ ?>

                            <div class="col-md-6">
                                <form action="upload.php" method="post" enctype="multipart/form-data">    
                                    <h4>Upload <?php echo ucwords(str_replace("_"," ",$_GET['type'])); ?>!</h4>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <div class="row" align="center">
                                            <div class="col-xs-1"></div>
                                            <div class="col-xs-10" align="center">
                                            
                                                <input type="file" id="fileToUpload" name="fileToUpload" required>
                                            </div>
                                            <div class="col-xs-1"></div>
                                        </div>
                                        <br/><br/><br/>
                                        <div class="row" align="center">
                                            <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="upload_<?php echo $_GET['type']; ?>" value="Upload"/>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        <?php }else{ ?>
                            <div class="col-md-3"></div>
                        <?php } ?>
                    <?php }else{ ?>
                        <div class="col-md-3"></div>
                    <?php } ?>

                    <?php if(isset($_SESSION['login'])){ ?>
                        <div class="col-md-6">
                            <div class="row" align="center">
                                <div class="col-xs-1"></div>
                                <div class="col-xs-10" align="center">
                                    <h3>Click on the button below to download latest <?php echo ucwords(str_replace("_"," ",$_GET['type'])); ?>!</h3>
                                    <?php
                                        $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$_GET['type'];
                                        $file_dir = '/uploads/'.$_GET['type'];
                                        //$files = scandir($dir);
                                        //print_r ($files[0]);
                                        $filename = false;
                                        if (is_dir($dir)){
                                            if ($dh = opendir($dir)){
                                              while (($file = readdir($dh)) !== false){
                                                $filename = $file;
                                              }
                                              closedir($dh);
                                            }
                                          }
                                    ?>
                                    <?php if($filename!=false && $filename!='.' && $filename!='..'){ ?>
                                        <a href="<?php if($filename!=false && $filename!='.' && $filename!='..'){echo $file_dir.'/'.$filename;}else{echo 'javascript:void(0)';} ?>"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >Download</button>
                                    <?php }else{ ?>
                                        <h6 style="text-align:center;color:red;">No File has been uploaded!</h6>
                                    <?php } ?>
                                </div>
                                <div class="col-xs-1"></div>
                            </div>
                        </div>
                    <?php } ?>

                <?php }else{ ?>
                    <h3 style="text-align:center;color:red;">404! Not Found!</h3>
                <?php } ?>

			</div>
		</main>
	</div>
</body>
</html>