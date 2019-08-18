<?php
$server='localhost';
$username='root';
$password='';
$datb='book2';

$db= mysqli_connect($server,$username,$password,$datb);
if($db){
    #echo 'okay';
}
else{
    echo'error';
}
?>