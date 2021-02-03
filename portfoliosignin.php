<?php
// Connection to Database
	if(isset($_POST['email'])&&isset($_POST['password']))
	{
          include 'config/db.php';
        
        // Taking data into variables
		$email=$_POST['email'];
        $pass=$_POST['password'];
        
		// Checking whether data already exist or not
		
		if($email=="admin@gmail.com"&&$pass=="admin1")
		{
			session_start();
			$_SESSION['login_status']=true;
			$_SESSION['email'] = $email;
		    $_SESSION['password']=$pass;
			header('location:home.php');
		}
		else
		{
		$ValidEmail="SELECT * FROM User WHERE Email='$email'";
		$result=mysqli_query($check,$ValidEmail);
		$passans=$result->fetch_array(MYSQLI_ASSOC);
			if($result->num_rows==0)
			{
				echo '<script>alert("Please Sign up First")</script>';
			}else
				{ 
						// Password Decryption
					if(password_verify($pass,$passans['password']))
					{
							echo '<script>alert("You are successfully Logged in")</script>';
							
							// Session
							session_start();
							$_SESSION['login_status']=true;
							$_SESSION['email'] = $email;
							header('location:UserPortfolio.php');
					}else{
						$wrong="Wrong Password";
					}
			   }
		}	   

	}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-wnnnnidth, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Elegant Account Login Form with Avatar Icon</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- CSS -->
<style>
body {
	color: #999;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
}
.form-control {
	box-shadow: none;
	border-color: #ddd;
}
.form-control:focus {
	border-color: #4aba70; 
}
.login-form {
	width: 350px;
	margin: 0 auto;
	padding: 30px 0;
}
.login-form form {
	color: #434343;
	border-radius: 1px;
	margin-bottom: 15px;
	background: #fff;
	border: 1px solid #f3f3f3;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.login-form h4 {
	text-align: center;
	font-size: 22px;
	margin-bottom: 20px;
}
.login-form .avatar {
	color: #fff;
	margin: 0 auto 30px;
	text-align: center;
	width: 100px;
	height: 100px;
	border-radius: 50%;
	z-index: 9;
	background: #4aba70;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar i {
	font-size: 62px;
}
.login-form .form-group {
	margin-bottom: 20px;
}
.login-form .form-control, .login-form .btn {
	min-height: 40px;
	border-radius: 2px; 
	transition: all 0.5s;
}
.login-form .close {
	position: absolute;
	top: 15px;
	right: 15px;
}
.login-form .btn, .login-form .btn:active {
	background: #4aba70 !important;
	border: none;
	line-height: normal;
}
.login-form .btn:hover, .login-form .btn:focus {
	background: #42ae68 !important;
}
.login-form .checkbox-inline {
	float: left;
}
.login-form input[type="checkbox"] {
	position: relative;
	top: 2px;
}
.login-form .forgot-link {
	float: right;
}
.login-form .small {
	font-size: 13px;
}
.login-form a {
	color: #4aba70;
}
</style>
</head>
<!-- Content -->
<body>
<div class="login-form">    
    <form action="#" method="post">
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Sign in to Your Account</h4>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="email">
		</div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
			<?php
				if(isset($wrong))
				{
					echo "<p style='color:red;'>".$wrong."</p>";
				}	
			?>
		</div>
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">              
    </form>			
    <div class="text-center small">Don't have an account? <a href="portfoliosignup.php">Sign up</a></div>
</div>
</body>
</html>