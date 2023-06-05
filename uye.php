<?php
	session_start();
	$id=$_SESSION['id'];
	if($id==0) 
	{
		header("Location: index.php");
		exit();
	} 
	$guncelleme_mesaji="";
	$mail_mesaji="";
	include("veritabani.inc.php");
	include("fonksiyonlar.php");
	// Eðer post medotu ile bilgi geliyorsa,
	if($_POST['email']!="")
	{
		$email=$_POST['email'];
		$parola=$_POST['parola'];
		$ad=$_POST['ad'];
		$ad=BuyukKarakter($ad);
		$soyad=$_POST['soyad'];
		$soyad=BuyukKarakter($soyad);
		$hediye1=$_POST['hediye1'];
		$hediye2=$_POST['hediye2'];
		$hediye3=$_POST['hediye3'];
		$hediye4=$_POST['hediye4'];
		$hediye5=$_POST['hediye5'];
		$gun = $_POST['gun'];
		$ay = $_POST['ay'];
		$sorgu="UPDATE user SET email='$email', password='$parola', ad='$ad', soyad='$soyad' WHERE id=$id";
		mysql_query($sorgu, $veri_yolu);
		$sorgu="UPDATE hediye SET hediye='$hediye1' WHERE id=$id AND no=1";
		mysql_query($sorgu, $veri_yolu);
		$sorgu="UPDATE hediye SET hediye='$hediye2' WHERE id=$id AND no=2";
		mysql_query($sorgu, $veri_yolu);
		$sorgu="UPDATE hediye SET hediye='$hediye3' WHERE id=$id AND no=3";
		mysql_query($sorgu, $veri_yolu);
		$sorgu="UPDATE hediye SET hediye='$hediye4' WHERE id=$id AND no=4";
		mysql_query($sorgu, $veri_yolu);
		$sorgu="UPDATE hediye SET hediye='$hediye5' WHERE id=$id AND no=5";
		mysql_query($sorgu, $veri_yolu);
		$dogum_gun=$gun."-".$ay;
	$sorgu="UPDATE ozel SET gun='$dogum_gun' WHERE id=$id AND no=1";
	mysql_query($sorgu,$veri_yolu);
		$guncelleme_mesaji="Bilgileriniz Güncellendi...";
	}
	
	// user sorgulamasý
	$sorgu="SELECT * FROM user WHERE id=$id";
	$sonuc=mysql_query($sorgu, $veri_yolu);
	$row=mysql_fetch_array($sonuc);
	$email=$row['email'];
	$parola=$row['password'];
	$ad=$row['ad'];
	$soyad=$row['soyad'];
	$puan=$row['puan'];
	$resim=$row['resim'];
	$registerDate=$row['registerDate'];
	$lastvisitDate=$row['lastvisitDate'];
	// Hediye sorgulamasý
	$sorgu_hediye="SELECT * FROM hediye WHERE id=$id";
	$sonuc_hediye=mysql_query($sorgu_hediye, $veri_yolu);
	$sonuc_hediye_sayi=mysql_num_rows($sonuc_hediye);
	for ($j=0;$j<$sonuc_hediye_sayi;$j++)
	{
		$row_hediye= mysql_fetch_array($sonuc_hediye);
		$hediye[$row_hediye['no']]=$row_hediye['hediye']; 
	}
	// Ozel Gun sorgulamasý
	$sorgu_gun="SELECT * FROM ozel WHERE id=$id";
	$sonuc_gun=mysql_query($sorgu_gun, $veri_yolu);
	$row_gun=mysql_fetch_array($sonuc_gun);
	$gun=$row_gun['gun'];
	$d=gun_ay_dondur($gun); // dizi degiskeni d ye iki tane sayisal deger geliyor
	$gun1 = $d[0]; // gun atamasý yapýlýyor
	$ay1 = $d[1]; // ay atamasý yapýlýyor
	$dizigun[$gun1] = "selected";
	$diziay[$ay1] = "selected";
	if($_POST['mail_isim']!="" and $_POST['mail_mail']!="")
	{
		include ("mailfunc.php");
		$gonderen_isim=$ad." ".$soyad;
		$giden_isim=$_POST['mail_isim'];
		$giden_mail=$_POST['mail_mail'];
		davet_mail($gonderen_isim, $email, $id, $giden_isim, $giden_mail);
		// veritabaný eklenecek
		davetekle($id, $giden_mail);
		puanekle($id, 2);
		$mail_mesaji="Mailiniz Gönderildi.";		
	}
	
	mysql_close($veri_yolu);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Bana Hediye Al</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body >
