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
$out_string = str_replace("�","�",$out_string);
$out_string = str_replace("d","D",$out_string);
$out_string = str_replace("e","E",$out_string);
$out_string = str_replace("f","F",$out_string);
$out_string = str_replace("g","G",$out_string);
$out_string = str_replace("�","�",$out_string);
$out_string = str_replace("h","H",$out_string);
$out_string = str_replace("�","I",$out_string);
$out_string = str_replace("i","�",$out_string);
$out_string = str_replace("j","J",$out_string);
$out_string = str_replace("k","K",$out_string);
$out_string = str_replace("l","L",$out_string);
$out_string = str_replace("m","M",$out_string);
$out_string = str_replace("n","N",$out_string);
$out_string = str_replace("o","O",$out_string);
$out_string = str_replace("�","�",$out_string);
$out_string = str_replace("p","P",$out_string);
$out_string = str_replace("r","R",$out_string);
$out_string = str_replace("s","S",$out_string);
$out_string = str_replace("�","�",$out_string);
$out_string = str_replace("t","T",$out_string);
$out_string = str_replace("u","U",$out_string);
$out_string = str_replace("�","�",$out_string);
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
        case "�ubat": $parca[1]=1; break;
        case "Mart": $parca[1]=2; break;
        case "Nisan": $parca[1]=3; break;
        case "May�s": $parca[1]=4; break;
        case "Haziran": $parca[1]=5; break;
        case "Temmuz": $parca[1]=6; break;
        case "A�ustos": $parca[1]=7; break;
        case "Eyl�l": $parca[1]=8; break;
        case "Ekim": $parca[1]=9; break;
        case "Kas�m": $parca[1]=10; break;
        case "Aral�k": $parca[1]=11; break;
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
		case "2": $ay="�ubat"; break;
		case "3": $ay="Mart"; break;
		case "4": $ay="Nisan"; break;
		case "5": $ay="May�s"; break;
		case "6": $ay="Haziran"; break;
		case "7": $ay="Temmuz"; break;
		case "8": $ay="A�ustos"; break;
		case "9": $ay="Eyl�l"; break;
		case "10": $ay="Ekim"; break;
		case "11": $ay="Kas�m"; break;
		case "12": $ay="Aral�k"; break;
		default: $ay;
	}
	return $ay;
}


?>