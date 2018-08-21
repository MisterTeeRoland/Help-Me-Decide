<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<meta http-equiv="X-UA-Compatible" contingent="IE=edge"/>
		<meta name='viewport' content='width=device-width, initial-scale=1' />
		<title>Help Me Decide - Powered by Yelp</title>

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="fontAwesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="favicon.ico">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- [if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div id='fontLoader' style='display: none;'>This is a hidden sample to load the results font before showing the actual results.</div>
		
		<div id='jumbotron' class='jumbotron'>
			<div class='container'>
				<h1>Help Me Decide</h1><h3>powered by <span id='yelpspan'>Yelp!</span></h3>
			</div>
		</div>

		<div id='setup-div' class='container'>

			<div id='banner'>
				<h2>Can't decide what to eat or what to do?<br>Let us help!</h2>
			</div>

			<div class='row'>
				
				<div class='col-md-3' style='margin-bottom: 20px;'>
					<div id='categoryDiv'>
						<div class='column-header'>
							<h3>Step 1:<br><span>Pick Category</span></h3>
						</div>
						<div class='column-body'>
							<i class='fa fa-cutlery fa-5x' aria-hidden='true' data-toggle='tooltip' data-placement='bottom' title='Food' onclick='SetupCategories("food")'><span class='tooltiptext'></span></i>
							<i class='fa fa-bicycle fa-5x' aria-hidden='true' data-toggle='tooltip' data-placement='bottom' title='Active Life' onclick='SetupCategories("active")'><span class='tooltiptext'></span></i>
							<i class='fa fa-glass fa-5x' aria-hidden='true' data-toggle='tooltip' data-placement='bottom' title='Night Life' onclick='SetupCategories("nightlife")'><span class='tooltiptext'></span></i>
							<i class='fa fa-paint-brush fa-5x' aria-hidden='true' data-toggle='tooltip' data-placement='bottom' title='Entertainment' onclick='SetupCategories("entertainment")'><span class='tooltiptext'></span></i>
						</div>
					</div>
				</div>

				<div class='col-md-3' style='margin-bottom: 20px;'>
					<div id='choicesContainer'>
						<div class='column-header'>
							<h3>Step 2:<br><span>Pick Choices</span></h3>
						</div>
						<div class='column-body'>
							<button onclick="Select(true)">Select All</button><button onclick="Select(false)">Select None</button>
							<div id='choices'></div>
						</div>
					</div>
				</div>

				<div class='col-md-6' style='margin-bottom: 20px;'>
					<div id='circleContainer'>
						<div class='column-header'>
							<h3>Step 3:<br><span>Click Button!</span></h3>
						</div>
						<div class='column-body'>
							<button onclick='RotateCircle()'>Help Me Decide!</button>
							<div id='container'><i class='fa fa-arrow-down fa-3x'></i><div id='chartContainer'></div></div>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div id='results-div' class='container'>

			<div id='finalResults'>
				<button class='searchAgainBtn' onclick='SearchAgain()'>Search Again</button>
				<div id='yelpResults'></div>
			</div>

			<div id='myModal' class='modal'>
				<div class='modal-content'>
					<div class='closeModal'><i id='closeModal' class='fa fa-close'></i></div>
					
					<p>YOU GOT:</p>
					<div id='results'></div>
					<div id='resultButtons'>
						<button class='modalbutton' onclick='SearchYelp()'>I'll Take It!</button>
						<button class='modalbutton' onclick='RotateCircle()'>Spin Again!</button>
					</div>
					
					<div id='manualLocation'>
						<div class="input-group input-group-lg">
				    		<input type="text" class="form-control" id='currentLocation' placeholder='Enter an address, neighborhood, city/state, or zip code here...'>
					      	<span class="input-group-btn">
					        	<button class="btn btn-default" type="button" onclick='SetLocation()'>Search</button>
					      	</span>
					    </div>
					</div>

				</div>
			</div>
		</div>

		<footer><p class='text-muted'>&copy; <span id='year'></span> by Tyler J. Roland, LLC.<br>All rights reserved.</p></footer>

		<script src='js/jquery3.1.1.min.js'></script>
		<script src='js/jqueryRotate.js'></script>
		<script src='js/canvasjs.min.js'></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="decide.js"></script>

	</body>
</html>
