<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Bana Hediye Al</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body >
<table width="950" border="0" align="center">
  <tr>
    <td width="500"><h1 class="title"><img src="images/ana.png" alt="ana" width="350" height="80" /> </h1></td>
   <td width="300">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td><strong> <a href="index.php">     <?php
	$act = ""; // ikinci formun varsayılan değeri, asama2.php oluyor eğer şartlar sağlanırsa
	
	if ($_POST['ad']=="" or $_POST['soyad']=="" or $_POST['email']=="" or $_POST['password']=="") 
	{
		echo "<br> Lütfen geriye dönüp eksik alanları doldurunuz..";
		echo "</td></tr></table></body></html>";
		exit();
	}
	else
	{
	include("fonksiyonlar.php");
	$ad=$_POST['ad'];
	$ad=BuyukKarakter($ad);
	$soyad=$_POST['soyad'];
	$soyad=BuyukKarakter($soyad);
	$email=$_POST['email'];
	$password=$_POST['password'];
	$date= date("Y-m-d");
	include("veritabani.inc.php");
	$sorgu="SELECT * FROM user WHERE email='$email'";
	$sonuc=mysql_query($sorgu, $veri_yolu);
	$sonuc_sayi=mysql_num_rows($sonuc);
	if ($sonuc_sayi==1) 
	{
		echo "<br> Bu Email daha önce kaydolmuş. Lütfen geriye dönüp yeni bir email ile başvurunuz, veya şifrenizi unuttuysanız, parola hatırlatıcıya başvurunuz...";
		echo '</a></strong></td></tr></table></body></html>';
		exit();
	}
	else
	{
		davetkontrol($email);
		$sorgu="INSERT INTO user (email, password, ad, soyad, puan, registerDate, lastvisitDate) VALUES ('$email', '$password', '$ad', '$soyad', 10, '$date', '$date')"; 
		mysql_query($sorgu,$veri_yolu);
		$sorgu="SELECT (id) FROM user WHERE email='$email'";
		$sonuc=mysql_query($sorgu, $veri_yolu);
		$row=mysql_fetch_array($sonuc);
		$id=$row['id'];
		hediye_kaydet($id);
		$act = "asama2.php"; // ikinci formun gidecei yeri gosteriyor
		include("mailfunc.php"); // mail fonksiyonları yükleniyor
		kayit_mail($ad, $soyad, $email, $password); // mail gönderiliyor.
	//	echo "<br>$id";
	}	
	mysql_close($veri_yolu);
	}
	
	?>	</a></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p>İstediğiniz hediyeleri aşağıdaki alanlara giriniz.</p>
    <form id="form1" name="form1" method="post" action=<?php echo($act) ?>>
      <p>
        1- 
        <input name="hediye1" type="text" id="hediye1" size="70" />
      </p>
      <p>2- 
        <input name="hediye2" type="text" id="hediye2" size="70" />
      </p>
      <p>
        3- 
        <input name="hediye3" type="text" id="hediye3" size="70" />
      </p>
      <p>
        4- 
        <input name="hediye4" type="text" id="hediye4" size="70" />
      </p>
      <p>
        5- 
        <input name="hediye5" type="text" id="hediye5" size="70" />
      </p>
      <p>Doğum Gününüz: 
        <select name="gun" id="gun" size="1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
        </select>
        <select name="ay" id="ay" size="1">
					<option>Ocak</option>
					<option>Şubat</option>
					<option>Mart</option>
					<option>Nisan</option>
					<option>Mayıs</option>
					<option>Haziran</option>
					<option>Temmuz</option>
					<option>Ağustos</option>
					<option>Eylül</option>
					<option>Ekim</option>
					<option>Kasım</option>
					<option>Aralık</option>
        </select>
        <input type="hidden" name="id" value=<?php echo ($id); ?> />
      </p>
      <p align="center">
        <input type="submit" name="Submit" value="Kaydet" />&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="Submit2" value="Temizle" />
      </p>
    </form>    </td>
    <td><p>Üyeliğinizin tamamlanması için bu bölümü boşta bıraksanız onaylamanız gerekiyor. Daha sonra üye girişinden hediyelerinizi seçebilirsiniz. </p>
      <p>Seni en mutlu edecek hediye  ayrıntıda gizli , </p>
      Örneğin pantolon yerine onun markasını, rengini de belirtebilirsin.. </td>
    <td valign="top"><p>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120">
        <param name="movie" value="reklamlar/reklam1.swf" />
        <param name="quality" value="high" />
        <embed src="reklamlar/reklam1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
      </object>
    </p>
      <p>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120" title="rek2">
          <param name="movie" value="reklamlar/reklam2.swf" />
          <param name="quality" value="high" />
          <embed src="reklamlar/reklam2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
        </object>
      </p>
      <p>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120" title="rek3">
          <param name="movie" value="reklamlar/reklam3.swf" />
          <param name="quality" value="high" />
          <embed src="reklamlar/reklam3.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
        </object>
      </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120" title="rek6">
      <param name="movie" value="reklamlar/reklam6.swf" />
      <param name="quality" value="high" />
      <embed src="reklamlar/reklam6.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
    </object> <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120" title="rek7">
      <param name="movie" value="reklamlar/reklam7.swf" />
      <param name="quality" value="high" />
      <embed src="reklamlar/reklam7.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
    </object></td>
    <td><p>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120" title="rek4">
        <param name="movie" value="reklamlar/reklam4.swf" />
        <param name="quality" value="high" />
        <embed src="reklamlar/reklam4.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
      </object>
    </p>
    <p>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="120" height="120" title="rek5">
        <param name="movie" value="reklamlar/reklam5.swf" />
        <param name="quality" value="high" />
        <embed src="reklamlar/reklam5.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="120" height="120"></embed>
      </object>
</p></td>
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
