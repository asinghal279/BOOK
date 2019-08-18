
<!DOCTYPE html>
<html>
<head>
	<title>Book Sample</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="turn.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="icon" href="./../../images/fevicon.png">
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
	</style>
</head>
<body>
    <header>
    <a href="http://mathsirindia.com/"><img class="logo" src="https://lh3.googleusercontent.com/-uwGUirESb6Y/XERb6yrQdoI/AAAAAAAAJCM/0Jm-qdWFdekgUT-1JE6BpnawXl_Rjiu2QCLcBGAs/h120/MSI-logo-placeholder.png" alt="MSI Logo" title="Logo"></a>
    </header>
    	<div class="sign_up" id="sign_up">
			<div class="inner_sign_up">
				<form id="f2" action="./login.php" name="Form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
					<input class="entry n" type="text" name="name" id="name" placeholder="Name"/><br>	
					<input class="entry e" type="email" name="email" id="email" placeholder="E-mail"/><br>
					<input class="entry p" type="text" name="phno" id="phno" placeholder="Phone No."/><br>
				<input class="signup_button" type="submit" id="signup_button" name="signin">
				</form>	
			</div>
		</div>
        
  <script type="text/javascript">

  		function validateForm()
    {
        var a=document.forms["Form"]["name"].value;
        var b=document.forms["Form"]["email"].value;
        var c=document.forms["Form"]["phno"].value;
        if (a==null || a=="",b==null || b=="",c==null || c=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
    }

		$('#f2').on('signin',function(event){
				    event.preventDefault();
				    $('#back').fadeIn();
					$('#sign_up').fadeOut({queue: false, duration: 'slow'});
					$('#sign_up').animate({ 'left': "-700px" }, 'slow');
				    var name=$('name').val();
				    var email=$('email').val();
				    var phno=$('phno').val();
				    var s=$(".signup_button").val();
				    $(".signup_button").prop("disabled",true);
				    $.ajax({
                        type: "POST",
                        url: 'login.php',
                        data: {name:name,
                        		email:email,
                        		phno:phno,
                        		},
                        		dataType:'json',
                        success: function(){
                        	
							}
						});
				});

           </script>
</body>
</html>

