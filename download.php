<?php

$dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$_GET['type'];
$file_dir = '/uploads/'.$_GET['type'];
$filename = '';
$goBackUrl = 'upload_data.php?type='.$_GET['type'];

if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
        $filename = $file;
        }
        closedir($dh);
    }
}
if ($filename!=''){
    $filepath = $file_dir.'/'.$file;
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush();
        readfile($filepath);
        header("Location:".$goBackUrl);
        exit();
    }
    header("Location:".$goBackUrl);
}
header("Location:".$goBackUrl);
?>
