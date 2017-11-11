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
	.advocacies{
		padding-left: 90px;
		padding-top: 25px;
	}
	.validation{
		background-color:#ff471a;
		height: 35px;
		margin: 45px 25px;
		padding: 5px;
	}
</style>
</head>

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
<div class="col-sm-6  advocacies">
	<div class="row">
		<h3>Adovacies</h3>
	</div>
	<div class="row">
		<input type="checkbox" name="advocacies" value="animals">Animals<br>
		<input type="checkbox" name="advocacies" value="arts">Arts<br>
		<input type="checkbox" name="advocacies" value="children">Children<br>
		<input type="checkbox" name="advocacies" value="education">Education<br>
		<input type="checkbox" name="advocacies" value="environment">Environment<br>
		<input type="checkbox" name="advocacies" value="faithbased">Faith-Based<br>
		<input type="checkbox" name="advocacies" value="healthcare">Health Care<br>
		<input type="checkbox" name="advocacies" value="homeless">Homeless<br>
		<input type="checkbox" name="advocacies" value="hunger">Hunger<br>
		<input type="checkbox" name="advocacies" value="lgbt">LGBT<br>
		<input type="checkbox" name="advocacies" value="peopledisabilities">People with Disabilities<br>
		<input type="checkbox" name="advocacies" value="riskreducation">Risk Reduction<br>
		<input type="checkbox" name="advocacies" value="seniorcitizens">Senior Citizens<br>
		<input type="checkbox" name="advocacies" value="women">Women<br>
		<input type="checkbox" name="advocacies" value="youth">Youth<br>
	</div>
	<div class="row">
		<h3 class="text-center validation">VALIDATE YOUR ORGANIZATION</h3>
	</div>
	<div class="row">
		Select image to upload:
	</div>
	<div class="row">
    <input type="file" name="fileToUpload" id="proofofvalidity">
	</div>
	<div class="row">
    <input type="submit" value="Upload File" name="submit" class="btn btn-default">
	</div>
	<div class="row">
		<input type="submit" value="Sign Up" class="btn btn-success">
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
