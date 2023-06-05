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
    <td width="350"><h1 class="title"><img src="images/ana.png" width="350" height="80" /> </h1></td>
   <td align="center" width="300"><a href="index.php"><img src="images/anasayfa2.png" width="100" height="30" border="0" /></a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;
	<?php
	include("veritabani.inc.php");
	$page=$_GET['page'];
	$bas = $page*50 - 50;
	$son = $bas + 50;
	$sorgu="SELECT * FROM hediye";
	$sonuc=mysql_query($sorgu, $veri_yolu);
	$sonuc_sayi=mysql_num_rows($sonuc);
	for($i=0; $i<$sonuc_sayi ; $i++)
	{
		$row=mysql_fetch_array($sonuc);
		if($i>$bas and $i<$son)
		{
			if($row['hediye']!='')
			{
			echo "<br>"; 
			echo ($row['hediye']);
			}
		}
	}	
	
	$sayfa_sayi= ceil ($sonuc_sayi / 50);
	
	mysql_close($veri_yolu); 
	
	
	?>	</td>
    <td>
	  <p>
	    <script type="text/javascript"><!--
google_ad_client = "pub-6875555204127868";
google_ad_width = 160;
google_ad_height = 600;
google_ad_format = "160x600_as";
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
      </script>&nbsp;
	 
        <br />
	    <br />
        <a target="_blank" href="http://www.kitapyurdu.com/default.asp?AID=16915"><img alt="internet kitapçınız kitapyurdu.com'dan binlerce kitaba ulaşabilirsiniz." border=0 src="http://affiliate.kitapyurdu.com/affiliatepic.asp?type=5 " align="left"></a>
	    
	    
    &nbsp;</p>
   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><strong>Sayfa:
	<?php
	for($i=1; $i<=$sayfa_sayi; $i++)
	{
		echo "&nbsp;";
		echo "<a href=\"tumhediyeler.php?page=$i\">$i</a>";
	}
	
	?>
	
	</strong>	</td>
    <td>
	<script type="text/javascript"><!--
google_ad_client = "pub-6875555204127868";
google_ad_width = 200;
google_ad_height = 90;
google_ad_format = "200x90_0ads_al";
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
	&nbsp;
	<script type="text/javascript"><!--
google_ad_client = "pub-6875555204127868";
google_ad_width = 120;
google_ad_height = 60;
google_ad_format = "120x60_as_rimg";
google_cpa_choice = "CAEQ2bafnAIaCEMLwnzKNbf8KLvkl3Q";
//-->
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="comment">
      <h5>Bana Hediye Al 2007 &copy;</h5>
    </div></td>
  </tr>
</table>
</body>
</html>
