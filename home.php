<?php include('homeserver.php') ?>
<?php include('errors.php')  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Gallaghar</title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>

/* Full-width input fields */
#Email, #password, #rpassword, #firstName, #lastName, #position {
	width: auto;
	padding: 12px 20px;
	margin: 8px 0;
	display: block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn, .loginbtn {
	float: left;
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}

/* Add a hover effect for buttons */
button:hover {
	opacity: 0.8;
}

/* Add padding to container elements */
.container {
	padding: 16px;
}

/* Clear floats */
.clearfix::after {
	content: "";
	clear: both;
	display: table;
}

/* Add padding to containers */
.container {
	padding: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
	span.psw {
		display: block;
		float: none;
	}
	.cancelbtn, .signupbtn {
		width: 100%;
	}
}
</style>

<script>
	$(document).ready(function() {
		//alert("Hi");
		document.getElementById("signup").style.display = "none";
		document.getElementById("login").style.display = "block";
	});

	function selector(m){

		//alert(m);
		if(m=="Login"){
			document.getElementById("signup").style.display = "none";
			document.getElementById("login").style.display = "block";
		}else{
			document.getElementById("signup").style.display = "block";
			document.getElementById("login").style.display = "none";
		}
	}
</script>


<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Gallaghar</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">About us</a></li>
			</ul>
			<form class="navbar-form navbar-left" action="#">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</nav>
	<div class="row">
		<div class="col-sm-8">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="Cake1.jpg" alt="Los Angeles">
					</div>

					<div class="item">
						<img src="Cake3.jpg" alt="Chicago">
					</div>

					<div class="item">
						<img src="Cake2.jpg" alt="New York">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel"
					data-slide="prev"> <span
					class="glyphicon glyphicon-chevron-left"></span> <span
					class="sr-only">Previous</span>
				</a> <a class="right carousel-control" href="#myCarousel"
					data-slide="next"> <span
					class="glyphicon glyphicon-chevron-right"></span> <span
					class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div id="selector">
				<button class="btn btn-default" value = "Login" onclick = "selector(this.value);">Login</button>
				&nbsp;
				<button class="btn btn-default" value = "signup" onClick = "selector(this.value)">Sign up</button>
			</div>

			<div id="login">
				<form action="#" style="border: 1px solid #ccc" method = "post">

					<div class="container">
						<label><b>Username</b></label> <input type="text"
							placeholder="Enter Username" id="Email" name="username" required>
						<label><b>Password</b></label> <input type="password"
							id="password" placeholder="Enter Password" name="password1" required>
						<input type="checkbox" checked="checked"> Remember me
					</div>

					<div class="clearfix" style="background-color: #f1f1f1">
						<a href="#">Forgot password?</a> <br />
						<button type="submit" class="loginbtn" name = "login1" href = "welcome.html">Login</button>
						<button type="button" class="cancelbtn">Cancel</button>

					</div>
				</form>
			</div>

			<div id="signup">

				<form action="#" style="border: 1px solid #ccc" method = "post">
					<div class="container">
						<label><b>First Name</b></label> <input type="text" id="firstName"
							placeholder="Enter First Name" name="firstName" required>

						<label><b>Last Name</b></label> <input type="text" id="lastName"
							placeholder="Enter Last Name" name="lastName" required>

						<label><b>Email</b></label> <input type="text" id="Email"
							placeholder="Enter Email" name="email" required>

						<label><b>Position</b></label> <input type="text" id="position"
							placeholder="Enter Position" name="position" required>

							<label><b>Username</b></label> <input type="text" id="position"
								placeholder="Enter Username" name="username" required>

							<label><b>Password</b></label>
						<input type="password" id="password" placeholder="Enter Password"
							name="password_2" required> <label><b>Repeat
								Password</b></label> <input type="password" id="rpassword"
							placeholder="Repeat Password" name="password_1" required>
						<input type="checkbox" checked="checked"> Remember me
						<p>
							By creating an account you agree to our <a href="#">Terms &
								Privacy</a>.
						</p>

						<div class="clearfix">
							<button type="button" class="cancelbtn">Cancel</button>
							<button type="submit" class="signupbtn" name = "signup">Sign Up</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>
