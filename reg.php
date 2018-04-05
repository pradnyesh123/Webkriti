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

$NAME=$_POST['name'];
$USER=$_POST['user'];
$MAIL=$_POST['email'];
$PHONE=$_POST['phone'];
$GENDER=$_POST['gender'];
$DATE=$_POST['date'];
$MONTH=$_POST['month'];
$YEAR=$_POST['year'];
$INS=$_POST['insti'];
$PASS1=$_POST['pass1'];
$PASS2=$_POST['pass2'];
$ev=implode(",",$_POST["event"]);

if((strlen($PHONE)==10)&&($PASS1==$PASS2))
{
	$query = "SELECT user FROM infotsav WHERE user='$USER'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result) == 0)
		{
			$sql = "INSERT INTO infotsav (name,user,email,mobile,gender,dat,month,year,insti,pass,events) values ('$NAME','$USER','$MAIL','$PHONE','$GENDER','$DATE','$MONTH','$YEAR','$INS','$PASS1','$ev') ";
        
if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
	
}

else
{
	echo 'inserted';
}
}
else
{	

 echo '<script language="javascript">
 
document.getElementById("name").value = "'.$NAME.'";
document.getElementById("user").value = "'.$USER.'";
document.getElementById("email").value = "'.$MAIL.'";
document.getElementById("phone").value = "'.$PHONE.'";
document.getElementById("'.$GENDER.'").checked = true;
document.getElementById("date").value = "'.$DATE.'";
document.getElementById("month").value = "'.$MONTH.'";
document.getElementById("year").value = "'.$YEAR.'";
document.getElementById("insti").value = "'.$INS.'";
 alert("Sorry! Your chosen username is already taken by someone else!Please try a different one!! ");

	
	 </script>';
}
}

else
{
		echo '<script language="javascript">
		
document.getElementById("name").value = "'.$NAME.'";
document.getElementById("user").value = "'.$USER.'";
document.getElementById("email").value = "'.$MAIL.'";
document.getElementById("phone").value = "'.$PHONE.'";
document.getElementById("'.$GENDER.'").checked = true;
document.getElementById("date").value = "'.$DATE.'";
document.getElementById("month").value = "'.$MONTH.'";
document.getElementById("year").value = "'.$YEAR.'";
document.getElementById("insti").value = "'.$INS.'";
	 alert("Sorry,Please check your Phone Number and  the Passwords again!!");
	
	</script>';
	
}
}
// header("Location:2.php");
?>