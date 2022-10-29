<?php
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- responsive -->
	<script src="jq.js"></script>
	<title>Fast Food | Login</title>
	<style>
		body{
			margin: 0;padding: 0;
			box-sizing: border-box;
			background-image: url('./img/reg_bg.jpg');
			font-family: 'Century Gothic',serif;
			background-size: cover;
			background-repeat: no-repeat;
			color: white;
		}
		.main{
			width: 30%;height: auto;
			margin: 100px auto;
			box-shadow: 8px 10px 100px 20px white;
			border-radius: 10px;
		}
		form{
			width: 80%;height: auto;
			margin: 10px auto;
			padding-top: 15px;
		}
		label{
			width: 100%;
			height: auto;
			padding: 10px;
			font-size: large;
			font-weight: bold;
			text-align: left;
		}
		input[type="email"],
		input[type="text"],
		input[type="password"]{
			width: 100%;
			height: auto;
			padding: 15px;
			font-size: large;
			outline: none;border: none;
			background: transparent;
			border-bottom:1px solid white ;
			color: white;
		}
		::placeholder{
			color: rgba(255, 255, 255, 0.472);
		}
		input:focus,
		input:active{
			outline: none;border: none;
			border-bottom:2px solid red ;
		}
		.btn_login{
			outline: none;border: none;
			width: 100%;height: auto;
			background-color: red;
			padding: 15px;
			border-radius: 20px;
			font-size: larger;
			font-weight: bolder;
			color: white;
			cursor: pointer;
			transition: 0.6s ease-in-out ;
		}
		.btn_login:active,
		.btn_login:focus,
		.btn_login:hover{
			outline: none;border: none;
			width: 100%;height: auto;
			background-color: white;
			padding: 15px;
			border-radius: 20px;
			font-size: larger;
			font-weight: bolder;
			color: red;
		}
		#cb{
			text-align: end;
		}
	</style>
</head>
<body>
	<div class="main">
		<form method="POST" >
			<label>Your Name</label>
			<br>
			<input type="text" required id="em" autocomplete="off" autofocus placeholder="Name..." name="name">
			<br><br>
			<label>Your Email</label>
			<br>
			<input type="email" required id="em" autocomplete="off" autofocus placeholder="abc@example.com" name="em">
			<br><br>
			<label>Your Password</label>
			<br>
			<input type="password" id="pass" autocomplete="off" required placeholder="password here" name="pass">
			<br><br>
			<span id="cbText">Show Password </span><input type="checkbox"  id="cb">
			<br><br>
			<label>Your Course</label>
			<br>
			<input type="text" id="pass" autocomplete="off" required placeholder="Your Course Here" name="course">
			<br><br>
			<button type="submit" class="btn_login"  name="btn_login">Login</button>
			<br><br>
		</form>
	</div>
	<script>
	$(document).ready(function(){
		$('#cb').change(function(){
		//  alert($(this).is(':checked'));
		if($(this).is(':checked')){
			$('#pass').attr('type', 'text');
			$('#cbText').text("Hide Password");
		}else{
			$('#pass').attr('type', 'password');
			$('#cbText').text("Show Password");
		}
		});
		$(document).on('.btn_login','click',function (){
			var em=$('#em').val();
			var pass=$('#pass').val();
			alert(em+"    "+pass);
		})
	});
	</script>
</body>
</html>