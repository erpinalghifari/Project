<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<title>Login Admin Rent-Car </title>
<style>
body {
    background: url('https://media.skoda-auto.com/Pictures/History/_w/SKODA_1100_OHC_1958_jpg.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}


.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

</style>
</head>

<body>

<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form class="form-login" action="http://localhost/RAI/rentcaradmin/login" method="post" name="login_form" id="login_form">
						<?php if (! empty($pesan)) : ?>
						<p id="message">
						<?php echo $pesan; ?>
							</p>
						<?php endif ?>
						
							<p class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" value="<?php echo set_value('username');?>">
									<i class="fa fa-user"></i> </span>
										<?php echo form_error('username', '<p class="field_error">', '</p>');?>
							</p>
							<p class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password"  value="<?php echo set_value('password');?>">
									<i class="fa fa-lock"></i>
									<?php echo form_error('password', '<p class="field_error">', '</p>');?>

							</p>
								<input type="submit" name="submit" id="submit" value="Login" class="btn btn-green pull-right">		
					</form>				
</div>
</body>

</html>