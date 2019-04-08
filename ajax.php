<?php
header('Content-Type: text/html; charset=utf-8');
include 'shqip.php';
if(isset($_FILES['file'])){
	 if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
		$path = 'upload/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $path);
		$dosya = fopen($path, 'r');
		$metin = fread($dosya, filesize($path));
		echo $metin;
		fclose($dosya);
		@unlink($path); 
    }
}
if(isset($_REQUEST['harfHsp'])){
	$metin = $_REQUEST['harfHsp'];
	harfSayisi($metin);
}
if(isset($_REQUEST['karHsp'])){
	$metin = $_REQUEST['karHsp'];
	DigerKarakterler($metin);
}
if(isset($_REQUEST['KullHsp'])){
	$metin = $_REQUEST['KullHsp'];
	KullanimSikligi($metin);
}
if(isset($_REQUEST['nrPSh'])){
	$metin = $_REQUEST['nrPSh'];
	numriPergjitshemSkronjave($metin);
}

?>