<table width="850" border="0" align="center">
  <tr>
    <td width="365"><h1 class="title"><img src="images/ana.png" alt="ana" width="350" height="80" /> </h1></td>
   <td width="111">&nbsp;</td>
    <td width="360"><a href="index.php"><img src="images/anasayfa2.png" alt="ind" width="100" height="30" border="0" /></a></td>
  </tr>
  <form id="form1" name="form1" method="post" action="">
  <tr>
    <td><input name="id" type="hidden" id="<? echo ($id); ?>" /></td>
    <td><p>
      Puanýnýz: <?php echo ($puan); ?>
    </p>      </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
	
	<table width="100%" border="0" bgcolor="#ECE9D8">
      <tr>
        <td width="95">Email:</td>
        <td width="245"><input type="text" name="email" value="<?php echo($email); ?>" size="40" /></td>
      </tr>
      <tr>
        <td>Parola: </td>
        <td><input type="text" name="parola" value="<?php echo($parola); ?>" /></td>
      </tr>
      <tr>
        <td>Ad: </td>
        <td><input name="ad" type="text" id="ad" size="30" value="<?php echo($ad); ?>" /></td>
      </tr>
      <tr>
        <td>Soyad: </td>
        <td><input name="soyad" type="text" id="soyad" size="30" value="<?php echo($soyad); ?>" /></td>
      </tr>
      <tr>
        <td>Hediye 1: </td>
        <td><input name="hediye1" type="text" id="hediye1"  value="<?php echo($hediye[1]); ?>" size="40" /></td>
      </tr>
      <tr>
        <td>Hediye 2: </td>
        <td><input name="hediye2" type="text" id="hediye2"  value="<?php echo($hediye[2]); ?>" size="40" /></td>
      </tr>
      <tr>
        <td>Hediye 3: </td>
        <td><input name="hediye3" type="text" id="hediye3"  value="<?php echo($hediye[3]); ?>" size="40" /></td>
      </tr>
      <tr>
        <td>Hediye 4: </td>
        <td><input name="hediye4" type="text" id="hediye4"  value="<?php echo($hediye[4]); ?>" size="40" /></td>
      </tr>
	  <tr>
        <td>Hediye 5: </td>
        <td><input name="hediye5" type="text" id="hediye5"  value="<?php echo($hediye[5]); ?>" size="40" /></td>
      </tr>
	  <tr>
        <td>Doðum Günü: </td>
        <td>  <select name="gun" id="gun" size="1">
          <option <?php echo ($dizigun[1]); ?> >1</option>
          <option <?php echo ($dizigun[2]); ?> >2</option>
          <option <?php echo ($dizigun[3]); ?> >3</option>
          <option <?php echo ($dizigun[4]); ?> >4</option>
          <option <?php echo ($dizigun[5]); ?> >5</option>
          <option <?php echo ($dizigun[6]); ?> >6</option>
          <option <?php echo ($dizigun[7]); ?> >7</option>
          <option <?php echo ($dizigun[8]); ?> >8</option>
          <option <?php echo ($dizigun[9]); ?> >9</option>
          <option <?php echo ($dizigun[10]); ?> >10</option>
          <option <?php echo ($dizigun[11]); ?> >11</option>
          <option <?php echo ($dizigun[12]); ?> >12</option>
          <option <?php echo ($dizigun[13]); ?> >13</option>
          <option <?php echo ($dizigun[14]); ?> >14</option>
          <option <?php echo ($dizigun[15]); ?> >15</option>
          <option <?php echo ($dizigun[16]); ?> >16</option>
          <option <?php echo ($dizigun[17]); ?> >17</option>
          <option <?php echo ($dizigun[18]); ?> >18</option>
          <option <?php echo ($dizigun[19]); ?> >19</option>
          <option <?php echo ($dizigun[20]); ?> >20</option>
          <option <?php echo ($dizigun[21]); ?> >21</option>
          <option <?php echo ($dizigun[22]); ?> >22</option>
          <option <?php echo ($dizigun[23]); ?> >23</option>
          <option <?php echo ($dizigun[24]); ?> >24</option>
          <option <?php echo ($dizigun[25]); ?> >25</option>
          <option <?php echo ($dizigun[26]); ?> >26</option>
          <option <?php echo ($dizigun[27]); ?> >27</option>
          <option <?php echo ($dizigun[28]); ?> >28</option>
          <option <?php echo ($dizigun[29]); ?> >29</option>
          <option <?php echo ($dizigun[30]); ?> >30</option>
          <option <?php echo ($dizigun[31]); ?> >31</option>
        </select>  <select name="ay" id="ay" size="1">
          <option <?php echo ($diziay[0]); ?> >Ocak</option>
          <option <?php echo ($diziay[1]); ?> >Þubat</option>
          <option <?php echo ($diziay[2]); ?> >Mart</option>
          <option <?php echo ($diziay[3]); ?> >Nisan</option>
          <option <?php echo ($diziay[4]); ?> >Mayýs</option>
          <option <?php echo ($diziay[5]); ?> >Haziran</option>
          <option <?php echo ($diziay[6]); ?> >Temmuz</option>
          <option <?php echo ($diziay[7]); ?> >Aðustos</option>
          <option <?php echo ($diziay[8]); ?> >Eylül</option>
          <option <?php echo ($diziay[9]); ?> >Ekim</option>
          <option <?php echo ($diziay[10]); ?> >Kasým</option>
          <option <?php echo ($diziay[11]); ?> >Aralýk</option>
        </select></td>
      </tr>
    </table>    </td>
    <td valign="top">&nbsp;</td>
    <td><p>Bu alanda  hediyelerinizi istediðiniz gibi revize edebilirsiniz, sað alt köþede gördüðünüz  &quot;sevdiklerine öner&quot; köþesi sizi sadece paylaþýmcý bir birey yapmak için deðil,  ayný zamanda Bana  Hediye Al' a kazandýrdýðýnýz  her üye içinde ekstra 15 puan kazanmanýz için tasarlandý. Böylece biriken  puanlarýnýzla Bana  Hediye Al' dan ya da sponsorlarýmýzdan sürpriz  hediyeler kazanmanýz mümkün... ;) </p>
      <p><strong>Puanlama:  </strong></p>
      <p>Sevdiklerine  Öner: 2 Puan 
      <br />
        Sayende gelen üye: 15 Puan</p>      </td>
  </tr>
  <tr>
    <td><div align="center">
      <input type="submit" name="Submit" value="Güncelle" />
    </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
  <tr>
    <td>&nbsp;<?php echo ($guncelleme_mesaji); ?></td>
    <td>&nbsp;</td>
    <td align="center"><div align="center">Sevdiklerinize Önerin:  </div></td>
  </tr>
   <tr>
    <td valign="top"><p>Siteye üyelik tarihiniz: <?php echo($registerDate) ?></p>
      <p>Siteye son giriþ tarihiniz: <?php echo($lastvisitDate) ?> </p></td>
    <td>&nbsp;</td>
    <td><form id="form2" name="form2" method="post" action="">
      <p align="right">Arkadaþýnýzýn,</p>
      <p align="right"> Ýsmi: 
        <input name="mail_isim" type="text" id="mail_isim" size="40" />
      </p>
      <p align="right">Mail adresi: 
        <input name="mail_mail" type="text" id="mail_mail" size="40" />
      </p>
      <p align="right">
        <input type="submit" name="Submit2" value="Gönder" />
      </p>
    </form>    </td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;<?php echo($mail_mesaji); ?>	</td>
  </tr>
 
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td colspan="3">
	 <script type="text/javascript"><!--
google_ad_client = "pub-6875555204127868";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text_image";
google_ad_channel = "";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "660000";
google_color_text = "000000";
google_color_url = "660000";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	 
	 &nbsp;</td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="comment">
      <h5>Bana Hediye Al 2007 &copy;</h5>
    </div></td>
  </tr>
</table>

</body>
</html>
