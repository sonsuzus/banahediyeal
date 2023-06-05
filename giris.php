<?php
	@session_start();
	if ($_POST['email']!="" and $_POST['password']!="")
	{
		include("veritabani.inc.php");
		$email=$_POST['email'];
		$parola=$_POST['password'];
		$sorgu= "SELECT id, puan FROM user WHERE email='$email' AND password='$parola'";
		$sonuc=mysql_query($sorgu,$veri_yolu);
		$row=mysql_fetch_array($sonuc);
		$id=$row['id'];
		if ($id!="")
		{
		//	$puan=$row['puan']+2;
			$date= date("Y-m-d");
			$sorgu="UPDATE user SET lastvisitDate='$date' WHERE id=$id";
			mysql_query($sorgu, $veri_yolu);
			mysql_close($veri_yolu);
			//setcookie("sid",$id);
			$_SESSION['id']=$id;
			
			header("Location: uye.php");
			exit();
		}
		else
		{
			$mesaj= "Kullanýcý mailiniz veya parolanýz yanlýþ. Parolanýzý unuttuysanýz, parola hatýrlatýcýya baþvurabilirsiniz.";
		}
	}
	else
	{
		$mesaj= "Lütfen kullanýcý maili ve parolanýzý yazýnýz.";
	}
	
	?>
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
    <td>&nbsp;<?php echo ($mesaj); ?>
	
	
	
	</td>
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
