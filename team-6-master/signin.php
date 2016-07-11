<html lang="en">
<head>
    <title>Rang De</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
        <script src="css/log.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
		var ck_name = /^[A-Za-z0-9]{3,20}$/;
		var ck_password =  /^[A-Za-z0-9!@#$%^&*()_=+`~,.<>'";:\|]{4,20}$/;
		function validate(form){
			var name = form.fid.value;	
			var password = form.fpwd.value;
			var errors = [];
			if (!ck_name.test(name)) {
				errors[errors.length] = "Username can only be alphanumeric with minimum of 3 and maximum of 20 characters.";
			}
			if (!ck_password.test(password)) {
				errors[errors.length] = "Password must contain a minimum length of 4 and a maximum of 20 characters.";
			}
			if (errors.length > 0) {
				reportErrors(errors);
				return false;
			}			
			return true;
		}
		function reportErrors(errors){
			var msg = "Please Enter Valide Data...\n";
			for (var i = 0; i<errors.length; i++) {
				var numError = i + 1;
				msg += "\n" + numError + ". " + errors[i];
			}
			alert(msg);
		}	
	</script>
	<style>
	html,body{
	  font-family:'Varela Round';
          background-image: url("4.jpg");
	}  
    </style>
</head>
<body>
<?php if(!isset($_SESSION['user_id'])); ?>
    <div class="text-center" style="padding:50px 0">
	<div class="logo">User Login</div>
	<center><img src="logo.png"></center><br>
	<div class="login-form-1">
            <form id="login-form" class="text-left" method="post" action="login_submit.php" onsubmit="return validate(this)" name="form" >
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">E-mail</label>
						<input type="text" class="form-control" id="lg_email" placeholder="Username" required id = "fid" name = "fid" >
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" required id = "fpwd" name = "fpwd"  placeholder="Password">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
		</form>
	</div>
</div>
</body>
</html>
