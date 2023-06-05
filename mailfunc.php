<?php
function kayit_mail($ad, $soyad, $mail, $parola)
{
	$baslik = "From: Yeni Uye<uye@banahediyeal.com>\n";
	$konu= "BanaHediyeAl.com Hoþgeldiniz";
	$mesaj = "Sayýn ".$ad." ".$soyad."\n\n". 
		"www.banahediyeal.com Dünyasýna hoþ geldiniz.\n
TEBRÝKLER!  Artýk siz de sevdiklerinizden istediðiniz hediyeleri alabilecek, istedikleri hediyelerle onlarý mutlu edebileceksiniz…\n".
"Kullanýcý Adýnýz: ".$mail."\n Parolanýz: ".$parola; 
	$adres = $mail;
	@mail($adres, $konu, $mesaj, $baslik);	
}

function tanitim_mail($mail)
{
	$baslik = "From: Tanýtým <info@banahediyeal.com>\n";
	$konu= "BanaHediyeAl.com Tanýtým";
	$mesaj = "Sevdiklerinize hediye aldýðýnýzda yüzlerindeki ifadenin \"hayal kýrýklýðý\" olmasýný istemiyorsanýz, onlarý mutlu etmek için en güzel hediyeyi düþünürken saçlarýnýzý beyazlatýyorsanýz, sizi de http://www.banahediyeal.com adresine bekleriz."; 
	$adres = $mail;
	@mail($adres, $konu, $mesaj, $baslik);	
}

function davet_mail($isim, $mail_gonderen, $id, $giden_ad, $mail_giden)
{
	$baslik = "From: ".$isim." <".$mail_gonderen.">\n";
	$konu= "BanaHediyeAl.com Davet";
	$mesaj = $giden_ad." bir site buldum, sana alýnmasýný istedigin hediyeleri yazýyorsun bizde onu gidip alýyoruz. Ben üye oldum sende olsana.\n  http://www.banahediyeal.com/index.php?id=".$id; 
	$adres = $mail_giden;
	@mail($adres, $konu, $mesaj, $baslik);	
}

function hatirlat_mail($mail, $parola)
{
	$baslik = "From: Iletisim<iletisim@banahediyeal.com>\n";
	$konu= "BanaHediyeAl.com Parola";
	$mesaj = "Selamlar, Kullanýcý adýnýz ve parolanýz aþaðýdadýr. Bu mail size otomatik olarak gönderilmiþtir, \n Lütfen yanýtlamayýnýz.\n\n".
"Kullanýcý Adýnýz: ".$mail."\n Parolanýz: ".$parola; 
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