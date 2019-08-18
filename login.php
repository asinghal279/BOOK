<?php
header("Access-Control-Allow-Origin: *");

require_once("mconnect.php");

if(isset($_POST['signin']))
{
	$_POST['name']=addslashes($_POST['name']);
	$_POST['email']=addslashes($_POST['email']);
	$_POST['phno']=addslashes($_POST['phno']);

	$sql = "INSERT INTO `visitor` SET `email`='{$_POST['email']}',`name`='{$_POST['name']}',`phno`='{$_POST['phno']}'";
	$result = $db->query($sql);
	if($db->error)
	{
		exit("SQL error");
	}
	else{	
		#echo'success';
	}	
}
$name = addslashes($_POST['name']); 
$sql="SELECT max(`visitor_id`) FROM `visitor`";
$result=$db->query($sql);
if(!$result){
	exit("error");
}
$array=$result->fetch_array();
$save=$array['max(`visitor_id`)'];
$save_name=$save.'.png';
$image = imagecreatefrompng("./certificate.png");
$width = imagesx($image);
$height = imagesy($image);
$black = imagecolorallocate($image, 0, 0, 0);
putenv('GDFONTPATH=' . realpath('.'));
$font = "GilliganShutter.ttf";
imagettftext($image,265,0,1500,2052,$black,$font,$name);
imagepng($image,"$save_name");

imagedestroy($image);
 ?>

 
 <!DOCTYPE html>
