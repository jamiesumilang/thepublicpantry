<!DOCTYPE html>
<html>

	<head>
		<title> thepublicpantry | Log In </title>
	</head> 

	<style type="text/css">

		#bar{
			height: 100px;
			background-color: #86B3D1; 
			color: #FFFFFF; 
			padding: 5px;
		}

		#signup_button {
			background-color: #EDB5BF;
			color: white;
			font-family: courier new, monospace;
			font-size: 16px;
			width: 80px;
			padding: 6px;
			border-radius: 6px;
			border: none;
			margin: auto;
			display: flex;
			text-align: center;
		}

		#medium_box {
			background-color: #EEE2DC;
			width: 800px;  
			margin: auto; 
			margin-top: 50px;
			padding: 10px;
			padding-top: 100px;
			padding-bottom: 100px;
			border-radius: 10px;
			text-align: center;
		}

		#text {
			height: 40px;
			width: 300px;
			border-radius: 6px;
			border: solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
			font-family: courier new, monospace;
		}

		#login_button {
			height: 40px;
			width: 300px;
			border-radius: 6px;
			font-weight: bold;
			border: none;
			background-color: #EDB5BF;
			color: white;
			font-family: courier new, monospace;
		}

		#e_mail {
			height: 40px;
			width: 300px;
			border-radius: 6px;
			border: solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
			font-family: courier new, monospace;
		}

		#pass {
			height: 40px;
			width: 300px;
			border-radius: 6px;
			border: solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
			font-family: courier new, monospace;
		}

		}

	</style>

	<body style="font-family: courier new, monospace; background-color: #FAFAFA;">
		<div id="bar">

			<div style="font-size: 80px; text-align: center;">
				The Public Pantry
			</div>

			<div>
				<button onclick="logintosignup()" type="submit" id="signup_button">
					Sign Up Here!
				</button> 
			</div>

			<form id="medium_box" style="color: #474B4F; font-weight: bold;">
				Log in to The Public Pantry <br> <br>
					<input type="text" id="e_mail" name="e_mail" placeholder="Email Address"> <br> <br>
					<input type="Password" id="pass" name="pass" placeholder="Password"> <br> <br>
					<input onclick="logintoprofile()" type="submit" id="login_button" value="Log In"> 
			</form>

		</div>

		<script type="text/javascript">
			
			const myForm = document.getElementById('medium_box');

			myForm.addEventListener('submit', function(e) {

				e.preventDefault();

				const formData = new FormData(this);

				fetch('forlogin.php', {

					method: 'post',

					body: formData

				}).then(function (response) {
						return response.text();
				}).then(function(text) {
						console.log(text);
				}).catch(function(error){
						console.error(error);
				})

			});

			function logintoprofile() {
				document.location.href="profile.php";
			};	

			function logintosignup() {
				document.location.href="signup.php";
			};

		</script>
	</body>

</html>




<!--written by Jamie Sumilang-->

