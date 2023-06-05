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
    <td><div align="center">Email</div></td>
    <td><div align="center">Doğum Günü</div></td>
	<td><div align="center">Puan</div></td>
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
  $mesaj="";
  if($_POST['id']!="")
  {
  	$id=$_POST['id'];
	$sorgu = "DELETE FROM user WHERE id=$id";
		$sonuc = mysql_query($sorgu,$veri_yolu);
		$sorgu = "DELETE FROM ozel WHERE id=$id";
		$sonuc = mysql_query($sorgu, $veri_yolu);
		$sorgu = "DELETE FROM hediye WHERE id=$id";
		$sonuc = mysql_query($sorgu, $veri_yolu);
		$mesaj= 'Kayıt Silindi';
  }
  
  
  $sorgu="SELECT * FROM user, ozel WHERE user.id=ozel.id ORDER BY user.id ASC";
  $sonuc=mysql_query($sorgu, $veri_yolu);
	$sonuc_sayi=mysql_num_rows($sonuc);
	for($i=0;$i<$sonuc_sayi;$i++)
	{
		$row=mysql_fetch_array($sonuc);
		echo '<tr><td>'; echo ($row['id']); echo '</td><td>';
		echo ($row['ad']); echo " "; echo($row['soyad']); echo '</td><td>';
		echo ($row['email']); echo '</td><td>';
		echo ($row['gun']); echo '</td><td>';
		echo ($row['puan']); echo '</td></tr>';
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
    <td><form id="form1" name="form1" method="post" action="">
      <input name="id" type="text" id="id" />
        <input type="submit" name="Submit" value="Sil" />
    </form>
    </td>
    <td><?php echo($mesaj); ?>&nbsp;</td>
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
