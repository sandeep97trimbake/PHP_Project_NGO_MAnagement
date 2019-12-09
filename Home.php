	<?php
		session_start();
	?>
	
	<html>
	<head>
	<title>Home Page</title>
	<link rel='stylesheet' type='text/css' href="http://localhost/sandeep/Rlife/css/Home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<div id="base5">
		<div id="logo">
			<span class="l1"><b>Real Life Real People</b></span>
			<!--<span class="l2"><i class='fas fa-ambulance' style='font-size:60px;color:#00FF00'></i> </span>-->
			<span class="l4"><button class="lb4">0123456789</button></span>
			<span class="l3"><a href="#donation1" id="lb3">Donate</a></span>
		</div>
		<div id="Ad1">
			<a href="#" id="buttonl"><b>Login</b></a>
			<a href="#" id="button4"><b>Contact Us</b></a>
			<a href="#" id="button5"><b>Reviews</b></a>
		</div>
		<div id="slogans">
			<img src="http://localhost/sandeep/Rlife/images/RL/NGOimage.jpg" class="img1">
			<p>It is in your hands to create <br> a <span class="bw">  BETTER WORLD </span> <br>for all who live in it.<br>-Nelson Mandela-</p>
		</div>
		<div id="info1">
			<table class="t1">
				<tr>
					<td><i class="fa fa-wheelchair" style="font-size:48px;color:red"></i></td>
					<td>Over 21 million people in India as suffering from one or the other kind of disability</td>
				</tr>
				<tr>
					<td><i class="fa fa-plus" style="font-size:48px;color:red"></i></td>
					<td>Health costs in India to rise at double the inflation rate in 2018: Survey</td>
				</tr>
				<tr>
					<td><i class="fa fa-line-chart" style="font-size:48px;color:red"></i></td>
					<td>Decline in DALYs and deaths from communicable diseases have been accompanied by a gradual shift to, 
					and accelerated rise in the prevalence of chronic non-communicable diseases (NCDs) such as cardiovascular disease (CVD), diabetes, 
					chronic obstructive pulmonary disease (COPD), cancers, mental health disorders and injuries</td>
				</tr>
			</table>
		</div>
		<div id="donation1">
			<table class="t2">
				<tr>
					<th colspan="2"><marquee>We appreciate your Help</marquee></th>
				</tr>
				<tr>
					<td>Name</td><td><input type="text" name="name" class="field2" ></td>
				</tr>
				<tr>
					<td>Phone No.</td><td><input type="text" name="phno" class="field2" required>*</td>
				</tr>
				<tr>
					<td>Email Id</td><td><input type="text" name="eid" class="field2" required>*</td>
				</tr>
				<tr>
					<td>Country</td><td><input type="text" name="cunt" class="field2"></td>
				</tr>
				<tr>
					<td>Address</td><td><input type="text" name="add" class="field2"></td>
				</tr>
				<tr>
					<td>City</td><td><input type="text" name="city" class="field2"></td>
				</tr>
				<tr>
					<td colspan="2">What inspired you to give?</td>
				</tr>
				<tr>
					<td colspan="2">
						<select>
							<option value = "1">Appeal on social media</option>
							<option value = "2">Friend recomdation</option>
							<option value = "3">Face to Face interaction with our staff</option>
							<option value = "4">You Tube</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Amount</td><td><input type="text" name="amt" class="field2"></td>
				</tr>
				<tr>
					<td>Options</td>
					<td>
						<select class="field2">
							<option value = "1">Paypal</option>
							<option value = "2">VISA Card</option>
							<option value = "3">Credit Card</option>
							<option value = "4">Bank</option>
							<option value = "5">Google pay</option>
						</select>
					</td>
				</tr>
				<tr>
					<th colspan="2"><input type="Submit" value="Donate" class="tb2"></th>
				</tr>
				<tr>
					<td colspan="2"><i class="fa fa-cc-paypal" style="font-size:24px"></i> <i class="fa fa-cc-visa" style="font-size:24px"></i> 
					<i class="fa fa-credit-card" style="font-size:24px"></i> <i class="fa fa-bank" style="font-size:22px"></i> <i class="fa fa-google-wallet" style="font-size:24px"></i></td>
				</tr>
			</table>
		</div>
		<div id="stauts1">
			<table class="t3">
				<tr>
					<th>Our Expenditure's (2018)</th><th>Achivements</th>
				</tr>
				<tr>
					<td>30% funds in Health & Nutrition</td><td>Lives of 22.51 lakh children were improved</td>
				</tr>
				<tr>
					<td>30% funds in Child Protection*</td><td>We gave them identity</td>
				</tr>
				<tr>
					<td>21% funds in Emergencies</td><td>Created Jobs for homeless people</td>
				</tr>	
				<tr>
					<td>12% funds in Education</td><td>Help them to stay stable in life</td>
				</tr>
				<tr>
					<td>7% other Grant Related Expenditure</td>
				</tr>
			</table>
			<p class="p2"> <img src="http://localhost/sandeep/Rlife/images/ngoweb/graph.png" style="width:200px;height:200px;"></p>
		</div>
		<div id="menu">
			<input type="submit" onclick="result()" value="About" class="button" id="about">
			<input type="submit" onclick="result()" value="Mission" class="button" id="mission">
			<input type="submit" onclick="result()" value="Achivements" class="button" id="achivements">
			<input type="submit" onclick="result()" value="Videos" class="button" id="videos">
			<input type="submit" onclick="result()" value="Images" class="button" id="images">
			<input type="submit" onclick="result()" value="Team Members" class="button" id="tmembers1">
		</div>
		<div class="display">
			<p class="p1">Millions of children in India are being a denied a chance at a happy & dignified childhood, mainly because of who they are and where they are born. 
				Save the Children works to bring this injustice to an end.
				Your donation will add to the fund that runs child education, protection and health programs across India. These programs are funded by thousands of donors such as you.
				Save the Children runs over 65 programs in 19 states in India, helping over 1 million children a year exercise their right to a childhood they can cherish.
				We run solely on donations and any amount donated by you helps us do more. These donations are going a long way in transforming our nation as they help children, 
				who are the future. As per UN report published in 2014, India is the youngest country in the world.
				While Save the Children appreciates monthly donations more where you choose to donate a small fixed amount monthly for us to be able to plan our programs for longer term, 
				a single donation can also help save a child.
			</p>
			<table class="history"> 
				<tr>
					<td class="td2">NGO is a small part of YCM Hospital which helps <b>Beggers,Ofens,Physicaly & Finacialy disabled,Mentaly distrubed people</b></td>
				</tr>
				<tr>
					<td class="td2">An excelent hostory of save <b> %0 guarantee cases</b></td>
				</tr>
				<tr>
					<td class="td2">Helps to find <b>Lost people</b> to find their belongings.</td>
				</tr>
				<tr>
					<td class="td2">Achived many <b>Awords</b> for their works</td>
				</tr>
			</table>
			<p class="addt">Address</p>
			<p class="add">	No.476/2692, Sant Tukaram Nagar, Pimpri,Sant Tukaram Nagar, Pimpri Colony,Pimpri-Chinchwad,Maharashtra 411018</p>
		</div>
		<div class="about">
		<h1>Real Life Real People</h1>
		<p class="p3"><img class="img6" src="http://localhost/sandeep/Rlife/images/RL/RLRL.jpg"></p>
		<table class="t6"> 
				<tr>
					<td>NGO is a small part of YCM Hospital which helps <b>Beggers,Ofens,Physicaly & Finacialy disabled,Mentaly distrubed people</b></td>
				</tr>
				<tr>
					<td>An excelent hostory of saving <b> %0 guarantee cases</b></td>
				</tr>
				<tr>
					<td>Helps to find <b>Lost people</b> to find their belongings.</td>
				</tr>
				<tr>
					<td>Ac	hived many <b>Awords</b> for their works</td>
				</tr>
				<tr>
					<td>Woking Hours :- 10:00AM to 09:00PM</td>
				</tr>
			</table>
		</div>
		<div class="rlimages">
			<table class="t7">
				<tr>
					<td class="td1"><img class="img4" src="http://localhost/sandeep/Rlife/images/RL/RLRL.jpg"></td>
					<td class="td1"><img class="img4" src="http://localhost/sandeep/Rlife/images/RL/RLRL1.jpg"></td>
					<td class="td1"><img class="img4" src="http://localhost/sandeep/Rlife/images/RL/RLRL5.jpg"></td>
				</tr>
				<tr>
					<td class="td1"><img class="img4" src="http://localhost/sandeep/Rlife/images/RL/RLRL2.jpg"></td>
					<td class="td1"><img class="img4" src="http://localhost/sandeep/Rlife/images/RL/RLRL3.jpg"></td>
					<td class="td1"><img class="img4" src="http://localhost/sandeep/Rlife/images/RL/RLRL4.jpg"></td>
				</tr>
			</table>
		</div>
		<div class="tmembers">
			<table class="t8">
				<tr>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar.png" style="height:150px;width:150px;"><br>Mr.ABC</td>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar1.png" style="height:150px;width:150px;"><br>Mr.DEF</td>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar2.png" style="height:150px;width:150px;"><br>Mr.DEF</td>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar.png" style="height:150px;width:150px;"><br>Mr.GHI</td>
				</tr>
				<tr>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar1.png" style="height:150px;width:150px;"><br>Mr.JKL</td>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar2.png" style="height:150px;width:150px;"><br>Mr.MNO</td>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar.png" style="height:150px;width:150px;"><br>Mr.PQR</td>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar1.png" style="height:150px;width:150px;"><br>Mr.STU</td>
				</tr>
				<tr>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar2.png" style="height:150px;width:150px;"><br>Mr.VWX</td>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar.png" style="height:150px;width:150px;"><br>Mr.YZ</td>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar1.png" style="height:150px;width:150px;"><br>Mr.ABC</td>
					<td class="td3"><img class="img5" src="http://localhost/sandeep/Rlife/images/teammembers/avatar2.png" style="height:150px;width:150px;"><br>Mr.DEF		</td>
				</tr>
			</table>
		</div>
		<div class="rlmission">
		<table class="pm1">
		<tr>
			<th class="thm1">Our Mission</th>
		</tr>
		<tr>
			<td class="tdm1">1)To work for the social development of underprivileged individuals, groups and communities.</td>
		</tr>
		<tr>
			<td class="tdm1">2)To encourage healthcare development and health promotion.</td>
		</tr>
		<tr>
			<td class="tdm1">3)To assist in the process of social integration and personal realisation of underprivileged children, young people, adults and families.</td>
		</tr>
		<tr>
			<td class="tdm1">4)To endorse the human rights and in particular the rights of the children and young people as well as the rights of underprivileged groups and communities.</td>
		</tr>
		<tr>
			<td class="tdm1">5)To encourage and popularise voluntary work.</td>
		</tr>
		<tr>
			<td class="tdm1">6)Making social changes more visible in implementing and funding NGOs thus improving the development policy work.</td>
		</tr>
		<tr>
			<td class="tdm1">7)To educate the people for adoption of the good norms of a good citizenship and to inculcate into the people's mind, ideals of national unity.</td>
		</tr>
		<tr>
			<td class="tdm1">8)To work for uplifting the status of women in the society. To work against female circumcision and to fight against the victimization of girl /women 
				by anybody in the society on female circumcision or any other related issues.</td>
		</tr>
		<tr>
			<td class="tdm1">9)To help and generate training programme for self employment of women and educated unemployed people and to work for adult education.</td>
		</tr>
		<tr>
			<td class="tdm1">10)To create the means for providing medical assistance to the people suffering from diseases, especially for helpless people.</td>
		</tr>
		<tr>
			<td class="tdm1">11)To provide help under health & nutrition services for women and children.</td>
		</tr>
		</table>
		</div>
		<div id="reviews">
		<p class="pp1"><b>Reviews</b></h1>
		</div>
		<div class="reviewform">
		<form action="#">
		<p class="pp2"><b>Ratings</b> <span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star"></span>
		<span class="fa fa-star"></span></p>
		<p class="pp2"><b>Review</p></b><input type="text" class="reviewsfield">
		<p class="pp3"><a href="#" class="lb8">Post</a></p>
		</form>
		</div>
		<div id="diclaration">
			<table class="t4">
				<tr>
					<th> Disclaimer:</th><td>Please note that the products mentioned are to illustrate activities and the change that your donation 
					an make to the lives of children.Save the Children, based on the need on the ground, will allocate resources to areas that need funds the most.</td>
				</tr>
				<tr>
					<th>Data Security:</th><td> We take utmost precautions with your data, we will never share your information.
					We also do not store any sensitive information like your credit card or bank details.</td>
				</tr>
				<tr>
					<th>Please Note:</th><td>The listings above are indicative, Save the Children, 
					based on the need on the ground will allocate resources to specific work that needs the funds most.</td>
				</tr>
			</table>
			<table class="t5">
				<tr>
					<th colspan="3">Powered by : Sandeep Trimbake </th>
				</tr>
				<tr>
					<td><a href="#" class="fa fa-facebook"></a></td>
					<td><a href="#" class="fa fa-youtube"></a></td>
					<td><a href="#" class="fa fa-twitter"></a></td>
				</tr>
			</table>
		</div>
		<div class="login1">
			<div class="page">	
			<div class="close"><b>+</b></div>
				<img src="http://localhost/sandeep/Rlife/images/teammembers/avatar2.png" style="height:150px;width:150px;">
				<form method="POST" action="http://localhost/sandeep/Rlife/phpbackend/Login.php">
					<input type="text" name="id" placeholder="Eneter your ID" class="field5" required/>
					<input type="text" name="pass" placeholder="Eneter your Password" class="field5" required/>
					<a href="http://localhost/sandeep/Rlife/php/Admin.php" class="lb5">Submit</a>
				</form>
			</div>
		</div>
	</div>
	<script>
	/*LOGIN POPUP*/
			document.getElementById('buttonl').addEventListener('click',
			function(){
				document.querySelector('.login1').style.display = 'flex';
			});
			
			document.querySelector('.close').addEventListener('click',
			function(){
				document.querySelector('.login1').style.display = 'none';
			}); 
	/*Disply MEnu */
			document.getElementById('about').addEventListener('click',
			function(){
				document.querySelector('.display').style.display='none';
				document.querySelector('.rlimages').style.display='none';
				document.querySelector('.tmembers').style.display='none';
				document.querySelector('.rlmission').style.display='none';
				document.querySelector('.about').style.display='flex';
			});
			document.getElementById('images').addEventListener('click',
			function(){
				document.querySelector('.tmembers').style.display='none';
				document.querySelector('.display').style.display='none';
				document.querySelector('.about').style.display='none';
				document.querySelector('.rlmission').style.display='none';
				document.querySelector('.rlimages').style.display='flex';
			});
			document.getElementById('tmembers1').addEventListener('click',
			function(){
				document.querySelector('.display').style.display='none';
				document.querySelector('.about').style.display='none';
				document.querySelector('.rlimages').style.display='none';
				document.querySelector('.rlmission').style.display='none';
				document.querySelector('.tmembers').style.display='flex';
			});
			document.getElementById('mission').addEventListener('click',
			function(){
				document.querySelector('.display').style.display='none';
				document.querySelector('.about').style.display='none';
				document.querySelector('.rlimages').style.display='none';
				document.querySelector('.tmembers').style.display='none';
				document.querySelector('.rlmission').style.display='flex';
			});
	</script>
	</body>
	</html>	