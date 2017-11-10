<!DOCTYPE html>
<html>


<body>
	<nav class="navbar navbar-fixed-top">
	  <div class="container-fluid">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
				<span class="glyphicon glyphicon-menu-hamburger gi-15x"></span>                   
			  </button>
			  <a class="navbar-brand" href="#">AMBOT</a>
			</div>
			<div class="collapse navbar-collapse" id="navigation">
			  <ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Organizations</a></li>
				<li><a href="#">Events</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li>
					<button class="btn btn-nav" id="signUpBtn">
						<span class="glyphicon glyphicon-user"></span> Sign Up
					</button>
				</li>
				<li>
				<button class="btn btn-nav" id="logInBtn">
					<span class="glyphicon glyphicon-log-in"></span> Login
				</button>
				</li>
			  </ul>
			</div>
		</div>
	  </div>
	</nav>
	  
	  <!-- SIGN UP MODAL -->
	  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="signUp" >
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" aria-label="Close" data-dismiss="modal">
							  <span aria-hidden="true">&times;</span>
						</button>
						<h3 class="modal-title">Sign Up Now!</h3>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<button class="btn btn-reg" id="volunteer">
									<h4><a href="#">Register as a Volunteer</a></h4> 
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<button class="btn btn-reg" id="organization">
									<h4><a href="#">Register your Non Profit Organization</a></h4>
								</button>
							</div>
						</div>	
					</div>
					<div class="modal-footer">
						<button class="btn btn-nav" data-dismiss="modal">amen</button>
					</div>
				</div>
			</div>
		</div>
	  <!-- SIGN UP MODAL -->
	  
	  
	  
	  <!-- LOG IN MODAL -->
	<div class="modal fade" tabindex="-1" role="dialog" id="logIn" aria-labelledby="gridSystemModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" aria-label="Close" data-dismiss="modal">
						  <span aria-hidden="true">&times;</span>
						</button>
						<h3 class="modal-title">Log In</h3>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<h4>Email:</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<input type='email' class='form-control' name='emailadd' id='email'>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<h4>Password:</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<input type='password' class='form-control' name='password' id='password'>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<button type="submit" class="btn btn-nav" data-dismiss="modal" id="login">Log In</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<center>Not yet registered?</center>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<center>Sign up <u><a href="#">HERE</a></u></center>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-nav" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	  <!-- LOG IN MODAL -->

</body>
	
</html>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
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
