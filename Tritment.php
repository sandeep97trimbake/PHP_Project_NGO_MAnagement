<html>
<head>
<title>Tritment</title>
<link rel='stylesheet' type='text/css' href="http://localhost/sandeep/Rlife/css/Tritment1.css">
</head>
<body>
<div id="base2">
<legend>Patient Tritment Form</legend>
<div id="table1">
<table class="t1">
	<tr>
		<td>PID</td><td><input type="text" name="pid" placeholder="Patient Id" class="field"></td>
	</tr>
	<tr>
		<td>Name:-</td><td><input type="text" placeholder="Auto Detected" class="field"></td>
	</tr>
	<tr>
		<td>MLC No.:-</td><td><input type="text" placeholder="Auto Detected" class="field"></td>
	</tr>
	<tr>
		<td>Discharge/Death:-</td><td><input type="date"class="field"></td>
	</tr>
</table>
</div>
<div  class="button1" ><a href="#" class="a1">search</a></div>
<div id="Table2">
<table class="t2">
	<tr>
		<td>History</td><td><input type="text" placeholder="History of patient" class="field2"></td>
	</tr>
</table>
</div>
<div id="table3">
<table class="t3">
	<tr>
		<td>Patient During Tritment</td>
		<td>
			<iframe name="iframe" style="height:300px;width:300px; border:none; box-shadow:2px 2px 4px 2px rgb(0,0,0.2);" class="back"></iframe>
			<form action="http://localhost/sandeep/NGO/upload.php" method="post" enctype="multipart/form_data" target="iframe">
			<input type="file" id="file" name="file"><br><br>
			<input type="submit" name="submit" id="submit" placeholder="Upload" style="width:100px; height:25px; border:none; box-shadow:0px 2px 4px 0px rgb(0,0,0.2); border-radius:5px 5px; background-color:#00FF00;"><br><br>
			</form>
		</td>
		<td>Patient After Tritment</td>
		<td>
			<iframe name="iframe" style="height:300px;width:300px; border:none; box-shadow:2px 2px 4px 2px rgb(0,0,0.2);" class="back"></iframe>
			<form action="http://localhost/sandeep/NGO/upload.php" method="post" enctype="multipart/form_data" target="iframe">
			<input type="file" id="file" name="file"><br><br>
			<input type="submit" name="submit" id="submit" placeholder="Upload" style="width:100px; height:25px; border:none; box-shadow:0px 2px 4px 0px rgb(0,0,0.2); border-radius:5px 5px; background-color:#00FF00;"><br><br>
			</form>
		</td>
	</tr>
</table>
</div>
<div id="table4">
<table class="t4">
	<tr>
		<th>Process</th><th>Expenditure</th>
	</tr>
		<td><input type="text" class="field4"></td><td><input type="text" class="field4">
	</tr>
</table>
<div  class="button2" ><a href="#" class="a1"><b>Next</b></a></div>
</div>
<div id="table5">
<?php
$xml=simplexml_load_file("http://localhost/sandeep/Rlife/xml/ironman.xml");
echo"<link rel='stylesheet' type='text/css' href='Tritment1.css'>";
echo "<table class='t5'>";
echo "<tr><th colspan='2'> Total Allowance</th></tr>";
echo "<tr>";
echo "<th> Process </th>";
echo "<th> Expenditure</th>";;
echo "</tr>";
foreach($xml->ironman as $iron)
	{
		echo "<tr>";
		echo "<td class='field5'>$iron->srno</td><td class='field5'>$iron->poster</td>";
		echo "</tr>";
	}
echo "<tr><td>Total Amount</td><td></td></tr>";
echo "</table>";
</div>
<div  class="button3" ><a href="#" class="a1">update</a></div>
<div id="button4"><a href="#" class="click"><b>Save</b></a></div>
<div id="button5"><a href="#" class="click"><b>Reset</b></a></div>
<div id="button6"><a href="#" class="click"><b>Back</b></a></div>
<div id="logo">
			<p><b>Real Life</b><br><b> Real People</b></p>
		</div>
</div>
</body>
</html>