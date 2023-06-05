<?php
function kayit_mail($ad, $soyad, $mail, $parola)
{
	$baslik = "From: Yeni Uye<uye@banahediyeal.com>\n";
	$konu= "BanaHediyeAl.com Ho�geldiniz";
	$mesaj = "Say�n ".$ad." ".$soyad."\n\n". 
		"www.banahediyeal.com D�nyas�na ho� geldiniz.\n
TEBR�KLER!  Art�k siz de sevdiklerinizden istedi�iniz hediyeleri alabilecek, istedikleri hediyelerle onlar� mutlu edebileceksiniz�\n".
"Kullan�c� Ad�n�z: ".$mail."\n Parolan�z: ".$parola; 
	$adres = $mail;
	@mail($adres, $konu, $mesaj, $baslik);	
}

function tanitim_mail($mail)
{
	$baslik = "From: Tan�t�m <info@banahediyeal.com>\n";
	$konu= "BanaHediyeAl.com Tan�t�m";
	$mesaj = "Sevdiklerinize hediye ald���n�zda y�zlerindeki ifadenin \"hayal k�r�kl���\" olmas�n� istemiyorsan�z, onlar� mutlu etmek i�in en g�zel hediyeyi d���n�rken sa�lar�n�z� beyazlat�yorsan�z, sizi de http://www.banahediyeal.com adresine bekleriz."; 
	$adres = $mail;
	@mail($adres, $konu, $mesaj, $baslik);	
}

function davet_mail($isim, $mail_gonderen, $id, $giden_ad, $mail_giden)
{
	$baslik = "From: ".$isim." <".$mail_gonderen.">\n";
	$konu= "BanaHediyeAl.com Davet";
	$mesaj = $giden_ad." bir site buldum, sana al�nmas�n� istedigin hediyeleri yaz�yorsun bizde onu gidip al�yoruz. Ben �ye oldum sende olsana.\n  http://www.banahediyeal.com/index.php?id=".$id; 
	$adres = $mail_giden;
	@mail($adres, $konu, $mesaj, $baslik);	
}

function hatirlat_mail($mail, $parola)
{
	$baslik = "From: Iletisim<iletisim@banahediyeal.com>\n";
	$konu= "BanaHediyeAl.com Parola";
	$mesaj = "Selamlar, Kullan�c� ad�n�z ve parolan�z a�a��dad�r. Bu mail size otomatik olarak g�nderilmi�tir, \n L�tfen yan�tlamay�n�z.\n\n".
"Kullan�c� Ad�n�z: ".$mail."\n Parolan�z: ".$parola; 
	$adres = $mail;
	@mail($adres, $konu, $mesaj, $baslik);	
}

function iletisim_mail($isim, $mail, $mesaj)
{
	$baslik = "From: Iletisim<iletisim@banahediyeal.com>\n";
	$konu= "BanaHediyeAl.com Iletisim - Mesaj var";
	$mesaj = "Gonderen: ".$isim."\n".
			"Gonderen mail: ".$mail."\n\n".$mesaj;
	$adres="iletisim@banahediyeal.com";
	@mail($adres, $konu, $mesaj, $baslik);	
}

?>