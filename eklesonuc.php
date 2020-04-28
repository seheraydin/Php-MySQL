<?php 

if($_POST)
{
	$isim = $_POST["kisi"];
	$ucret = $_POST["ucret"];
}



$host = "localhost";
$kullaniciAdi ="root";
$sifre ="";
$DB="android";

$baglanveSec = @mysqli_connect($host,$kullaniciAdi,$sifre,$DB);
if($_POST)
{
	$ekle = mysqli_query($baglanveSec, "insert into maaslar(kisi,ucret) values('$isim' , '$ucret')");
}

$sec = mysqli_query($baglanveSec, "select *from maaslar");

while ($al = mysqli_fetch_assoc($sec)) {
	$alIsim =$al["kisi"];
	$alUcret =$al["ucret"];
	$alid =$al["id"];

?>
<?=$alIsim?>
<?=$alUcret?>
<?=$alid?>
<a href="sil.php?id=<?=$alid?>" >sil</a>
<hr/>
<?php
}	

