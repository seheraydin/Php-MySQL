<?php 
//1: post-metodu-kullanimi.php dosyasında bulunan

$gelenIsim=$_POST["txtIsim"];
$gelenTel=$_POST["txtTel"];
$gelenSehir=$_POST["chcSehir"];
echo "İsminiz: ".$gelenIsim."<br>";
echo "Telefonunuz: ".$gelenTel."<br>";
echo "Ysşadığınız Şehir: ".$gelenSehir."<br>";
?>