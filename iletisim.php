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

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/uyegiris.png','images/anasayfa.png')" >
<table width="80%" border="0" align="center">
  <tr>
    <td width="120"><h1 class="title">&nbsp; </h1></td>
   <td width="433"><img src="images/ana.png" alt="BanaHediyeAl" /></td>
    <td width="213">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><h2>İletişim</h2></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom"><table border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><a href="index.php" target="_top" onclick="MM_nbGroup('down','group1','anasayfa','',1)" onmouseover="MM_nbGroup('over','anasayfa','images/anasayfa.png','',1)" onmouseout="MM_nbGroup('out')"><img src="images/anasayfa2.png" alt="" name="anasayfa" width="100" height="30" border="0" id="anasayfa" onload="" /></a></td>
      </tr>
      <tr>
        <td><a href="uyegiris.php" target="_top" onclick="MM_nbGroup('down','group1','uyegirisi','',1)" onmouseover="MM_nbGroup('over','uyegirisi','images/uyegiris.png','',1)" onmouseout="MM_nbGroup('out')"><img src="images/uyegiris2.png" alt="" name="uyegirisi" width="100" height="30" border="0" id="uyegirisi" onload="" /></a></td>
      </tr>
      <tr>
        <td><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','iletisim','',1)" onmouseover="MM_nbGroup('over','iletisim','','',1)" onmouseout="MM_nbGroup('out')"><img src="images/iletisim.png" alt="" name="iletisim" width="100" height="30" border="0" id="iletisim" onload="" /></a></td>
      </tr>
    </table>
    </td>
    <td><form id="form1" name="form1" method="post" action="">
      <p>İsim: 
        <input name="isim" type="text" id="isim" size="40" />
      </p>
      <p>Email: 
        <input name="email" type="text" id="email" size="40" />
      </p>
      <p>Mesajınız:<br />
   
        <textarea name="mesaj" cols="60" rows="8" id="mesaj"></textarea>
      </p>
      <p>
        <input type="submit" name="Submit" value="Gönder" />
      </p>
    </form>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;
	<?php
	if($_POST['email']!="" and $_POST['mesaj']!="")
	{
		include("mailfunc.php");
		iletisim_mail($_POST['isim'], $_POST['email'], $_POST['mesaj']);
		echo "Mesajınız Gönderildi. Teşekkür ederiz.";
	
	}
	
	?>
	
	</td>
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
