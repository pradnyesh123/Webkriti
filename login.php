<?php

if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root','');

if(!$con)
{
	echo 'not connected';
}

if(!mysqli_select_db($con,'fest'))
{
	echo 'Databse not selected';
}

$name=$_POST['user'];
$pass=$_POST['pass'];

$query="SELECT * FROM infotsav WHERE user='$name' and pass='$pass'";
$result=mysqli_query($con,$query);
if (!isset($_SESSION['sid'])==null)
{
    header("Location:login.html");
}
session_start();
$_SESSION['flag']=1;
if($result->num_rows) {
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC )) {
			
			$_SESSION['sid']=session_id();
			$_SESSION['user']=$name;
			$_SESSION['password']=$pass;
			$_SESSION['name']=$row['name'];
			$_SESSION['email']=$row['email'];
			$_SESSION['flag']=1;
			$_SESSION['gender']=$row['gender'];
			$_SESSION['date']=$row['dat'];
			$_SESSION['month']=$row['month'];
			$_SESSION['year']=$row['year'];
			$_SESSION['insti']=$row['insti'];
			$_SESSION['events']=$row['events'];
			$_SESSION['mobile']=$row['mobile'];
			
			// echo "EMP ID ".$row['name']." ";
	}
	echo "aaa ".$_SESSION['sid']." ".$_SESSION['user']." ".$_SESSION['password']." ".$_SESSION['name']." ".$_SESSION['email']." ".$_SESSION['gender']." ".$_SESSION['date']." ".$_SESSION['month']." ".$_SESSION['year']." ".$_SESSION['insti']." ".$_SESSION['events']." ".$_SESSION['mobile']." ";
// header("location:login1.php");
	
}
}
if (isset($_SESSION['flag'])==0)
{
    header("Location:login.html");
}
?>

<html>
<head><title>Welcome to your profile page</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="welcome">
		<h1>Hi <?php echo $_SESSION['name'];?></h1><p>, Welcome to your Infotsav'17 profile</p>
		<a href="logout.php"><button id="log">Log out</button></a>
	</div>

		<div class="fest">
		<h1 id="fest-name">Infotsav 2k18</h1><br>
		<h3 id="fest-desc">Exploring Technologies...</h3>
	</div>
	<div>
		<h3>Your registration details are given below!!</h3>
		<p>Your Email:<?php echo $_SESSION['email'];?><br>Your Gender:<?php echo $_SESSION['gender'];?><br>Your Date of Birth:<?php echo $_SESSION['date'];?>-<?php echo $_SESSION['month'];?>-<?php echo $_SESSION['year'];?><br>Your Institution:<?php echo $_SESSION['insti'];?><br>
			Your Mobile No.:<?php echo $_SESSION['mobile'];?><br>
			Events you want to participate:<?php echo $_SESSION['events'];?><br></p>
	</div>
<script>
	function logout(){
		<?php 
		alert("hggg");
		session_start();
		unset($_SESSION['sid']);
		// header('Location: login.html');
		 // header("location:login.html");
		?>
	}
</script>
</body>
</html>


