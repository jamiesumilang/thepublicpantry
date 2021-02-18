<!DOCTYPE html>
	<html>
	<head>
		<title> thepublicpantry | My Profile </title>
	</head>
	<style type="text/css">
		
		#blue_bar {
			height: 50px;
			background-color: #86B3D1;
			color: white;
			padding-top: 10px;
		}

		#search_box {
			width: 400px;
			height: 20px;
			border-radius: 5px;
			border: none;
			padding: 6px;
			font-size: 14px
			font-family: courier new, monospace;
			background-image: url(search.png);
			background-repeat: no-repeat;
			background-size: contain;
			background-position: right;
		}

		#search_button {
			background-color: #EDB5BF;
			border: none;
			color: white;
			padding: 6px;
			font-size: 14px;
			font-family: courier new, monospace;
			border-radius: 2px;
			width: 80px;
		}

		#profile_pic {
			width: 150px;
			margin-top: -200px;
			border-radius: 50%;
			border: solid 2px white;
		}

		#menu_buttons {
			width: 100px;
			display: inline-block;
			margin: 2px;
		}

		#friends_img {
			width: 75px;
			float: left;
			margin: 8px;

		}

		#friends_bar {
			background-color: white;
			min-height: 400px;
			margin-top: 20px;
			color: black;
			padding: 8px;
		}

		#friends {
			clear: both;
			font-size: 12px;
			font-weight: bold;
			color: #86B3D1;
		}

		textarea{
			width: 100%;
			height: 60px;
			border: none;
			font-family: courier new, monospace;
			font-size: 14px;
		}

		#post_button {
			float: right;
			background-color: #EDB5BF;
			border: none;
			color: white;
			padding: 6px;
			font-size: 14px;
			font-family: courier new, monospace;
			border-radius: 2px;
			width: 50px;			
		}

		#post_bar {
			margin-top: 20px;
			background-color: white;
			padding: 10px;
		}

		#post {
			padding: 4px;
			font-size: 13px;
			display: flex;
			margin-bottom: 20px;
		}

		#publicpantrylogo {
			background-color: #86B3D1;
			border: none;
			color: white;
			font-family: courier new, monospace;
			font-size: 30px;
		}
	</style>

	<body style="font-family: courier new, monospace; background-color: #EEE2DC;">

		<!--top bar-->
		<div id=blue_bar>
			<form id="search_content" style="width: 1000px; margin: auto; font-size: 30px;">
				<button onclick="profiletotimeline()" id="publicpantrylogo"> thepublicpantry </button>  
				&nbsp &nbsp 
				<input type="text" id="search_box" name ="search_box" placeholder="Search">
				<img src="blank_avatar.png" style="width: 45px; float: right;">
				<input type="submit" id="search_button" value="Search" name="search_button">

			</form>
			
		</div>

		<!--cover bar-->
		<div style="width: 800px; margin: auto; min-height: 400px;">

			<div style="background-color: white; text-align: center; color: black;">

				<img src="cover.jpg" style="width: 100%">
				<img id="profile_pic" src="blank_avatar.png">
				<br>
					<div style="font-size: 20px;"> Jane Doe </div>
				<br>
				<div id="menu_buttons">Timeline</div>
				<div id="menu_buttons">About</div> 
				<div id="menu_buttons">Friends</div>
				<div id="menu_buttons">Photos</div>
				<div id="menu_buttons">Settings</div>
			</div>

			<!--below cover bar-->
			<div style="display: flex;">

				<!--friends bar-->
				<div style="min-height: 400px; flex: 1;">
					
					<div id="friends_bar">
						
						Friends <br>

						<div id="friends">
							<img id="friends_img"src="blank_avatar.png">
							<br>
							John Doe
						</div>

						<div id="friends">
							<img id="friends_img"src="blank_avatar.png">
							<br>
							Jill Doe
						</div>

						<div id="friends">
							<img id="friends_img"src="blank_avatar.png">
							<br>
							Jack Doe
						</div>

						<div id="friends">
							<img id="friends_img"src="blank_avatar.png">
							<br>
							Jason Doe
						</div>

					</div>
				</div>


				<!--post bar-->
				<div style="min-height: 400px; flex: 2.5; padding: 20px; padding-right: 0px;">
					<form id="n_post" name="n_post" style="border: solid thin #aaa; padding: 10px; background-color: white">
						<textarea id="post_content" name="post_content" placeholder="What's on your mind?"></textarea>
						<input id="post_button" type="submit" value="Post">
						<br>
					</form>

				<!--posts-->
				<div id="post_bar">

					<!--1st post-->
					<div id="post">
						<div> 
							<img src="blank_avatar.png" style="width: 75px; margin-right: 4px;">
						</div>
						<div>
							<div style="font-weight: bold; color: #86B3D1"> John Doe</div>
							Dummy text post, this is just to test the placement of where an existing post will be on the profile page.
							<br><br>
							<a href="">Like</a> . <a href="">Comment</a> . <span style="color: #EDB5BF">February 11 2021</span>
						</div>
					</div>

					<!--2nd post-->
					<div id="post">
						<div> 
							<img src="blank_avatar.png" style="width: 75px; margin-right: 4px;">
						</div>
						<div>
							<div style="font-weight: bold; color: #86B3D1"> Jill Doe</div>
							Dummy text post, this is just to test the placement of where an existing post will be on the profile page.
							<br><br>
							<a href="">Like</a> . <a href="">Comment</a> . <span style="color: #EDB5BF">February 11 2021</span>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			const myForm = document.getElementById("n_post");

			myForm.addEventListener("submit", (e) => {
				e.preventDefault();

				const request = new XMLHttpRequest();

				request.open("post", "forprofileposts.php");

				request.onload = function() {
					console.log(request.responseText);
				}

				request.send(new FormData(n_post));

			});


			const toSearch = document.getElementById("search_content");

			toSearch.addEventListener("submit", (e) => {
				e.preventDefault();

				const request = new XMLHttpRequest();

				request.open("post", "forprofilesearch.php");

				request.onload = function() {
					console.log(request.responseText);
				}

				request.send(new FormData(search_content));

			});

			function profiletotimeline() {
				document.location.href="timeline.php";
			};


		</script>

	</body>
	</html>

	<!--written by Jamie Sumilang-->