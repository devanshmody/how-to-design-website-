<html>
<body>
<?php 
$username=$_POST['username'];
$pass1=$_POST['pass1'];
$email=$_POST['email'];
$licnum=$_POST['licnum'];
$dob=$_POST['dob'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$state=$_POST['state'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("devansh",$con) or die(mysql_error());
$str="insert into project values('$username','$pass1','$email','$licnum','$dob','$addr','$tel','$state')";
$res=@mysql_query($str) or die(mysql_error());
if ($res>0)
{
echo "record created";
}
?>
<br>
<br>
<a href="http://localhost:1234/segroceryproject/payment.html">Payment page</a>
<p>click on the above link to go to the login page</p>
</body>
</html>