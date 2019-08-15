<!-- Sub Box Builders Calculator 
	 Group page: https://www.facebook.com/groups/subboxbuilders/
	 Created By:
	 Leonard Zakoo of 430Designs
	 James B. of TheBoxMan
	 and any other info you would like to add

-->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://slavish-cruise.000webhostapp.com/ohm.png"/>
	<meta property="og:url" content="http://slavish-cruise.000webhostapp.com" />
	<meta property="og:type" content="Web App" />
	<meta property="og:title" content="Speaker Calculator " />  
	<meta property="og:description" content="Ohm Calculator For Wiring Speakers / Subwoofers" />
	<!-- Change Title -->
	<title>Speaker Ohm Calculator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/litera/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php include("inc/header.php"); ?>
	
	<div class="container">
		<div class="row mb-3">
			<h1 class="text-center w-100">Speaker Calculator</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<table>
					<tr>
						<td># Speakers</td>
						<td><input type = "number" id = "speakers" value=""   maxlength="2" required /></td>
					</tr>
					<tr>
						<td>Ohm</td>
						<td><input type = "number" id = "ohms" value=""   maxlength="2" required /></td>
					</tr>
					<tr>
						<td>Select</td>
						<td>
							<button type="button" class="btn btn-primary" onclick="dvc()">Dual voice-coil</button>
							<button type="button" class="btn btn-primary" id="svc" onclick="svc()">Single voice-coil</button>
						</td>
					</tr>
					<tr>
						<!-- <td colspan="2"><hr></td> -->
					</tr>
					<tr>
						<td class="sep">Parallel </td>
						<td class="sep"><div id = "parallel" ></div></td>
					</tr>
					<tr>
						<td>Series </td>
						<td><div id = "series" ></div></td>
					</tr>
					<tr>
						<td class="sep"></td>
						<td class="sep"></td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<div id="show_wire_dia"><img id="wire_dia" src="img/default.gif" ></div>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script>
		var dia = [
		"img/default.gif", 
		"img/1-0.5.gif",
		"img/1-1.gif",
		"img/1-2.gif",
		"img/2-.25.gif",
		"img/2-.50.gif",
		"img/2-1.gif",
		"img/3-.17.gif",
		"img/3-.33.gif",
		"img/3-.67.gif",
		"img/4-.13.gif",
		"img/4-.25.gif",
		"img/4-.50.gif",
		"img/svc2-2.gif",
		"img/svc3-1.33.gif",
		"img/svc4-1.gif"
		];
		document.getElementById("wire_dia").src = dia[0];
		 function dvc() { 
				var speakers, ohms, result, result2; 
				speakers = parseInt(document.getElementById("speakers").value, 10);
				ohms = parseInt(document.getElementById("ohms").value, 10);
				dvc_p = (ohms * 2);
				dvc_s = (ohms / 2);
				result =  (dvc_s / speakers); 
				result2 =  (dvc_p / speakers); 
				document.getElementById("parallel").innerHTML = result.toFixed(2); 
				document.getElementById("series").innerHTML = result2.toFixed(2);
				resultFix = result.toFixed(2);
					if (speakers == 1 && result == 0.5 ){
						document.getElementById("wire_dia").src = dia[1];
					}
					else if (speakers == 1 && result == 1 ){
						document.getElementById("wire_dia").src = dia[2];
					}
					else if (speakers == 1 && result == 2 ){
						document.getElementById("wire_dia").src = dia[3];
					}
					// 2 Speakers
					else if (speakers == 2 && result == 0.25 ){
						document.getElementById("wire_dia").src = dia[4];
					}
					else if (speakers == 2 && result == 0.50 ){
						document.getElementById("wire_dia").src = dia[5];
					}
					else if (speakers == 2 && result == 1 ){
						document.getElementById("wire_dia").src = dia[6];
					}
					// 3 Speakers
					else if (speakers == 3 && resultFix == 0.17 ){
						document.getElementById("wire_dia").src = dia[7];
					}
					else if (speakers == 3 && resultFix == 0.33 ){
						document.getElementById("wire_dia").src = dia[8];
					}
					else if (speakers == 3 && resultFix == 0.67 ){
						document.getElementById("wire_dia").src = dia[9];
					}
					// 4 Speakers
					else if (speakers == 4 && resultFix == 0.13 ){
						document.getElementById("wire_dia").src = dia[10];
					}
					else if (speakers == 4 && resultFix == 0.25 ){
						document.getElementById("wire_dia").src = dia[11];
					}
					else if (speakers == 4 && resultFix == 0.50 ){
						document.getElementById("wire_dia").src = dia[12];
					}
					else {
						document.getElementById("wire_dia").src = dia[0];
					}
				
			}
		 function svc() { 
				var speakers, ohms, result, result2; 
				speakers = parseInt(document.getElementById("speakers").value, 10);
				ohms = parseInt(document.getElementById("ohms").value, 10);
				// svc = (ohms * 2);
				result =  (ohms / speakers); 
				document.getElementById("parallel").innerHTML = result.toFixed(2); 
				document.getElementById("series").innerHTML = "N/A"; 
				resultFix = result.toFixed(2);
					if (speakers == 2 && result == 2.00 ){
						document.getElementById("wire_dia").src = dia[13];
					}
					else if (speakers == 3 && resultFix == 1.33 ){
						document.getElementById("wire_dia").src = dia[14];
					}
					else if (speakers == 4 && result == 1.00 ){
						document.getElementById("wire_dia").src = dia[15];
					}
					else {
						document.getElementById("wire_dia").src = dia[0];
					}
			}
	</script>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/script.js"></script>
</body>
</html> 