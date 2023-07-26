<!DOCTYPE html>
<html>
	<head>
		<style>
			html, body { height: 100%; width: 100%; margin: 0; background-size: cover;}

			body
			{
				color:white;
            	background-color:#0086AD;
            	background-repeat: no-repeat;
            	background-attachment: fixed;
            	background-size: 100% 100%;
            	background-blend-mode:multiply;
            	padding-top:200px;
            	padding-bottom:200px;
            	background-image: url(http://localhost/Mini%20Project/flightdefault.jpg);

			}

			#formdiv
			{
				display: inline-block;
	
				padding: 2%;
				border-style: solid;
				border-radius: 20px;
				border-color: rgba(0, 134, 173, 0.6);
				background-color: rgba(0, 134, 173, 0.6);

				position: absolute;
    			top:0;
    			bottom: 0;
    			left: 0;
    			right: 0;
    
    			margin: auto;

    			width:40%;
    			height: 30%;

    			font-family: system-ui;
    			font-size:25px;

    			box-shadow: 0px 0px 100px black;
    			
			}

			select
			{
				font-family: system-ui;
				border-radius: 5px;
				font-size:18px;
				width: 150px;
			}

			h4
			{
				display: block;
				text-align: center;
				font-family: Arial;
	
				text-decoration: none;

				position: relative;
    			top:0;
    			bottom: 0;
    			left: 0;
    			right: 0;
    
    			margin: auto;
    			margin-top: 15%;

			}

			option, input
			{
				border-radius: 5px;
			}
		</style>
	</head>

	<body>
		<div id="formdiv">
		<form action="#" method="post">
			<table border=0 align="center">
				<tr>
					<td>FROM: &nbsp</td>
					<td>
						<select name="From[]">
							<option value="" selected>Select</option>
							<option>BENGALURU</option>
							<option>DELHI</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>TO: &nbsp</td>
					<td>
						<select name="To[]">
							<option value="" selected>Select</option>
							<option>BALI</option>
							<option>PARIS</option>
							<option>LOS ANGELES</option>
							<option>LONDON</option>
						</select>
					</td>
				</tr>

				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="GET PRICE" />
					</td>
				</tr>
			</table>
		</form>
		</div>

		<?php
			//error_reporting(E_ERROR | E_PARSE);

			if(isset($_POST['submit']))
				foreach ($_POST['From'] as $from)
			
			if(isset($_POST['submit']))
				foreach ($_POST['To'] as $to)


			if ($from=="BENGALURU" and $to=="BALI") {
				echo "<br /><h4>$from to $to (ONE-WAY): ₹ 56620</h4>";
				echo '<body style="background-image: url(http://localhost/Mini%20Project/blrbali.png);"></body>';
			}

			elseif ($from=="BENGALURU" and $to=="PARIS") {
				echo "<br /><h4>$from to $to (ONE-WAY): ₹ 88500</h4>";
				echo '<body style="background-image: url(http://localhost/Mini%20Project/blrparis.png);"></body>';
			}

			elseif ($from=="BENGALURU" and $to=="LOS ANGELES") {
				echo "<br /><h4>$from to $to (ONE-WAY): ₹ 137500</h4>";
				echo '<body style="background-image: url(http://localhost/Mini%20Project/blrla.png);"></body>';
			}

			elseif ($from=="BENGALURU" and $to=="LONDON") {
				echo "<br /><h4>$from to $to (ONE-WAY): ₹ 95370</h4>";
				echo '<body style="background-image: url(http://localhost/Mini%20Project/blrlondon.png);"></body>';
			}



			elseif ($from=="DELHI" and $to=="BALI") {
				echo "<br /><h4>$from to $to (ONE-WAY): ₹ 74800</h4>";
				echo '<body style="background-image: url(http://localhost/Mini%20Project/delbali.png);"></body>';
			}

			elseif ($from=="DELHI" and $to=="PARIS") {
				echo "<br /><h4>$from to $to (ONE-WAY): ₹ 82500</h4>";
				echo '<body style="background-image: url(http://localhost/Mini%20Project/delparis.png);"></body>';
			}

			elseif ($from=="DELHI" and $to=="LOS ANGELES") {
				echo "<br /><h4>$from to $to (ONE-WAY): ₹ 115000</h4>";
				echo '<body style="background-image: url(http://localhost/Mini%20Project/delhila.png);"></body>';
			}

			elseif ($from=="DELHI" and $to=="LONDON") {
				echo "<br /><h4>$from to $to (ONE-WAY): ₹ 91250</h4>";
				echo '<body style="background-image: url(http://localhost/Mini%20Project/dellon.png);"></body>';
			}
		?>
	</body>
</html>