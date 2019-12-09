<html>
<head>
<title>home</title>
<link rel='stylesheet' type='text/css' href="http://localhost/sandeep/Rlife/css/Admin2.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
</head>
<body>
<div id="base1">
<h1>Real Life Real Pepple </h1>
</div>
	<div id="base2">
		<div id="patient">
			<button id="b1"><i class='fas fa-user-injured' style='font-size:22px'> Paitent</i></button>	
			<div id="psub">
				<a id="a1" href="http://localhost/sandeep/Rlife/php/PatientRegistration.php">Registration</a>
				<a id="a1" href="http://localhost/sandeep/Rlife/php/Tritment.php">Tritment</a>
				<a id="a1">Update</a>
				<a id="a1" href="http://localhost/sandeep/Rlife/php/PatientHistory.php">History</a>
			</div>
			</div>
			<div id="member">
				<button id="b2"><i class='fas fa-user-plus' style='font-size:22px'> Member</i></button>	
				<div id="msub">
					<a id="a2">Registration</a>
					<a id="a2">Update</a>
					<a id="a2">View</a>
					<a id="a2">History</a>
				</div>
			</div>
			<div id="report">
				<button id="b3"><i class="fa fa-file" style="font-size:22px;"> Report</i></button>	
				<div id="rsub">
					<a id="a3">Paitent</a>
					<a id="a3">Member</a>
				</div>
			</div>
	</div>
	<div id="schedule">
		<table class="t1">
			<tr>
				<th class="thh1"><i class="fa fa-list" style='font-size:30px'> Schedule</i></th>
			</tr>
			<tr>
				<td><input class="tdd1" type="text" placeholder="Today's Schedule"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Save" class="bb1"> <input type="submit" value="Reset" class="bb1"></td>
			</tr>
		</table>
	</div>
	<div class="date">
		<b> Today's date <?php echo date ("m/d/y"); ?></b>
	</div>

</body>