<?php
function yonlendirsureli($adres,$zaman = 0) {
        $zaman = $zaman + 1;
        ?>
<script language="javascript">
<!--
var saniye=<?php echo($zaman); ?>;
function zamanlayici(){
saniye-=1;
if(saniye==0){
    window.location="<?php echo($adres); ?>";
}
setTimeout("zamanlayici()",1000);
}
zamanlayici();
-->
</script>
        <?php
        unset($zaman);
}

function BuyukKarakter($in_string){
$out_string = str_replace("a","A", $in_string);
$out_string = str_replace("b","B",$out_string);
$out_string = str_replace("c","C",$out_string);
$out_string = str_replace("ç","Ç",$out_string);
$out_string = str_replace("d","D",$out_string);
$out_string = str_replace("e","E",$out_string);
$out_string = str_replace("f","F",$out_string);
$out_string = str_replace("g","G",$out_string);
$out_string = str_replace("ð","Ð",$out_string);
$out_string = str_replace("h","H",$out_string);
$out_string = str_replace("ý","I",$out_string);
$out_string = str_replace("i","Ý",$out_string);
$out_string = str_replace("j","J",$out_string);
$out_string = str_replace("k","K",$out_string);
$out_string = str_replace("l","L",$out_string);
$out_string = str_replace("m","M",$out_string);
$out_string = str_replace("n","N",$out_string);
$out_string = str_replace("o","O",$out_string);
$out_string = str_replace("ö","Ö",$out_string);
$out_string = str_replace("p","P",$out_string);
$out_string = str_replace("r","R",$out_string);
$out_string = str_replace("s","S",$out_string);
$out_string = str_replace("þ","Þ",$out_string);
$out_string = str_replace("t","T",$out_string);
$out_string = str_replace("u","U",$out_string);
$out_string = str_replace("ü","Ü",$out_string);
$out_string = str_replace("v","V",$out_string);
$out_string = str_replace("y","Y",$out_string);
$out_string = str_replace("z","Z",$out_string);

   return trim($out_string);
}

function gun_ay_dondur($gun)
{
	$parca= explode("-",$gun);
	switch($parca[1])
	{
		case "Ocak": $parca[1]=0; break;
        case "Þubat": $parca[1]=1; break;
        case "Mart": $parca[1]=2; break;
        case "Nisan": $parca[1]=3; break;
        case "Mayýs": $parca[1]=4; break;
        case "Haziran": $parca[1]=5; break;
        case "Temmuz": $parca[1]=6; break;
        case "Aðustos": $parca[1]=7; break;
        case "Eylül": $parca[1]=8; break;
        case "Ekim": $parca[1]=9; break;
        case "Kasým": $parca[1]=10; break;
        case "Aralýk": $parca[1]=11; break;
		default: $parca[1];
	}
	return $parca;
}

function ay_yazi_dondur()
{
	$ay = date("n");
	switch($ay)
	{
		case "1": $ay="Ocak"; break;
		case "2": $ay="Þubat"; break;
		case "3": $ay="Mart"; break;
		case "4": $ay="Nisan"; break;
		case "5": $ay="Mayýs"; break;
		case "6": $ay="Haziran"; break;
		case "7": $ay="Temmuz"; break;
		case "8": $ay="Aðustos"; break;
		case "9": $ay="Eylül"; break;
		case "10": $ay="Ekim"; break;
		case "11": $ay="Kasým"; break;
		case "12": $ay="Aralýk"; break;
		default: $ay;
	}
	return $ay;
}


?>