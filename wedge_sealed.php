<!-- Sub Box Builders Calculator 
	 Group page: https://www.facebook.com/groups/subboxbuilders/
	 Created By:
	 Leonard Zakoor of 430Designs
	 James B. of TheBoxMan
	 and any other info you would like to add

-->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!-- Change Title -->
	<title>Sealed Wedge Enclosure Calculator</title>
	
</head>
<body>
	<div id="container">
	<!-- just placed a button to nav to next page -->
	 <a href="wiring_cal.php"><button>To Wire Calculator </button></a>
		<br />
		<br />
	<table>
		<tr>
			<th colspan="2">Sealed Wedge Calculator </th>
		</tr>
		<tr>
			<td>Top</td>
			<td><input type = "number" id = "top" value=""   maxlength="4" required /></td>
		</tr>
		<tr>
			<td>Bottom</td>
			<td><input type = "number" id = "bottom" value=""   maxlength="4" required /></td>
		</tr>
		<tr>
			<td>Height</td>
			<td><input type = "number" id = "height" value=""   maxlength="4" required /></div></td>
		</tr>
		<tr>
			<td>Width</td>
			<td><input type = "number" id = "width" value=""   maxlength="4" required /></div></td>
		</tr>
		<tr>
			<!-- <td colspan="2"><hr></td> -->
		</tr>
		<tr>
			<td>Measure</td>
			<td><div class="btn" onclick="outerD()">OD</div>
			<div class="btn" onclick="innerD()">ID</div>
			</td>
		</tr>
		<tr>
			<td class="sep">SQ Feet </td>
			<td class="sep"><div id = "sqFeet" ></div></td>
		</tr>
		<tr>
			<td>SQ Inchs </td>
			<td><div id = "sqInch" ></div></td>
		</tr>
		<tr>
			<td>Liters </td>
			<td><div id = "inLiters" ></div></td>
		</tr>
		<tr>
			<td class="sep"></td>
			<td class="sep"></td>
		</tr>
	</table>
	<div id="show_wire_dia"><img id="wire_dia" src="img/box_volume/sealed_wedge.gif" ></div>

	<script>
		var dia = [
		"img/box_volume/sealed_wedge.gif", 
		];
		document.getElementById("wire_dia").src = dia[0];
		 function outerD() 
			{ 
			var t, b, h, w, result, result2, result3; 
			t = parseFloat(document.getElementById("top").value, 10);
			b = parseFloat(document.getElementById("bottom").value, 10);
			h = parseFloat(document.getElementById("height").value, 10);
			w = parseFloat(document.getElementById("width").value, 10);
			t = t - 1.5
			b = b - 1.5
			h = h - 1.5
			w = w - 1.5
			liters = 28.317;
			result = ((t + b) / 2 * h * w / 1728);
			result2 = ((t + b) / 2 * h * w); 
			result3 =  (liters * result); 
			document.getElementById("sqFeet").innerHTML = result.toFixed(2); 
			document.getElementById("sqInch").innerHTML = result2.toFixed(2);
			document.getElementById("inLiters").innerHTML = result3.toFixed(2);
			document.getElementById("wire_dia").src = dia[0];
					
			}
		 function innerD() 
			{ 
			var t, b, h, w, result, result2, result3; 
			t = parseFloat(document.getElementById("top").value, 10);
			b = parseFloat(document.getElementById("bottom").value, 10);
			h = parseFloat(document.getElementById("height").value, 10);
			w = parseFloat(document.getElementById("width").value, 10);
			liters = 28.317;
			result = ((t + b) / 2 * h * w / 1728);
			result2 = ((t + b) / 2 * h * w);
			result3 =  (liters * result); 
			document.getElementById("sqFeet").innerHTML = result.toFixed(2); 
			document.getElementById("sqInch").innerHTML = result2.toFixed(2);
			document.getElementById("inLiters").innerHTML = result3.toFixed(2);
			document.getElementById("wire_dia").src = dia[0];
					
			}
	</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.js"></script>
</body>
</html> 