<html>
<head>
	<title>Book Sample</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="turn.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="icon" href="./../../images/fevicon.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<style type="text/css">
		*{
			margin: 0px;
			//padding:0px;
		}
		header{
            background: linear-gradient(#2E7267,#004D40);
            position: relative;
            width: 100%;
            height: 50px;
        }
        .logo{
            position: absolute;
            left:50%;
            margin: 0 -108px;
            height: 45px;
            width: 135px;
        }
		body{
			background: #004D40;
		}
		#back{
			//display: none;
			width:968px;
		    height: 625px;
			margin: 0 auto;
			position: absolute;

            }
       

		#back .turn-page{
			background-color: #ddd;
			background-size: 100% 100%;
		}
	
		.main{
		
			background: url("test2.PNG");
			margin: 0 auto;
			position: relative;
			width:484px;height:625px;
			background-size: cover;
		}
		.trans{
			background: -webkit-linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9));
			margin: 0 auto;
			position: relative;
			width:484px;height:625px;
			background-size: cover;
			z-index: 3;
		}
		textarea{
			text-align: center;
		}
		
		.fill1
		{   
			position: absolute;
			top:167px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 12px;
		}
		.fill2
		{   
			position: absolute;
			top:186px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 11px;
		}
		.fill3
		{   
			position: absolute;
			top:204px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 11px;
		}
		body.hide-overflow {
    				overflow: hidden;
		vc}

		.fill4
		{   
			position: absolute;
			top:222px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 12px;
		}
		.fill5
		{   
			position: absolute;
			top:240px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill6
		{   
			position: absolute;
			top:261px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 11px;
		}
		.fill7
		{   
			position: absolute;
			top:279px;
			left:158px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:85px;
			height: 18px;
			font-size: 9.6px;
		}
		.fill72
		{   
			position: absolute;
			top:279px;
			left:180px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill8
		{   
			position: absolute;
			top:298px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill9
		{   
			position: absolute;
			top:317px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill10
		{   
			position: absolute;
			top:335px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill11
		{   
			position: absolute;
			top:354px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill12
		{   
			position: absolute;
			top:373px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill13
		{   
			position: absolute;
			top:391px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill14
		{   
			position: absolute;
			top:410px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill15
		{   
			position: absolute;
			top:430px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill16
		{   
			position: absolute;
			top:449px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill17
		{   
			position: absolute;
			top:468px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 14px;
		}
		.fill18
		{   
			position: absolute;
			top:488px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 14px;
		}
		.fill19
		{   
			position: absolute;
			top:507px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 12px;
		}
		.fill20
		{   
			position: absolute;
			top:525px;
			left:157px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		
		.fill21
		{   
			position: absolute;
			top:167px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 12px;
		}
		.fill22
		{   
			position: absolute;
			top:186px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 11px;
		}
		.fill23
		{   
			position: absolute;
			top:204px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 11px;
		}
		

		.fill24
		{   
			position: absolute;
			top:222px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 12px;
		}
		.fill25
		{   
			position: absolute;
			top:240px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill26
		{   
			position: absolute;
			top:261px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 11px;
		}
		.fill27
		{   
			position: absolute;
			top:279px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill28
		{   
			position: absolute;
			top:298px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill29
		{   
			position: absolute;
			top:317px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill30
		{   
			position: absolute;
			top:335px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill31
		{   
			position: absolute;
			top:354px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill32
		{   
			position: absolute;
			top:373px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill33
		{   
			position: absolute;
			top:391px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill34
		{   
			position: absolute;
			top:410px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill35
		{   
			position: absolute;
			top:430px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill36
		{   
			position: absolute;
			top:449px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.fill37
		{   
			position: absolute;
			top:468px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 14px;
		}
		.fill38
		{   
			position: absolute;
			top:488px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 14px;
		}
		.fill39
		{   
			position: absolute;
			top:507px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 12px;
		}
		.fill40
		{   
			position: absolute;
			top:525px;
			left:343px;
			outline: none;
			resize: none;
			overflow: hidden;
			width:79px;
			height: 13px;
		}
		.sub{
			position: absolute;
			top:568px;
			border-radius:10px;
			border-style:none;
			background:orange;
			color:white;
			left:165px;
			width:60px;
			height:20px;
			font-size: 15px;
		    cursor:pointer;
			transition:0.5s;
			outline:none;
		}
		.sub:hover{
		    background:#E65100;
		}
		/*.sub:focus{
			background:#B71C1C;
		}*/
		#score
		{
			position: absolute;
			width:35px;
			height: 20px;
			left:390px;
			top:110px;
			background: white;
			font-weight: bolder;
			text-align: center;
			color:#B71C1C ;
		}
		#date
		{
			position: absolute;
			width:50px;
			height: 20px;
			left:71px;
			top:75px;
			font-weight: bolder;
			text-align: center;
			color: brown;
		}
		.res{
			position:relative;
			background-image: url("./rep.png");
			width:484px;height:625px;
			//margin: 0 auto;
			background: cover;
		}
	
		#qn{
			position: absolute;
			top:35%;
			left:32%;
			
			color: #7f356d;
			font-family: 'Roboto';
			font-weight: bolder;
		}
		#fourth{
			background: url("b.png");
			margin: 0 auto;
			position: relative;
			width:484px;height:625px;
			background-size: cover;
		}
		 .sign_up{
	    	
	    	position: absolute;
	    	background-color: rgba(0,0,0,0.7);
	    	height:350px;
	    	width:400px;
	    	top: 50%;
	    	left: 50%;
	    	margin-top: -175px;
	    	margin-left: -200px;
	    }
	    .inner_sign_up{
	  		position: absolute;
	    	height: 350px;
	    	width:300px;
	    	top: 50%;
	    	left: 50%;
	    	margin-top: -175px;
	    	margin-left: -150px;

	    }
	    .entry{	
	    	font-size: 13.7px;
	    	margin-left: 25px;
	    	margin-top: 40px;
	    	height: 28px;
	    	width:250px;
	    }
		.signup_button{
	    	margin-top: 40px;
	    	margin-left: 60px;
	    	background-color: lightyellow;
	    	font-size: 18px;
	    	border-radius: 50px;
	    	height: 40px;
	    	width: 180px;
	    	cursor: pointer; 
	    	border:1px solid black;
	    	outline: none;	
	    }
	    
	    .signup_button:hover{
	        background-color:lightgrey;
	    	color:black;
	    	font-weight: bolder;
	    	transition: 0.15s;
	    	outline: none;	
	    }
	    #time{
	    	position: absolute;
			width:25px;
			height: 15px;
			left:108px;
			top:114px;
			background: white;
			font-weight: bolder;
			text-align: center;
			color:#B71C1C ;
	    }
	    #min{
	    	position: absolute;
			width:20px;
			height: 10px;
			left:179px;
			top:114px;
			background: white;
			font-weight: bolder;
			text-align: center;
			color:#B71C1C ;
	    }
	    #sec{
	    	position: absolute;
			width:20px;
			height: 10px;
			left:225px;
			top:114px;
			background: white;
			font-weight: bolder;
			text-align: center;
			color:#B71C1C ;
	    }
	    #left:hover{
	    	//background-color: black;	
			font-color:black;	    }
	    #leftsmall:hover{
	    	//background-color: black;
	    	font-color:black;
	    }
	    #right:hover{
	    	//background-color: black;
	    	font-color:black;
	    }
	    #rightsmall:hover{
	    	//background-color: black;
	    	font-color:black;
	    }
	    .pop{
	    	display:none;
	    	position: absolute;
	    	width:500px;
	    	height: 300px;
	    	background-color: rgba(0,0,0,0.82);
	    	left:13%;
	    	top:13%;
	    	margin-top: 150px;
	    	margin-left: 250px;
	    }
	    .popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}


.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}


.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}

  .grad{
  	position: relative;
  	background: -webkit-linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
  	z-index: 3;
  	height: 657px;
  	background-size:100%;
	-webkit-background-size:100%
  }
  .dd:hover{
  	background-color: purple;
  	font-color:white;
  }

	</style>
</head>
<body  class="w3-animate-right">

    <header>
    <a href="http://mathsirindia.com/"><img class="logo" src="https://lh3.googleusercontent.com/-uwGUirESb6Y/XERb6yrQdoI/AAAAAAAAJCM/0Jm-qdWFdekgUT-1JE6BpnawXl_Rjiu2QCLcBGAs/h120/MSI-logo-placeholder.png" alt="MSI Logo" title="Logo"></a>
    </header>
    	<div class="pop">
    		<i class="fas fa-times" id="cross" style="cursor: pointer;float:right;font-size: 50px; color: white; margin-right: 5px;"></i>
    		<a href="download.php"><div class="popup"  onmouseover="myFunction()" style="position: relative; left:20%; top:35%; color: white;">
    		<i class="fas fa-download" style=" font-size: 70px; cursor:pointer;"></i>
    		<span class="popuptext" id="myPopup">Download Certificate</span>
				</div></a>
			<a href="./mailer/index.php"><div class="popup" onmouseover="myFunction2()" style="position: relative; left:50%; top:36%; color: white;">
    		<i class="fas fa-envelope" style=" font-size: 70px; cursor:pointer;"></i>
    		<span class="popuptext" id="myPopup2">Mail Certificate</span>
				</div></a>	
    	</div>
    	<div class="grad"></div>
    	<i class="fas fa-chevron-circle-left" id="left" style="position:absolute; margin-top: 300px; margin-left: 100px; color: #d5d5d5; font-size: 70px; cursor:pointer;display: none;"></i>
    	<i class="fas fa-chevron-circle-left" id="leftsmall" style="position:absolute; margin-top: 300px; margin-left: 20px; color: #d5d5d5; font-size: 70px; cursor:pointer;"></i>
    	<i class="fas fa-chevron-circle-right" id="right" style="position:absolute; margin-top: 300px; margin-left: 1183px; color: #d5d5d5; font-size: 70px; cursor:pointer;display: none;"></i>
    	<i class="fas fa-chevron-circle-right" id="rightsmall" style="position:absolute; margin-top: 300px; margin-left: 680px; color: #d5d5d5; font-size: 70px; cursor:pointer;"></i>
        <div id="back">
      	<div><img src="./maths.png"></div>
        <div class="main">
        <div class="trans">
        	<div id="on" style="position: relative;top:40%;left:45%;cursor: pointer; font-size: 100px; color:white;"><i class="fas fa-play" ></i></div>
        	<div style="position: relative;top:45%;left:30%;font-size: 30px;color: white;"><p>Click Start The Test</p></div>
        </div>
        <div id="countdown" style="position: relative;
			width:70px;
			height: 10px;
			left:230px;
			top:80px;
			font-size: 12px;
			background: white;
			font-weight: bolder;
			text-align: center;
			color:#B71C1C ;"></div>
		<div id="score"></div>
		<div id="time"></div>
		<div id="min"></div>
		<div id="sec"></div>	
		<div id="date"></div>
		<form id="f1" action="./process.php" method="post" enctype="multipart/form-data">
		<textarea class="fill1" name="fill1" ></textarea>
		<textarea class="fill2" name="fill2" ></textarea>
		<textarea class="fill3" name="fill3" ></textarea>
		<textarea class="fill4" name="fill4" ></textarea>
		<textarea class="fill5" name="fill5" ></textarea>
		<textarea class="fill6" name="fill6" ></textarea>
		<select class="fill7">
			<option value="" disabled selected hidden> Select Answer</option>
			<option value="a"> ̅𝑉𝐶𝐷𝑋𝑋𝑋𝑉𝐼𝐼</option>
			<option value="b"> ̅𝑉𝐷𝑋𝑋𝑋𝑉𝐼𝐼</option>
			<option value="c"> ̅𝑉𝑋𝑋𝑋𝑉𝐼𝐼</option>
			<option value="d"> ̅𝑉𝐶𝐷𝑋𝑋𝑉𝐼𝐼</option>
		</select>
		<textarea class="fill8" name="fill8" ></textarea>
		<textarea class="fill9" name="fill9" ></textarea>
		<textarea class="fill10" name="fill10" ></textarea>
		<textarea class="fill11" name="fill11" ></textarea>
		<textarea class="fill12" name="fill12" ></textarea>
		<textarea class="fill13" name="fill13" ></textarea>
		<textarea class="fill14" name="fill14" ></textarea>
		<textarea class="fill15" name="fill15" ></textarea>
		<textarea class="fill16" name="fill16" ></textarea>
		<textarea class="fill17" name="fill17" ></textarea>
		<textarea class="fill18" name="fill18" ></textarea>
		<textarea class="fill19" name="fill19" ></textarea>
		<textarea class="fill20" name="fill20" ></textarea>
		<textarea class="fill21" name="fill21"  ></textarea>
		<textarea class="fill22" name="fill22"  style="left:343px;" ></textarea>
		<textarea class="fill23" name="fill23"  style="left:343px;"></textarea>
		<textarea class="fill24" name="fill24"  style="left:343px;"></textarea>
		<textarea class="fill25" name="fill25"  style="left:343px;"></textarea>
		<textarea class="fill26" name="fill26"  style="left:343px;"></textarea>
		<textarea class="fill27" name="fill27"  style="left:343px;"></textarea>
		<textarea class="fill28" name="fill28"  style="left:343px;"></textarea>
		<textarea class="fill29" name="fill29"  style="left:343px;"></textarea>
		<textarea class="fill30" name="fill30"  style="left:343px;"></textarea>
		<textarea class="fill31" name="fill31"  style="left:343px;"></textarea>
		<textarea class="fill32" name="fill32"  style="left:343px;"></textarea>
		<textarea class="fill33" name="fill33"  style="left:343px;"></textarea>
		<textarea class="fill34" name="fill34"  style="left:343px;"></textarea>
		<textarea class="fill35" name="fill35"  style="left:343px;"></textarea>
		<textarea class="fill36" name="fill36"  style="left:343px;"></textarea>
		<textarea class="fill37" name="fill37"  style="left:343px;"></textarea>
		<textarea class="fill38" name="fill38"  style="left:343px;"></textarea>
		<textarea class="fill39" name="fill39"  style="left:343px;"></textarea>
		<textarea class="fill40" name="fill40"  style="left:343px;"></textarea>
		<input  class="sub" type="submit" name="submit" value="submit" id="final">
		</form>
		</div>
			<div class="res">
			<div id="qn">
			<div>Questions Attempted : <span id="at"></span></div><br><br>
			<div>Correct Answers 	 : <span id="cr"></span></div><br><br>
			<div>Unattempted	 	 : <span id="ua"></span></div><br><br>
			<div>Wrong Answers       : <span id="wr"></span></div><br><br>
			<div>Total Score         : <span id="tot"></span></div><br><br>
			<div>Precentage          : <span id="pr"></span>%</div><br><br>
			<div>Remark              : <span id="rm"></span></div><br><br>
			<button class="dd" style="margin-left: 10px; cursor: pointer; border-radius: 50px; width: 180px; display: none;" id="download"><i class="fas fa-download" style="font-size: 17px; cursor:pointer;"></i>Download Certificate</button>
			</div>
			</div>
			<div id="fourth"></div>
	</div>
  <script type="text/javascript">
  	
  	var start = new Date();
  				var  o    = start.getTime();  
  	     
             $(document).ready(function(){
            	$("#back").turn({
      			display: 'double',
      			acceleration: true,
      			elevation: 50
      		}) ;
			 $(window).width(function(){
  				var win = $(this); //this = window
				  if (win.width() >= 450)
				   {$("#back").turn('display','double');
					$("#back").css('width','968');
					$("#left").show();
				  $("#right").show();
				  $("#leftsmall").hide();
				  $("#rightsmall").hide();
						}
				
				  else {
				    $("#back").turn('display','single');
				  $("#back").css('width','500');
				  $("#left").hide();
				  $("#right").hide();
				  $("#leftsmall").show();
				  $("#rightsmall").show();
				  }
				});
				$(window).resize(function(){
				var win = $(this); //this = window
				if (win.width() >= 450) {
				 $("#back").turn('display','double');
				$("#back").css('width','968');
				$("#left").show();
				  $("#right").show();
				  $("#leftsmall").hide();
				  $("#rightsmall").hide();
				}
			
				else {
				  $("#back").turn('display','single');
				  $("#back").css('width','500');
				  $("#left").hide();
				  $("#right").hide();
				  $("#leftsmall").show();
				  $("#rightsmall").show();
					}
				});

	      	$(window).bind('keydown',function(e){
	      		if(e.keyCode==37)
	      			$("#back").turn('previous');
	      		else if(e.keyCode==39)
	      			$("#back").turn('next');
	      	});
			$('#left').click(function(){
			$("#back").turn('previous');
			})
			$('#right').click(function(){
			$("#back").turn('next');
			})
			$('#leftsmall').click(function(){
			$("#back").turn('previous');
			})
			$('#rightsmall').click(function(){
			$("#back").turn('next');
			})
			$('#on').click(function(){
				$('.trans').fadeOut();
				var start = new Date();
  				var  o    = start.getTime();  
				var timeleft = 800;
				var downloadTimer = setInterval(function(){
				  document.getElementById("countdown").innerHTML = timeleft;
				  timeleft -= 1;
				  if(timeleft <= 0 || document.getElementById("final").value == "Submitted"){
				    clearInterval(downloadTimer);
				    document.getElementById("countdown").innerHTML = "Finished";
					document.getElementById("final").click();				  }
				}, 1000);
			})
			
				$(".sub").focus(function(){
					$(".sub").css("background","#B71C1C").css("width","80px").css("transform","translate(-15px)");
					$(".sub").val("Submitted");
 					 setTimeout(function(){ $('#back').css('opacity','0.7') }, 2000);
 					 setTimeout(function(){ $('.pop').fadeIn()
 					 						$('.pop').css('z-index','3')
 					 						$('#download').show()}, 2000);
 					 setTimeout(function(){ $('#left').fadeOut() }, 2000);
 					 setTimeout(function(){ $('#right').fadeOut() }, 2000);
				});
				$('#download').click(function(){
					$('#back').css('opacity','0.7');
					$('.pop').fadeIn();
					$('.pop').css('z-index','3');
				})
				$('#cross').click(function(){
					$('#back').css('opacity','1');
					$('.pop').fadeOut();
				})
			
				var n= new Date();
				var y=n.getFullYear();
				var m=n.getMonth()+1;
				var d=n.getDate();
				var k=d + "/" + m + "/" + y;
				$("#date").html(k);
			    $('#f1').on('submit',function(event){
			    	
				    event.preventDefault();
					var fill1=$(".fill1").val();
					var fill2=$(".fill2").val();
					var fill3=$(".fill3").val();
					var fill4=$(".fill4").val();
					var fill5=$(".fill5").val();
					var fill6=$(".fill6").val();
					var fill7=$(".fill7").val();
					var fill8=$(".fill8").val();
					var fill9=$(".fill9").val();
					var fill10=$(".fill10").val();
					var fill11=$(".fill11").val();
					var fill12=$(".fill12").val();
					var fill13=$(".fill13").val();
					var fill14=$(".fill14").val();
					var fill15=$(".fill15").val();
					var fill16=$(".fill16").val();
					var fill17=$(".fill18").val();
					var fill18=$(".fill18").val();
					var fill19=$(".fill19").val();
					var fill20=$(".fill20").val();
					var fill21=$(".fill21").val();
					var fill22=$(".fill22").val();
					var fill23=$(".fill23").val();
					var fill24=$(".fill24").val();
					var fill25=$(".fill25").val();
					var fill26=$(".fill26").val();
					var fill27=$(".fill27").val();
					var fill28=$(".fill28").val();
					var fill29=$(".fill29").val();
					var fill30=$(".fill30").val();
					var fill31=$(".fill31").val();
					var fill32=$(".fill32").val();
					var fill33=$(".fill33").val();
					var fill34=$(".fill34").val();
					var fill35=$(".fill35").val();
					var fill36=$(".fill36").val();
					var fill37=$(".fill37").val();
					var fill38=$(".fill38").val();
					var fill39=$(".fill39").val();
					var fill40=$(".fill40").val();
					var submit=$(".sub").val();
					$(".sub").prop("disabled",true);
					$.ajax({
                        type: "POST",
                        url: 'process.php',
                        data: {fill1: fill1,
                        		fill2: fill2,
                        		fill3: fill3,
                        		fill4: fill4,
                        		fill5: fill5,
                        		fill6: fill6,
                        		fill7: fill7,
                        		fill8: fill8,
                        		fill9: fill9,
                        		fill10: fill10,
                        		fill11: fill11,
                        		fill12: fill12,
                        		fill13: fill13,
                        		fill14: fill14,
                        		fill15: fill15,
                        		fill16: fill16,
                        		fill17: fill17,
                        		fill18: fill18,
                        		fill19: fill19,
                        		fill20: fill20,
                        		fill21: fill21,
                        		fill22: fill22,
                        		fill23: fill23,
                        		fill24: fill24,
                        		fill25: fill25,
                        		fill26: fill26,
                        		fill27: fill27,
                        		fill28: fill28,
                        		fill29: fill29,
                        		fill30: fill30,
                        		fill31: fill31,
                        		fill32: fill32,
                        		fill33: fill33,
                        		fill34: fill34,
                        		fill35: fill35,
                        		fill36: fill36,
                        		fill37: fill37,
                        		fill38: fill38,
                        		fill39: fill39,
                        		fill40: fill40,
                        		submit: submit,
                        		},
                        		dataType:'json',
                        success: function(data){
    						$("#at").html(data.result[0]);
    						$("#cr").html(data.result[1]);
    						$("#wr").html(data.result[2]);
    						$("#tot").html(data.result[3]);
    						$("#pr").html(data.result[4]);
    						$("#rm").html(data.result[5]);
    						$("#ua").html(data.result[6]);
							$("#score").html(data.result[3]);
							
                        }
                       
                    });
		            
		            var end = new Date();
			    var l = end.getTime();			
			    var distance = l-o;
				var seconds = Math.floor((distance % (1000 * 60)) / 1000);
				var min = Math.floor(seconds / 60);
				var sec = Math.floor(seconds % 60);
				document.getElementById("time").innerHTML = seconds;
				document.getElementById("min").innerHTML = min;
				document.getElementById("sec").innerHTML = sec;

				});
			
	});

	function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
	function myFunction2() {
  var popup2 = document.getElementById("myPopup2");
  popup2.classList.toggle("show");
}
		</script>
</body>
</html>



