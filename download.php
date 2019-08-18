<?php
header("Access-Control-Allow-Origin: *");

require_once("mconnect.php");
$sql="SELECT max(`visitor_id`) FROM `visitor`";
$result=$db->query($sql);
if(!$result){
	exit("error");
}
$array=$result->fetch_array();
$save=$array['max(`visitor_id`)'];
$save_name=$save.'.png';
$filepath=$save_name;
//echo "$filepath";
//echo "filesize($filepath)";
header("Content-type: application/octet-stream");
header("Accept-Ranges: bytes");
header("Accept-Length: ".filesize($filepath));
header("Content-disposition: attachment; filename=".$save_name);
$handle=fopen($filepath,"r");
while(!feof($handle)){
	echo fread($handle,1024);
}
fclose($handle);
?>