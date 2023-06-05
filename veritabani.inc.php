<?php
	$veritabani_adi="hediye_banahediyeal";
	$kullanici_adi="hediye_ufuk";
	$parola="pass";
    
	
	
	$veri_yolu=mysql_connect("localhost",$kullanici_adi,$parola);
	if ( ! $veri_yolu) die ("MySQL ile veri baglantisi kurulamiyor!");
	mysql_select_db( $veritabani_adi , $veri_yolu ) or die ("Veritabani acilamadi".mysql_error() );

function puanekle($id=0, $puan=0)
{
	global $veri_yolu;
	$sorgu="UPDATE user SET puan=puan+$puan WHERE id=$id";
	@mysql_query($sorgu, $veri_yolu);
}	

function davetekle($id, $davet_mail)
{
	global $veri_yolu;
	$sorgu="INSERT INTO davet (id, mail) VALUES ($id, '$davet_mail')";
	@mysql_query($sorgu, $veri_yolu);
}

function davetkontrol($davet_mail)
{
	global $veri_yolu;
	$sorgu="SELECT id FROM davet WHERE mail='$davet_mail'";
	$sonuc=mysql_query($sorgu, $veri_yolu);
	$sonuc_sayi=mysql_num_rows($sonuc);
	for($i=0;$i<$sonuc_sayi;$i++)
	{
				$row=mysql_fetch_array($sonuc);
				$id=$row['id'];
				$sorgu="UPDATE user SET puan=puan+15 WHERE id=$id";
				mysql_query($sorgu, $veri_yolu);
	}
}

function get_kontrol($id=0)
{
	global $veri_yolu;
	$sorgu="UPDATE user SET puan=puan+5 WHERE id=$id";
	@mysql_query($sorgu, $veri_yolu);
}

function verial($ip, $referer, $tarih)
{
	global $veri_yolu;
	$sorgu="INSERT INTO veri (ip, referer, tarih) VALUES ('$ip','$referer', '$tarih')";
	mysql_query($sorgu, $veri_yolu);
}
function ziyaretci_sayi()
{
	global $veri_yolu;
	$sorgu="SELECT MAX(no) FROM veri";
	$sonuc=mysql_query($sorgu, $veri_yolu);
	$sayi= mysql_fetch_array($sonuc);
	$sayi= $sayi['MAX(no)'];
	return $sayi;

}	

function son_uyeler($sayi=5)
{
	global $veri_yolu;
	$mesaj="";
	$sorgu="SELECT MAX(id) FROM user";  // en büyük no sorgulanicak
		$sonuc=mysql_query($sorgu, $veri_yolu);             // sorgulanio
		$row=mysql_fetch_array($sonuc);      // bir satira atanio
		$son=$row['MAX(id)'];                // sonuc bulunuo.. burada 'MAX(no)' kullanmak onemli,
		$son=$son-$sayi;
		
	$sorgu="SELECT * FROM user WHERE id>$son";
	
	$sonuc=mysql_query($sorgu, $veri_yolu);
	$sonuc_sayi=mysql_num_rows($sonuc);
	for($i=0;$i<$sonuc_sayi;$i++)
	{
		$row=mysql_fetch_array($sonuc);
		$mesaj="<a href=\"arama.php?ad=".$row['ad']."&soyad=".$row['soyad']."\">".
		$row['ad']." ".$row['soyad']."</a><br>".$mesaj;
		
	}
	return $mesaj;


}

function en_yuksek_puanli($sayi=3)
{
	global $veri_yolu;
	$mesaj="";
	$sorgu="SELECT * FROM user ORDER BY puan DESC";
	$sonuc=mysql_query($sorgu, $veri_yolu);
	for($i=0;$i<$sayi;$i++)
	{
		$row=mysql_fetch_array($sonuc);
		$mesaj=$mesaj."<a href=\"arama.php?ad=".$row['ad']."&soyad=".$row['soyad']."\">".
		$row['ad']." ".$row['soyad']." - ".$row['puan']."</a><br>";
		
	}
	return $mesaj;
}

