<!DOCTYPE html>
<html>
<head>
	<title>Heroku PHP</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Quicksand';
			margin: 0;
		}
		h1 {
			font-weight: 300;
			margin: 0 auto;
			padding: 4%;
			color: white;
			font-size: 2rem; 
		}
		.heading {
			background-image: linear-gradient( 135deg, rebeccapurple 0%, blueviolet 100%);
			margin: 0;
		}
		.content {
			width: 100%;
			padding: 5%;
			color: Cadetblue;
		}
		.date {
			color: rebeccapurple;
		}
		.blockQuote {
			border-left: 2px solid rebeccapurple;
			padding-left: 5px; 
		}
		p {
			font-weight: 400;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="heading">
			<h1 class="headerText">Pipeline</h1>
		</div>
	<div class="content">
		<p class="date">First post</p>
		<p class="blockQuote">Testing Heroku pipelines for continous deployment</p>
		<?php echo 'It\'s working!' ?>
	</div>
</body>
</html>