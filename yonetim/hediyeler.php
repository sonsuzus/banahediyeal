<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Bana Hediye Al</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>

<body >
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000099">
  <tr>
    <td>&nbsp;</td>
   <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">Id</div></td>
    <td><div align="center">Ad Soyad </div></td>
    <td><div align="center">No</div></td>
    <td><div align="center">Hediyeler</div></td>
	<td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php 
  include("../veritabani.inc.php");
  
  
  $sorgu="SELECT * FROM user, hediye WHERE user.id=hediye.id ORDER BY user.id,no ASC";
  $sonuc=mysql_query($sorgu, $veri_yolu);
	$sonuc_sayi=mysql_num_rows($sonuc);
	for($i=0;$i<$sonuc_sayi;$i++)
	{
		$row=mysql_fetch_array($sonuc);
		echo '<tr><td>'; echo ($row['id']); echo '</td><td>';
		echo ($row['ad']); echo " "; echo($row['soyad']); echo '</td><td>';
		echo ($row['no']); echo '</td><td>';
		echo ($row['hediye']); echo '</td><td>';
		echo '&nbsp;'; echo '</td></tr>';
	}
  
  
  ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><div align="center" class="comment">
      <h5>Bana Hediye Al 2007 &copy;</h5>
    </div></td>
  </tr>
</table>
</body>
</html>
