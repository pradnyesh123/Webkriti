<!doctype html>
<html>
<head><title>Register | Infotsav18</title>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<h3 class="heading"><u>Register yourself for events in Infotsav'18 below...</u></h3>
<?php include('reg.php'); ?>
<form action="" method="post">
<div class="reg" >
	<label id="lab">Name</label>
	<input type="text" name="name" id="name" placeholder="Please Enter your name!" required><br>
	<label id="lab">Username:</label>
	<input type="text" name="user" id="user"  placeholder="Please Enter your username!" required><br>
	<label id="lab">E-Mail</label>
	<input type="email" name="email" id="email" placeholder="Please Enter your E-Mail!" required><br>
	<label id="lab">Mobile Number</label>
	<input type="tel" name="phone" id="phone" placeholder="Please Enter your Phone Number" required><br>
	<p id="lab"><label id="lab">Gender:</label>
	<input type="radio" name="gender" id="gender" value="Male" required>Male
	<input type="radio" name="gender" id="gender" value="Female" required>Female</p><br>
	<label id="lab">Date of Birth(dd-mm-yy):</label>
	<!-- <input type="Number" name="day" required  >- -->
	<!-- <input type="Number" name="month" required  >- -->
	<!-- <input type="Number" name="year" required  ><br> -->
	<select name="date" id="date">
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		
	</select>
	<select name="month" id="month">
		<option value="Jan">January</option>
		<option value="Feb">February</option>
		<option value="Mar">March</option>
		<option value="Apr">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="Aug">August</option>
		<option value="Sept">September</option>
		<option value="Oct">October</option>
		<option value="Nov">November</option>
		<option value="Dec">December</option>
	</select>
	<select name="year" id="year">
		<option value="1995">1995</option>
		<option value="1996">1996</option>
		<option value="1997">1997</option>
		<option value="1998">1998</option>
		<option value="1999">1999</option>
		<option value="2000">2000</option>
	</select>
	<label id="lab">Name of institution currently studying in??</label>
	<input type="text" name="insti" id="insti" required ><br>
	<label id="lab">Please enter your password:</label><br>
	<input type="password" name="pass1" id='pass1' ><br>
	<label id="lab">Please enter your password again!</label>
	<input type="password" name="pass2" id="pass2" >
	<div class="event">
<label>Please fill in the Events you want to participate!!</label><br>
	<input type="checkbox" name="event[]" id="events[]" value="Robowars">Robowars<br>
	<input type="checkbox" name="event[]" id="events[]" value="Techathlon">Techathlon<br>
	<input type="checkbox" name="event[]" id="events[]" value ="Coding Wars">Coding Wars<br>
	<input type="checkbox" name="event[]" id="events[]" value="speakFight">speakFight<br>
	</div>
<div class="submitbtn">
	<input type="submit" name="submit" value="Register">
	</div>
	<!-- <button onclick="alert('Hello\nHow are you?')">fddfg</button> -->
</div>
</form>

</body>
</html>