<?php include("fonksiyonlar.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Bana Hediye Al</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body >
<table width="80%" border="0" align="center">
  <tr>
    <td width="341"><h1 class="title"><a href="index.php">Bana Hediye Al</a> </h1></td>
   <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;
	  <h3>Tebrikler
      </h3>
	  <p>
	    <?php
	$id=$_POST['id'];
	$hediye1=$_POST['hediye1'];
	$hediye2=$_POST['hediye2'];
	$hediye3=$_POST['hediye3'];
	$hediye4=$_POST['hediye4'];
	$hediye5=$_POST['hediye5'];
	$gun = $_POST['gun'];
	$ay = $_POST['ay'];
	include("veritabani.inc.php");
	 
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
	mysql_close($veri_yolu);
	echo "Verileriniz kaydoldu. Eğer değiştirmek isterseniz üye girişini kullanabilirsiniz.";
	echo "<br><br> Anasayfaya yönlendiriliyorsunuz...";
	yonlendirsureli("index.php", 4);
	
	?>
	    
      </p></td>
    <td><img src="images/gulumse.jpg" alt="tebrik" width="420" height="374"></td>
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
