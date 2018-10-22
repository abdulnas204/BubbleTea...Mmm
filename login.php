<?php
	session_start();
	session_unset();
?>
<!DOCTYPE html>
<html>

<head>
	<title>In the Moment</title>
	
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<ons-page id="bg">

	<!-- Login Section --> 
		<div style="text-align: center; margin: auto; margin-top: 10%; max-width:800px;">
			<img src="img/logoWhite.png" style="width:80%; margin-top:50%"/>
			<br>

			<ons-list style="margin: 10%;background-color:#ffffff87;border-radius:5px;">
				<ons-list-item modifier="noborder">
					<ons-input placeholder="What's your name? " id="name"></ons-input>
				</ons-list-item>
			</ons-list>

            <section style="max-width: 80%; margin: 10%; ">
                <ons-button modifier=" large--cta" style="background-color:#22c1c3e0;color:white" onclick="submitName()">
                    <ons-input input-id="textclr"  name="login_btn" value="START">
				</ons-button>
				
			</section>
			
			<form id="nameForm" name="nameForm" action="personas.php" method="post">
				<input type="hidden" name="name" id="hiddenName">
			</form>
		</div>

</ons-page>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
			integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
			integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
	</script>

	<script type="text/javascript" src="js/eventHandling.js"></script>

</body>

</html>
