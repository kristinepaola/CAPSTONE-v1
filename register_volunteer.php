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

<body>

<div class="container">
	<div class="row">
		<h1>CREATE YOUR ACCOUNT</h1>
	</div>
	<div class="col-sm-6">
		
		<div class="row">
			First Name
		</div>
		<div class="row">
			<input type="text" class="form-control" name="fname" id="volfname" required>
		</div>
		<div class="row">
			Last Name
		</div>
		<div class="row">
			<input type="text" class="form-control" name="lname" id="vollname"required>
		</div>
		<div class="row">
			Email Address
		</div>
		<div class="row">
			<input type="email" class="form-control" name="emailadd" id="emailadd">
		</div>
		<div class="row">
			Password
		</div>
		<div class="row">
			<input type="password" class="form-control" name="password" id="volpassword">
		<div class="row">
			Confirm Password
		</div>
		<div class="row">
			<input type="password" class="form-control" name="confirmpassword" id="volconfirmpassword">
		</div>
		<div class="row">
			Country
		</div>
		<div class="row">
			<input type="text" class="form-control" name="country" id="country">
		</div>
		<div class="row">
			City
		</div>
		<div class="row">
			<input type="text" class="form-control" name="city" id="city">
		</div>
	</div>
	<div class="col-sm-6">
		<input type="submit" class="form-control" name="submit">
	</div>
</div>
</body>

</html>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("volpassword").value;
        var confirmPassword = document.getElementById("volconfirmpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>