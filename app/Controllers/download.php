<?php
if(!empty($_GET['file'])){
	$fileName = basename($_GET['file']);
	$filePath = "files/".$fileName;
	if(!empty($fileName)&&file_exists($filePath)){
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Content_Type: application/zip");
		header("Content_Transfer-Encoding:binary");

		readFile($filePath);
		exit;
	}
	else{
		echo "File does not exist";
	}
}
?>
