<?php
$target_dir = $_SERVER['DOCUMENT_ROOT']."/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$goBackUrl = 'dashboard.php';
if(isset($_POST["upload_timetable"])) {
    $target_dir = $_SERVER['DOCUMENT_ROOT']."/uploads/timetable/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $goBackUrl = 'upload_data.php?type=timetable';
}else if(isset($_POST["upload_study_material"])) {
    $target_dir = $_SERVER['DOCUMENT_ROOT']."/uploads/study_material/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $goBackUrl = 'upload_data.php?type=study_material';
}else if(isset($_POST["upload_attendance"])) {
    $target_dir = $_SERVER['DOCUMENT_ROOT']."/uploads/attendance/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $goBackUrl = 'upload_data.php?type=attendance';
}else if(isset($_POST["upload_exam"])) {
    $target_dir = $_SERVER['DOCUMENT_ROOT']."/uploads/exam/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $goBackUrl = 'upload_data.php?type=exam';
}else if(isset($_POST["upload_result"])) {
    $target_dir = $_SERVER['DOCUMENT_ROOT']."/uploads/result/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $goBackUrl = 'upload_data.php?type=result';
}

//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 1;
// }
// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {
    header("Location:".$goBackUrl);

} else {

    $files = glob($target_dir . '/*');
    foreach($files as $file){
        if(is_file($file)){
            unlink($file);
        }
    }

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header("Location:".$goBackUrl);
        
    } else {
        header("Location:".$goBackUrl);
    }
}
exit();

?>
