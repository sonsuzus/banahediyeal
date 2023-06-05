<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Bana Hediye Al</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

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

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/anasayfa.png')" >
<table width="850" border="0" align="center">
  <tr>
    <td width="120">&nbsp;</td>
    <td width="381"><h1 class="title"><img src="images/ana.png" alt="BanaHediyeAl" /> </h1></td>
   <td width="328">&nbsp;</td>
    <td width="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><h2>Üye Girişi </h2></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom"><p><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('AnaSayfa','','images/anasayfa.png',1)"><img src="images/anasayfa2.png" alt="AnaSayfa" name="AnaSayfa" width="100" height="30" border="0" id="AnaSayfa" /></a><br />
    <img src="images/uyegiris.png" alt="Üye Girişi" width="100" height="30" /></p></td>
    <td><form id="form1" name="form1" method="post" action="giris.php">
      <p>Email: 
        <input name="email" type="text" id="email" size="40" />
      </p>
      <p>Parola: 
        <input name="password" type="password" id="password" size="40" />
      </p>
      <p>
        <input type="submit" name="Submit" value="Giriş" />
      </p>
    </form>    </td>
    <td align="left" valign="top">Lütfen üye girişini kullanırken email adresinizi yazınız. </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="menu">Daha önce üye olduysanız, giriş yapıp istediğiniz hediyeleri düzenleyebilirsiniz. Böylece arkadaşlarınız, sizin şimdi ne istediğinizi bileceklerdir. Her üye girişi yaptığınızda ve arkadaşınıza tavsiye ettiğinizde puanınız artmaktadır. Bu puanlar daha sonra size ilginç süprizler yaratabilir. ;) </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><h2>Parola Hatırlatıcı </h2></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form id="form2" name="form2" method="post" action="">
      <p>Email: 
        <input name="mail_hat" type="text" id="mail_hat" size="40" />
      </p>
      <p>
        <input type="submit" name="Submit2" value="Hatırlat" />
      </p>
    </form>
    </td>
    <td class="menu">Eğer parolanızı unuttuysanız, sistem size parolanızı hatırlatan bir mail gönderecektir. </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	<?php
	if($_POST['mail_hat']!="")
	{
		$email=$_POST['mail_hat'];
		include("veritabani.inc.php");
		$sorgu="SELECT email, password FROM user WHERE email='$email'";
		$sonuc=mysql_query($sorgu,$veri_yolu);
		$row=mysql_fetch_array($sonuc);
		if($row['email']!="")
		{
			include("mailfunc.php");
			hatirlat_mail($row['email'], $row['password']);
			echo "Hatırlatma maili gönderildi...";
		}
		else
		{
			echo "Bu yazdığınız mail malesef kayıtlı değil. Ana sayfadan ücretsiz üye olabilirsiniz.";
		}
		mysql_close($veri_yolu);
	}
	
	
	
	?>
	
	
	</td>
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