function rastgele_uyeler()
{
	global $veri_yolu;
	$mesaj="";
	$sorgu="SELECT MAX(id) FROM user";  // en büyük no sorgulanicak
		$sonuc=mysql_query($sorgu, $veri_yolu);             // sorgulanio
		$row=mysql_fetch_array($sonuc);      // bir satira atanio
		$son=$row['MAX(id)'];                // sonuc bulunuo.. burada 'MAX(no)' kullanmak onemli,
		$ra1=rand(1,$son);
		$ra2=rand(1,$son);
		$ra3=rand(1,$son);
		$ra4=rand(1,$son);
		$ra5=rand(1,$son);
		
	$sorgu="SELECT * FROM user WHERE id=$ra1 OR id=$ra2 OR id=$ra3 OR id=$ra4 OR id=$ra5";
	
	$sonuc=mysql_query($sorgu, $veri_yolu);
	$sonuc_sayi=mysql_num_rows($sonuc);
	for($i=0;$i<$sonuc_sayi;$i++)
	{
		$row=mysql_fetch_array($sonuc);
		$mesaj="<a href=\"arama.php?ad=".$row['ad']."&soyad=".$row['soyad']."\">".
		$row['ad']." ".$row['soyad']."</a><br>".$mesaj;
		
	}
	return $mesaj;


}

function hediye_kaydet($id)
{
	global $veri_yolu;
	$sorgu="INSERT INTO hediye (id, no, hediye) VALUES ('$id', 1, '')";
		mysql_query($sorgu,$veri_yolu);
			
		$sorgu="INSERT INTO hediye (id, no, hediye) VALUES ('$id', 2, '')";
		mysql_query($sorgu,$veri_yolu);
			 
		$sorgu="INSERT INTO hediye (id, no, hediye) VALUES ('$id', 3, '')";
		mysql_query($sorgu,$veri_yolu);
			
		$sorgu="INSERT INTO hediye (id, no, hediye) VALUES ('$id', 4, '')";
		mysql_query($sorgu,$veri_yolu);
			 
		$sorgu="INSERT INTO hediye (id, no, hediye) VALUES ('$id', 5, '')";
		mysql_query($sorgu,$veri_yolu);
		
		$sorgu="INSERT INTO ozel (id, no, gun, aciklama) VALUES ('$id', 1, '', 'Doðum Günü')";
	mysql_query($sorgu,$veri_yolu);

}

function uye_sayi()
{
	global $veri_yolu;
	
	$sorgu="SELECT MAX(id) FROM user";  // en büyük no sorgulanicak
		$sonuc=mysql_query($sorgu, $veri_yolu);             // sorgulanio
		$row=mysql_fetch_array($sonuc);      // bir satira atanio
		return $row['MAX(id)']+50;                // sonuc bulunuo.. 50 toplanýyor ve donduruluo,

}

function bugun_dogan()
{
	global $veri_yolu;
	$mesaj ="<strong>Bugün doðan üyelerimiz</strong><br><br>";
	$ay = date("n");
	switch($ay)
	{
		case "1": $ay="Ocak"; break;
		case "2": $ay="Þubat"; break;
		case "3": $ay="Mart"; break;
		case "4": $ay="Nisan"; break;
		case "5": $ay="Mayýs"; break;
		case "6": $ay="Haziran"; break;
		case "7": $ay="Temmuz"; break;
		case "8": $ay="Aðustos"; break;
		case "9": $ay="Eylül"; break;
		case "10": $ay="Ekim"; break;
		case "11": $ay="Kasým"; break;
		case "12": $ay="Aralýk"; break;
		default: $ay;
	}
	$gun= date("j");
	$bugun = $gun."-".$ay;
	$sorgu="SELECT ad,soyad FROM user, ozel WHERE user.id=ozel.id AND gun='$bugun'";
	$sonuc=mysql_query($sorgu, $veri_yolu);
	$sonuc_sayi=mysql_num_rows($sonuc);
	for($i=0;$i<$sonuc_sayi;$i++)
	{
		$row=mysql_fetch_array($sonuc);
		$mesaj=$mesaj."<a href=\"arama.php?ad=".$row['ad']."&soyad=".$row['soyad']."\">".
		$row['ad']." ".$row['soyad']."</a><br>";
		
	}
	return $mesaj;

}	


	
?>