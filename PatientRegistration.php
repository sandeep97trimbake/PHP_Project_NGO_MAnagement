<html>
<head>
<title>Registration</title>
<link rel='stylesheet' type='text/css' href="http://localhost/sandeep/Rlife/css/PatientRegistration1.css">
<head>
<body>
<legend>Patient Registration Form</legend>
	<div id="base1">
		<div id="table1">
			<table class="t1">
				<tr>
					<td>
						<iframe name="iframe" style="height:350px;width:350px; border:none; box-shadow:2px 2px 4px 2px rgb(0,0,0.2);" class="back"></iframe>
						<form action="http://localhost/sandeep/NGO/upload.php" method="post" enctype="multipart/form_data" target="iframe" >
						<input type="file" id="file" name="file" ><br>
						<br><input type="submit" name="submit" id="submit" value="OK" style="width:100px; height:20px; border:none;	box-shadow:0px 2px 4px 0px rgb(0,0,0.2); border-radius:5px 5px; background-color:#00FF00;">
						</form>	
					</td>
				</tr>
				<tr>
					<td>
						Patient Image	
					</td>
				</tr>
			</table>
		</div>
		<div id="table2">
			<table class="t2">
				<tr>
					<td>PID</td><td><input type="text" placeholder="Auto Genrate" class="field"></td>
				</tr>
					<td>Name</td><td><input type="text" name="name" class="field" required></td>
				</tr>
				<tr>
					<td>Age</td>
					<td>
						<select style="height:20px;width:50px; border:none; box-shadow:0px 2px 4px 0px rgb(0,0,0.2);">
						<option value = "1">1-25</option>
						<option value = "2">26-50</option>
						<option value = "3">51-75</option>
						<option value = "4">76-100</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Admit Date</td><td><input type="date" name="adate" style="height:30px;width:150px; border:none; box-shadow:0px 2px 4px 0px rgb(0,0,0.2);" required ></td>
				</tr>
				<tr>
					<td>OPD No.</td><td><input type="text" name="opd" class="field" required></td>
				</tr>
				<tr>
					<td>IPD No.</td><td><input type="text" name="ipd" class="field" required></td>
				</tr>
				<tr>
					<td>MLC No.</td><td><input type="text" name="mlc" class="field" required></td>
				</tr>
				<tr>
					<td>MLPM No.</td><td><input type="text" name="mlpm" class="field" required></td>
				</tr>
				<tr>
					<td>Diseases</td><td><input type="text" name="diseasea" style="height:250px;width:200px; border:none; box-shadow:0px 2px 4px 0px rgb(0,0,0.2);" required></td>
				</tr>
			</table>
		</div>
		<div id="table3">
			<table class="t3">
				<tr>
					<td>Address</td>
				</tr>
				<tr>
					<td><input type="text" name="add" style="width:250px;height:200px; border:none; box-shadow:0px 2px 4px 0px rgb(0,0,0.2);">
				</tr>
				<tr>
					<td>Gender</td>
				</tr>
				<tr>
					<td><input type="radio" name="gender">Male<input type="radio" name="gender">Female<input type="radio" name="gender">Other</td>
				</tr>
				<tr>
					<td>Broadby</td>
				</tr>
				<tr>
					<td> <input type="radio" name="brodby">Ambulance<input type="radio" name="brodby">Person</td>
				</tr>
				<tr>
					<td> <input type="text" name="bvalue" placeholder="Vehical No./Name/PhNo" style="" class="field3"></td>
				</tr>
			</table>
		</div>
		<div id="button2"><a href="#" class="click"><b>Save</b></a></div>
		<div id="button3"><a href="#" class="click"><b>Reset</b></a></div>
		<div id="button4"><a href="#" class="click"><b>Back</b></a></div>
		<div id="logo">
			<p><b>Real Life</b><br><b> Real People</b></p>
		</div>
	</div>
</body>
</html>