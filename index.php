<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="public/css/style.css">
    <title>Login ADPULSE</title>

	<!--Font family-->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap');
	</style>
  </head>
  	<body>
		<div class="container">
			<div class="welcome">
				<div class="text">
					<span>Welcome back!</span>
					<p>You can sing in to access with your existing account.</p>
				</div>	
			</div>
			<div class="formBox">
				<div class="form">

					<!--Start of form-->
					<form method="POST" id="myForm" onSubmit="handleSubmitForm(event)"> 	
						<span>Sign In</span>
						<div class="username">
							<img src="./public/img/user.png">
							<input id="username" name="username" type="text" placeholder="Username or email" required> 
						</div>
						<div class="password">
							<img src="./public/img/password.png">
							<input id="password" name="password" type="password" placeholder="Password" required>
						</div>
						<button type="submit">Sign In</button>
					</form>
					<!--Finish of form-->

					<!--Start Erro and Success return on login-->
					<?php
						if(isset($_GET['login']) && $_GET['login'] == 'Erro'){
							
					?>
						<div class="erroReturn">
							<span>Invalid username or password.</span>              
						</div>
					<?php } else if(isset($_GET['login']) && $_GET['login'] == 'Success'){
					?>
						<div class="successReturn">
							<span >I'M THE MASTER OF MY DOMAIN!</span>
						</div>
					<?php }
					?>
					<!--Finish Erro and Success return on login-->
				</div>
			</div>
		</div> 
  	</body>
  	<script src="public/js/index.js">
		
	</script>
</html>