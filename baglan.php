<?php 

$host = "localhost"; //sunucu adresi
$kullaniciAdi ="root";
$sifre = "";
$veritabani = "android"; //MySQL'de oluşturduğumuz veri tabanı



$baglan = @mysqli_connect($host,$kullaniciAdi,$sifre); 
if($baglan)
{
	echo "başarılı";
}
else
{
	echo "başarısız";
}

$sec = @mysqli_select_db($baglan, $veritabani);
if ($sec) {
	echo "başarılı DB seçimi";
}
else{
	echo "başarısız DB seçimi";
}

?>