<?php
session_start();
unset($_session['sid']);
$_session['flag']=0;
unset($_session['user']);
unset($_session['password']);
unset($_session['name']);
unset($_session['email']);
unset($_session['gender']);
unset($_session['date']);
unset($_session['month']);
unset($_session['year']);
unset($_session['insti']);
unset($_session['events']);
unset($_session['mobile']);
header("Location:login.html");
?>