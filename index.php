<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Daftar</title>
</head>
<style>
	body{
		margin:0;
		padding: 0;
		font-family: sans-serif;
	}
	*{
		box-sizing: border-box;
		outline: none!important;
	}
	.login-page{
		background-image: url('bglogin.jpg');
		background-size: cover;
		height: 100vh; 
		position: relative;
	}
	.login-page:after{
		content: '';
		position: absolute;
		left: 0px;
		top: 0px;
		height: 100%;
		width: 100%;
		background-color: rgba(0,0,0,.5);
		z-index: 1;
	}
	.login-page .box{
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%,-50%);
		display: flex;
		flex-direction: column;
		width: 300px;
		z-index: 2;
	}
	.login-page .box .form-head h2{
		text-align: center;
		margin: 10px 0px 20px;
		color: #ffffff
	}
	.login-page .box .form-body{
		display: flex;
		flex-direction: column;
	}
	.login-page .box .form-body input{
		height: 40px;
		margin-bottom: 20px;
		border: 1px solid #ffffff;
		width: 100%;
		background-color: transparent;
		border-radius:20px; 
		text-align: center;
		color: #ffffff;
		transition: box-shadow .5s ease;
	}
	.login-page .box .form-body input:focus{
		box-shadow: 0px 0px 10px black;
	}
	.login-page .box .form-body input::placeholder{
		color: #ffffff;
	}
	.login-page .box .form-footer {
		text-align: center;
	}
	.login-page .box .form-footer button{
		height: 40px;
		border-radius: 20px;
		padding: 0px 50px;
		color: #ffffff;
		background-color: red;
		border: none;
		cursor: pointer;
		transition: box-shadow .5s ease;
	}
	.login-page .box .form-footer button:hover{
		box-shadow: 0px 0px 10px black;
	}
</style>
<body>
	<section class="login-page">
		<form action="submitdaftar.php" method="POST">
			<div class="box">
				<div class="form-head">
					<h2>Daftar</h2>
				</div>
				<div class="form-body">
					<input type="text" name="username" placeholder="Username" >
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password1" placeholder="Password" >
					<input type="password" name="password2" placeholder="Ulangi Password" >
				</div>
				<div class="form-footer">
					<a href="login.php" id="login" style="color: white; font-size: 14px;">Sudah punya akun?</a><br><br>
					<button type="submit" name="submit">Daftar</button>
				</div>

			</div>
		</form>
</section>
</body>
</html>