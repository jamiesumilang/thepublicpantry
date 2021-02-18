<!DOCTYPE html>
	<html>
	<head>
		<title> thepublicpantry | Timeline </title>
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
			background-color: #EEE2DC;
			min-height: 400px;
			margin-top: 20px;
			padding: 8px;
			text-align: center;
			font-size: 20px;
			font-weight: bold;
			color: #86B3D1;
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
	</style>

	<body style="font-family: courier new, monospace; background-color: #EEE2DC;">

		<!--top bar-->
		<div id=blue_bar>
			<form id="search_content" style="width: 1000px; margin: auto; font-size: 30px;">
				thepublicpantry &nbsp &nbsp 
				<input type="text" id="search_box" name ="search_box" placeholder="Search">
				<img src="blank_avatar.png" style="width: 45px; float: right;">
				<input type="submit" id="search_button" value="Search" name="search_button">

			</form>
			
		</div>

		<!--cover bar-->
		<div style="width: 800px; margin: auto; min-height: 400px;">

			<!--below cover bar-->
			<div style="display: flex;">

				<!--friends bar-->
				<div style="min-height: 400px; flex: 1;">
					
					<div id="friends_bar">
						
						<img src="blank_avatar.png" id="profile_pic"> <br>
						Jane Doe

					</div>
				</div>


				<!--post bar-->
				<div style="min-height: 400px; flex: 2.5; padding: 20px; padding-right: 0px;">
					<form id="n_post" name="n_post" style="border: solid thin #aaa; padding: 10px; background-color: white">
						<textarea id="post_content" name="post_content" placeholder="Got something to post?"></textarea>
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

				request.open("post", "fortimelineposts.php");

				request.onload = function() {
					console.log(request.responseText);
				}

				request.send(new FormData(n_post));

			});

			const toSearch = document.getElementById("search_content");

			toSearch.addEventListener("submit", (e) => {
				e.preventDefault();

				const request = new XMLHttpRequest();

				request.open("post", "fortimelinesearch.php");

				request.onload = function() {
					console.log(request.responseText);
				}

				request.send(new FormData(search_content));

			});

		

		</script>


	</body>
	</html>

	<!--written by Jamie Sumilang-->