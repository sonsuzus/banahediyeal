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
    <td width="351"><img src="images/ana.png" alt="ana" width="350" height="80" /></td>
    <td width="155">&nbsp;</td>
    <td width="300"><a href="index.php"><img src="images/anasayfa2.png" alt="geri" width="100" height="30" border="0" /></a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><h3>Sponsorlarımız</h3></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;
	  <p>
	    <?php
		include("fonksiyonlar.php");
	if($_POST['ad']!="" or $_POST['soyad']!="")
	{
		include("veritabani.inc.php");
		if($_POST['ad']!="" and $_POST['soyad']!="")
		{
			$ad=$_POST['ad'];
			$ad=BuyukKarakter($ad);
			$soyad=$_POST['soyad'];
			$soyad=BuyukKarakter($soyad);
			$sorgu="SELECT user.id, user.ad, user.soyad, ozel.id, ozel.gun FROM user, ozel WHERE ad='$ad' AND soyad='$soyad' AND user.id=ozel.id";
			$sonuc=mysql_query($sorgu, $veri_yolu);
			$sonuc_sayi=mysql_num_rows($sonuc);
			if ($sonuc_sayi==0)
			{
				mysql_close($veri_yolu);
				echo "Sorgunuza ait herhangi bir sonuç bulunamadı.";
				echo '</td></tr></table></body></html>';
				exit();
			}
			for($i=0;$i<$sonuc_sayi;$i++)
			{
				$row=mysql_fetch_array($sonuc);
				echo '<br><br><hr><strong>'; echo ($row['ad']); echo " "; echo ($row['soyad']);echo '</strong>';
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; echo " Doğumgünü: "; echo ($row['gun']); 
				$sorgu_hediye="SELECT * FROM hediye WHERE id=".$row['id']." AND hediye!='' ORDER BY no ASC";
				$sonuc_hediye=mysql_query($sorgu_hediye, $veri_yolu);
				$sonuc_hediye_sayi=mysql_num_rows($sonuc_hediye);
				for ($j=0;$j<$sonuc_hediye_sayi;$j++)
				{
					$row_hediye= mysql_fetch_array($sonuc_hediye);
					echo '<br>'; echo ($row_hediye['no']); echo '- ';
					echo ($row_hediye['hediye']); 
				}
			}
			mysql_close($veri_yolu);
		}
		else if($_POST['ad']!="")
		{
			$ad=$_POST['ad'];
			$ad=BuyukKarakter($ad);
			$sorgu="SELECT user.id, user.ad, user.soyad, ozel.id, ozel.gun FROM user, ozel WHERE ad='$ad' AND user.id=ozel.id";
			$sonuc=mysql_query($sorgu, $veri_yolu);
			$sonuc_sayi=mysql_num_rows($sonuc);
			if ($sonuc_sayi==0)
			{
				mysql_close($veri_yolu);
				echo "Sorgunuza ait herhangi bir sonuç bulunamadı.";
				echo '</td></tr></table></body></html>';
				exit();
			}
			for($i=0;$i<$sonuc_sayi;$i++)
			{
				$row=mysql_fetch_array($sonuc);
				echo '<br><br><hr><strong>'; echo ($row['ad']); echo " "; echo ($row['soyad']);echo '</strong>';
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; echo " Doğumgünü: "; echo ($row['gun']);
				$sorgu_hediye="SELECT * FROM hediye WHERE id=".$row['id']." AND hediye!='' ORDER BY no ASC";
				$sonuc_hediye=mysql_query($sorgu_hediye, $veri_yolu);
				$sonuc_hediye_sayi=mysql_num_rows($sonuc_hediye);
				for ($j=0;$j<$sonuc_hediye_sayi;$j++)
				{
					$row_hediye= mysql_fetch_array($sonuc_hediye);
					echo '<br>'; echo ($row_hediye['no']); echo '- ';
					echo ($row_hediye['hediye']); 
				}
			}
			mysql_close($veri_yolu);
		}
		else
		{
			$soyad=$_POST['soyad'];
			$soyad=BuyukKarakter($soyad);
			$sorgu="SELECT user.id, user.ad, user.soyad, ozel.id, ozel.gun FROM user, ozel WHERE soyad='$soyad' AND user.id=ozel.id";
			$sonuc=mysql_query($sorgu, $veri_yolu);
			$sonuc_sayi=mysql_num_rows($sonuc);
			if ($sonuc_sayi==0)
			{
				mysql_close($veri_yolu);
				echo "Sorgunuza ait herhangi bir sonuç bulunamadı.";
				echo '</td></tr></table></body></html>';
				exit();
			}
			for($i=0;$i<$sonuc_sayi;$i++)
			{
				$row=mysql_fetch_array($sonuc);
				echo '<br><br><hr><strong>'; echo ($row['ad']); echo " "; echo ($row['soyad']);echo '</strong>';
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; echo " Doğumgünü: "; echo ($row['gun']);
				$sorgu_hediye="SELECT * FROM hediye WHERE id=".$row['id']." AND hediye!='' ORDER BY no ASC";
				$sonuc_hediye=mysql_query($sorgu_hediye, $veri_yolu);
				$sonuc_hediye_sayi=mysql_num_rows($sonuc_hediye);
				for ($j=0;$j<$sonuc_hediye_sayi;$j++)
				{
					$row_hediye= mysql_fetch_array($sonuc_hediye);
					echo '<br>'; echo ($row_hediye['no']); echo '- ';
					echo ($row_hediye['hediye']); 
				}
			}
			mysql_close($veri_yolu);
		}
	
	}
	
	
	
	
	else if($_GET['ad']!="" and $_GET['soyad']!="")
	{
		include("veritabani.inc.php");
		// burdaki veri tek olacak şekilde düzenlenecek.
			$ad=$_GET['ad'];
			$ad=BuyukKarakter($ad);
			$soyad=$_GET['soyad'];
			$soyad=BuyukKarakter($soyad);
			$sorgu="SELECT user.id, user.ad, user.soyad, ozel.id, ozel.gun FROM user, ozel WHERE ad='$ad' AND soyad='$soyad' AND user.id=ozel.id";
			$sonuc=mysql_query($sorgu, $veri_yolu);
			$sonuc_sayi=mysql_num_rows($sonuc);
			if ($sonuc_sayi==0)
			{
				mysql_close($veri_yolu);
				echo "Sorgunuza ait herhangi bir sonuç bulunamadı.";
				echo '</td></tr></table></body></html>';
				exit();
			}
			for($i=0;$i<$sonuc_sayi;$i++)
			{
				$row=mysql_fetch_array($sonuc);
				echo '<br><br><hr><strong>'; echo ($row['ad']); echo " "; echo ($row['soyad']);echo '</strong>';
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; echo " Doğumgünü: "; echo ($row['gun']); 
				$sorgu_hediye="SELECT * FROM hediye WHERE id=".$row['id']." AND hediye!='' ORDER BY no ASC";
				$sonuc_hediye=mysql_query($sorgu_hediye, $veri_yolu);
				$sonuc_hediye_sayi=mysql_num_rows($sonuc_hediye);
				for ($j=0;$j<$sonuc_hediye_sayi;$j++)
				{
					$row_hediye= mysql_fetch_array($sonuc_hediye);
					echo '<br>'; echo ($row_hediye['no']); echo '- ';
					echo ($row_hediye['hediye']); 
				}
			}
			mysql_close($veri_yolu);
	}
	
	?>	
    </p>
      <hr />      <p>&nbsp;</p></td>
	  <td align="center"><p><a href="http://www.aysetugrul.com/" target="_blank"><img src="reklamlar/aysetugrul.jpg" alt="AyseTugrul.com" width="250" height="83" border="0" /></a></p>
    <p><a href="http://www.satranc.net/magaza/default.asp"><img src="http://www.satranc.net/logob.jpg" alt="satranc" width="150" height="170" border="0" /></a></p>
    <p><a target="_blank" href="http://www.kitapyurdu.com/default.asp?AID=16915"> <img alt="internet kitapçınız kitapyurdu.com'dan binlerce kitaba ulaşabilirsiniz." border=0 src="http://affiliate.kitapyurdu.com/affiliatepic.asp?type=6 " align="left"></a>
&nbsp;
<script type="text/javascript"><!--
google_ad_client = "pub-6875555204127868";
google_ad_width = 125;
google_ad_height = 125;
google_ad_format = "125x125_as";
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
</p>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;	</td>
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
</script>	</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="comment">
      <h5>Bana Hediye Al 2007 &copy;</h5>
    </div></td>
  </tr>
</table>
</body>
</html>
