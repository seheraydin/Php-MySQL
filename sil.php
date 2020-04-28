<?php 

$gelenid = $_GET['id'];


$host = "localhost";
$kullaniciAdi ="root";
$sifre="";
$DB="android";
$baglan =mysqli_connect($host,$kullaniciAdi,$sifre,$DB);

$sil=mysqli_query($baglan, "delete from maaslar where id='$gelenid'");
if ($sil) 
	@header("location:eklesonuc.php");
else
	echo "başarısız";

 ?>