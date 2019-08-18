<?php
//header("Access-Control-Allow-Origin: *");
$c=0;
$w=0;
$e=0;
//$name = addslashes($_POST['name']);
require_once("mconnect.php");

//$n=$_SESSION['myValue'];
//var_dump($n);


if(isset($_POST['submit']))
{  
	$ass_array = array

	(1=>addslashes($_POST['fill1']),
	2=>addslashes($_POST['fill2']),
	3=>addslashes($_POST['fill3']),
	4=>addslashes($_POST['fill4']),
	5=>addslashes($_POST['fill5']),
	6=>addslashes($_POST['fill6']),
	7=>addslashes($_POST['fill7']),
	8=>addslashes($_POST['fill8']),
	9=>addslashes($_POST['fill9']),
	10=>addslashes($_POST['fill10']),
	11=>addslashes($_POST['fill11']),
	12=>addslashes($_POST['fill12']),
	13=>addslashes($_POST['fill13']),
	14=>addslashes($_POST['fill14']),
	15=>addslashes($_POST['fill15']),
	16=>addslashes($_POST['fill16']),
	17=>addslashes($_POST['fill17']),
	18=>addslashes($_POST['fill18']),
	19=>addslashes($_POST['fill19']),
	20=>addslashes($_POST['fill20']),
	21=>addslashes($_POST['fill21']),
	22=>addslashes($_POST['fill22']),
	23=>addslashes($_POST['fill23']),
	24=>addslashes($_POST['fill24']),
	25=>addslashes($_POST['fill25']),
	26=>addslashes($_POST['fill26']),
	27=>addslashes($_POST['fill27']),
	28=>addslashes($_POST['fill28']),
	29=>addslashes($_POST['fill29']),
	30=>addslashes($_POST['fill30']),
	31=>addslashes($_POST['fill31']),
	32=>addslashes($_POST['fill32']),
	33=>addslashes($_POST['fill33']),
	34=>addslashes($_POST['fill34']),
	35=>addslashes($_POST['fill35']),
	36=>addslashes($_POST['fill36']),
	37=>addslashes($_POST['fill37']),
	38=>addslashes($_POST['fill38']),
	39=>addslashes($_POST['fill39']),
	40=>addslashes($_POST['fill40']),);
	
	foreach($ass_array as $key=>$value)
	{
		$sql="SELECT * FROM `test` where `test_id`='{$key}' AND `Answer`='{$value}'";
	$result=$db->query($sql);
	if($db->error)
	{
		exit("SQL error");
	}
	if($result->num_rows == 1)
	{
		$c=$c+1;
	}
	else if(empty($value))
	{
		$e=$e+1;
	}
	else
	{
		$w=$w+1;
	}
	$result->free();
	}
	
}

$a=40-$e;
$t=(2*$c)-$w-$e;
$r='asas';
if($t==40)
$r='Excellent!Keep it up';
else if($t>=30 and $t<40)
$r='Well Done!Succes is Waiting';
else if($t>=20 and $t<30)
$r='Need some pracitse';
else if($t>=10 and $t<20)
$r='Work Hard';
else if($t>=0 and $t<10)
$r='Unsatisfactory';
else
$r='Very Poor Performance';
$p=($c/20)*100;
$arr_variable = array($a,$c,$w,$t,$p,$r,$e);
$data['result'] = $arr_variable;
$total=$t;
$sql="SELECT max(`visitor_id`) FROM `visitor`";
$result=$db->query($sql);
if(!$result){
	exit("error");
}
$array=$result->fetch_array();
$save=$array['max(`visitor_id`)'];
$save_name=$save.'.png';
$image = imagecreatefrompng("$save_name");
$width = imagesx($image);
$height = imagesy($image);
$max=80;
$st="Present Level Test";
$black = imagecolorallocate($image, 0, 0, 0);
putenv('GDFONTPATH=' . realpath('.'));
// Name the font to be used (note the lack of the .ttf extension)
$font = "C:\wamp64\www\book2\GilliganShutter.ttf";
//$font = imageloadfont('GilliganShutter.ttf');
//imagestring($image, $font, 1000, 1000, 'Hello world!', $black);
//imagettftext($image,265,0,1500,2052,$black,$font,$n);
imagettftext($image,150,0,2820,2630,$black,$font,$total);
imagettftext($image,150,0,3270,2630,$black,$font,$max);
imagettftext($image,80,0,1070,2630,$black,$font,$st);
//header("content-type:image/png");
imagepng($image,"$save_name");
//imagepng($image);
imagedestroy($image);
echo json_encode($data);
$db->close();
?>





