<!DOCTYPE html>
<html>
<head>
<title>SPweb</title>
</head>
<body>

<?php
//include('registration.php');
$servername="sql103.epizy.com";
$username="epiz_24680947";
$password="AogqJmWUkq9SoFP";//this password is for security pupose this password is not that $pw
$dbname="epiz_24680947_sudhanshu";
$confirmpassword="AogqJmWUkq9SoFP";//when i write it then alert method is shown when password and confirm password are diffrent??i am not sure about it

$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    // echo "connection sucessfull";
}

else{
    die("connection failed because".mysqli_connect_error());
}
$un='';
if(isset($_GET["username"])){
    $un = $_GET['username'];
}
 $em='';
if(isset($_GET["email"])){
$em = $_GET['email'];
}

 $g='';
if(isset($_GET["gender"])){
    $g= $_GET['gender'];
    }

    $dob='';
    if(isset($_GET["dob"])){
        $dob= $_GET['dob'];
        }
$pn='';
if(isset($_GET["mobile_no"])){
 $pn = $_GET['mobile_no'];
 }

$r='';
if(isset($_GET["remind"]))
{
    $r= $_GET['remind'];
}
$pw='';
if(isset($_GET["password"]))
{
    $pw = $_GET['password'];
}

$cpw='';
if(isset($_GET["confirmpassword"]))
{
    $cpw = $_GET['confirmpassword'];
}

$sl='';
if(isset($_GET["selectoption"]))
{
    $sl = $_GET['selectoption'];
}
$datab='';
if(isset($_GET["databasereq"]))
{
    $datab= $_GET['databasereq'];
}

$webadd='';
if(isset($_GET["webadd"]))
{
    $webadd = $_GET['webadd'];
}
// if($sl="appdevelopment")
// {
//     header('location:aboutSPweb.php');
// }
$ab='';
if(isset($_GET["about"]))
{
    $ab = $_GET['about'];
}

$rans='';
if(isset($_GET["remindans"]))
{
    $rans = $_GET['remindans'];
}


$message="password shoud be same";
$message1="error:all entries should be filled";
$message2="error: username already exists.. please choose a unique username";
$message3="error: email id already exists";
if(isset($_GET['submit']))
{
if($un && $em && $g && $pn && $dob && $sl && $ab && $pw && $r && $rans && $cpw && $datab && $webadd)
{  


  $query1="SELECT * FROM users WHERE username='$un'";
//echo $query;
$data=mysqli_query($conn,$query1);
$total=mysqli_num_rows($data);
//echo $total;
if($total>1)
{
    echo "<script type='text/javascript'>alert('$message2');</script>";
}
else{

$query2="SELECT * FROM users WHERE email='$em'";
//echo $query;
$data=mysqli_query($conn,$query2);
$total1=mysqli_num_rows($data);
//echo $total;
if($total1>1)
{
     echo "<script type='text/javascript'>alert('$message3');</script>";
}

else{





if($pw==$cpw){

$query="INSERT INTO users (username,email,gender,mobile_no,dob,selectoption,webadd,databasereq,about,password,remind,remindans) VALUES('$un','$em','$g','$pn','$dob','$sl','$webadd','$datab','$ab','$pw','$r','$rans')";
//echo $query;
$X=mysqli_query($conn,$query);

//echo "value of x is\n ";
 // echo $X;
  if($X) {  
 //echo "you have been sucessfully registered";
  ?>
   <h1 style=color:red;font-style:bold;font-size:1.5em;padding-top:10px;padding-left:20px>Congratulation: you have been sucessfully registered </h1> <br>
    <p style=color:red;font-style:bold;font-size:1.5em;padding-left:10px;>For Login <a href="login.php"><b>click here</b></a> </p> <?php
 }
 
else{
    echo "data does not inserted ";?>
    
    <p style=color:red;font-style:bold;font-size:1.5em;>Log in <a href="login.php"><b>click here</b></a> </p> <?php

}
 }
else{
    echo "<script type='text/javascript'>alert('$message');</script>"; 
  echo "YOU HAVE NOT REGISTERED: PASSWORD SHOULD BE SAME "; ?> 
    <p style=color:red;font-style:bold;font-size:1.5em;>Go back to registration form <a href="registration.php"><b>click here</b></a> </p> <?php  
 }
}
}
}
else
echo "<script type='text/javascript'>alert('$message1');</script>";
}
?>
 
  <!--//  <p style=color:red;font-style:bold;font-size:1.5em;>Log in <a href="login.php"><b>click here</b></a> </p>  -->
  
</body>
</html>
  <!-- http://185.27.134.10/db_structure.php?server=1&db=epiz_24680947_sudhanshu&table=users -->






 