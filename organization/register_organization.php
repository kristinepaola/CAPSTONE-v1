<!DOCTYPE html>
<html>
<head>
<title>Registration - Organization</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- bootstrap -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/header/navigation-bar.css">

<style>
	@font-face {
		font-family: roboto-regular;
		src: url(../fonts/roboto/Roboto-Medium.ttf);
		}
</style>
</head>
<?php echo "awefaweffawefaew"; ?>
<body>

<div class="container">
	<div class="row">
		<h1>REGISTER YOUR ORGANIZATION</h1>
	</div>
	<div class="col-sm-6">
		
		<div class="row">
			Non-Profit Organization Name
		</div>
		<div class="row">
			<input type="text" class="form-control" name="orgname" id="orgname">
		</div>
		<div class="row">
			Email Address
		</div>
		<div class="row">
			<input type="email" class="form-control" name="emailadd" id="emailadd">
		</div>
		<div class="row">
			City
		</div>
		<div class="row">
			<input type="text" class="form-control" name="city" id="city">
		</div>
		<div class="row">
			Date Established
		</div>
		<div class="row">
			<input type="date" class="form-control" name="dateest" id="dateest">
		</div>
	</div>
	<div class="col-sm-6">
		
	</div>
</div>
</body>

</html>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>

$(document).ready(function(){
$("#signUpBtn").on("click", function(){
	$("#signUp").modal();
});

$("#logInBtn").on("click", function(){
	$("#logIn").modal();
});
});

</script>