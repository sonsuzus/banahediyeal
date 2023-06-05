<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Bana Hediye Al</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script></head>

<body onload="MM_preloadImages('images/uyegiris.png','images/iletisim.png')" >
<p>
  <?php 
include("veritabani.inc.php");
include("fonksiyonlar.php");

	$ip=$_SERVER['REMOTE_ADDR'];
	$referer=$_SERVER['HTTP_REFERER'];	
	$tarih=date("F j, G:i:s");
	$id=$_GET['id'];
	if ($id!="") get_kontrol($id);				// mail üzerinden geleni takip ediyor
	verial($ip, $referer, $tarih); // verileri kaydediyor
	$sayi=ziyaretci_sayi();
	$son_uyeler=son_uyeler(5);
	$bugun_dogan=bugun_dogan();
	$en_yuksek_puanli=en_yuksek_puanli(3);
	$rastgele_uyeler=rastgele_uyeler();
	$uye_sayi=uye_sayi();
	$tarih_yaz= date("j - ").ay_yazi_dondur().date(" - Y");
	mysql_close($veri_yolu);


?>
</p>
<p>&nbsp;</p>
<table width="950" border="0" align="center" background="images/artalan.png">
  <tr>
    <td width="170">&nbsp;</td>
    <td width="453"> &nbsp;&nbsp;<img src="images/ana.png" alt="Ana" align="right" /> </td>
    
    <td width="213" align="right" valign="middle"><?php echo($tarih_yaz); ?>&nbsp;</td>
	<td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    <td align="left" valign="bottom" class="body">&nbsp;</td>
	<td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom"><p><img src="images/anasayfa.png" alt="Ana Sayfa" width="100" height="30" /><br>
      <a href="uyegiris.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('uyegiris','','images/uyegiris.png',1)"><img src="images/uyegiris2.png" alt="Üye Giriş" name="uyegiris" width="100" height="30" border="0" id="uyegiris" /></a>
    <br><a href="iletisim.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('iletisim','','images/iletisim.png',1)"><img src="images/iletisim2.png" name="iletisim" width="100" height="30" border="0" id="iletisim" /></a></p></td>
    <td><p align="center">&nbsp;</p>
      <p align="center">Birine   hediye alırken <strong>kararsızlık</strong> mı   yaşıyorsunuz?</p>
      <p align="center">Aldığınız   hediyenin onun <strong>en çok   istediği</strong> şey mi   olmasını istiyorsunuz?</p>
      <p align="center">Yoksa   şimdiye kadar size alınan hediyelerin <strong>hiçbiri</strong> mi işinize   yaramadı?</p>
      <p align="center">İşte şimdi   hediye konusunda tüm sıkıntılarınızı ortadan kaldıracak bir  SİTENİZ var.</p>
      <p align="center">Hem de ÜCRETSİZ ÜYELİK.</p></td>
   
    <td align="right" valign="top" class="body"><h2>Üye Ol</h2>
      <form id="form1" name="form1" method="post" action="asama1.php">
        <p> Ad:
          <input name="ad" type="text" id="ad" />
        </p>
        <p>Soyad:
          <input name="soyad" type="text" id="soyad" />
        </p>
        <p>Email:
          <input name="email" type="text" id="email" />
        </p>
        <p>Parola:
          <input name="password" type="text" id="password" />
        </p>
        <p>
          <input type="submit" name="Submit" value="Gönder" />
          <input type="reset" name="Submit2" value="Temizle" />
        </p>
      </form>
    <p></p></td>
	<td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="middle">
	<script type="text/javascript"><!--
google_ad_client = "pub-6875555204127868";
google_ad_width = 120;
google_ad_height = 60;
google_ad_format = "120x60_as_rimg";
google_cpa_choice = "CAEQkb78zwEaCLJqXdL3KZ2sKLvkl3Q";
//-->
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	</td>
    <td valign="top"><img src="images/rek1.jpg" alt="rek1" width="128" height="85" /><img src="images/rek2.jpg" alt="rek2" width="128" height="78" /><img src="images/rek3.jpg" alt="rek3" width="128" height="76" /></td>
    
    <td align="left" valign="top" class="body">Hayal kırıklığı yerine mutluluk, kuru bir teşekkür  yerine sıcak bir kucaklaşma için sen de hemen üye ol, sevdiklerini mutlu et.</td>
	<td>&nbsp;</td>
  </tr>
  <tr>
    <td><p>Üye Sayısı</p>
    <p align="center"><?php echo($uye_sayi); ?>&nbsp;&nbsp;&nbsp;&nbsp; </p></td>
    <td><h2>Arama</h2>
      <form id="form2" name="form2" method="post" action="arama.php">
        Ad: 
        <label>
        <input name="ad" type="text" id="ad" />
        </label>
        Soyad: 
        <label>
        <input name="soyad" type="text" id="soyad" />
        </label>
                  <p>
                    <label>
                    <input type="submit" name="Submit3" value="Bul" />
                    </label>
        </p>
      </form>      
      <p><span class="menu">Aradığın kişinin adını soyadını yaz, hediyesini  öğren, O'nu mutlu et.</span></p></td>
    
    <td align="right" valign="middle"><p><strong>Son 5 Üyemiz</strong></p>
      <p><?php echo($son_uyeler); ?> </p></td>
	  <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p align="left">Ziyaretçi Sayısı</p>
      <p align="center"><?php echo($sayi+400); ?> &nbsp;&nbsp;&nbsp;&nbsp;</p></td>
    <td valign="middle" class="menu">Üyelerimizin yazdığı tüm hediyeleri görmek için <a href="tumhediyeler.php?page=1">tıklayınız</a>. </td>
   
    <td align="right" valign="middle"><p><?php echo($bugun_dogan); ?></p>
      </td>
	<td>&nbsp;</td>
  </tr>
  <tr>
    <td><p><strong>Rastgele 5 Üyemiz</strong></p>
    <p><?php echo($rastgele_uyeler); ?></p></td>
    <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120" title="rek7">
      <param name="movie" value="reklamlar/reklam7.swf" />
      <param name="quality" value="high" />
      <embed src="reklamlar/reklam7.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
    </object> <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120" title="rek8">
      <param name="movie" value="reklamlar/reklam8.swf" />
      <param name="quality" value="high" />
      <embed src="reklamlar/reklam8.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
    </object> <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120" title="rek4">
      <param name="movie" value="reklamlar/reklam4.swf" />
      <param name="quality" value="high" />
      <embed src="reklamlar/reklam4.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
    </object></td>
    <td align="right" valign="middle"><p><strong>En Yüksek Puanlı Üyelerimiz</strong></p>
    <p><?php echo($en_yuksek_puanli); ?></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   
    <td>&nbsp;</td>
	<td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><div align="center" class="comment">
      <h5>Bana Hediye Al 2007 &copy;</h5>
    </div></td>
  </tr>
</table>
</body>
</html>
