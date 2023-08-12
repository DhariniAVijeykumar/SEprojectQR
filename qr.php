<?php 
include"process.php"; 
include"phpqrcode/qrlib.php"; 
$folderTemp ='gbrqrcode/';
$a = $_POST['name'];
$b = $_POST['date'];
$c = $_POST['time'];
$d = $_POST['amount'];
$e = $a;
$f = $a."png";
$qual = 'H';
$ukuran = 6;
$padding = 0;
QRCode :: png($e);
$sql = $link->query("INSERT INTO tbqrcode VALUES('$a','$b','$c','$d','$f')");
if($sql){
    echo"Success";
}else{
    echo"Error";
    die($link->error);
}
?>
