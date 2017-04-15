<!DOCTYPE html>
<html>
<head>
	<title>Sign In | Eazy</title>
	<link rel="icon" type="image/png" href="assets/ez_logo.png"> 	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/jquery.min.js"></script>
 	<script src="bootstrap/js/bootstrap.min.js"></script>
 	<style type="text/css" rel="stylesheet">
		.centered {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
	</style>
	<script>
		$(document).ready(function() {
			$("#showpass").click(function() {
				if($("#password").attr("type") == "text"){
					$("#password").attr("type","password");
				}
				else {
					$("#password").attr("type","text");
				}
			})
		});
	</script>
</head>
<body>
	<form method="post" action="" class="centered">
		<div class="row form-group">
			<div class="col-md-12">
				<a href="index.php"><img src="assets/ez_logo.png" style="width: 10%; height: 10%;"></a>&nbsp&nbsp<a href="index.php"><label style="font-size: 25px; color: black;">Eazy</label></a>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-12 input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" class="form-control input-lg" name="username" placeholder="Username">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-12 input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password">
				 <div class="input-group-btn">
				    <button class="btn btn-default btn-lg" id="showpass" type="button">
				        <i class="glyphicon glyphicon-eye-open"></i>
				    </button>
				 </div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-12 input-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="signin">Sign In</button>
			</div>
		</div>
		<div class="row">
	</form>
</body>
</html>