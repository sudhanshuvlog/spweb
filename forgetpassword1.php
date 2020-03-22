 <?php
 //session_start();
 //include("index.php");
?>
<!doctype html>
<html lang="en">
  <head> 


  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel ="stylesheet"href="css.css">
    <title>SPweb</title>
  </head>





   
  <body>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="login.php">Log in</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="new.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutSPweb.php">about spweb</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">contact us</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        our services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registration.php">web development</a>
          <a class="dropdown-item" href="app.php">app development</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="app.php">marketing</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
   


















<div class="forgetpassword">

<form action="" method="GET"> 
Username <input type ="text" name="username" value="" placeholder="username"><br><br>
<label for ="type"> security question</label>
    <select name="remind">
    <option value="0" selected disabled>security question</option>
        <option value=" bfn"> best friend's name</option>
        <option value="fcn">first school name</option>
        <option value="fc">favourite cartoon</option>
      </select>
      <br><br>
      <label for="remindans">Answer</label>
  <input type="text" name="remindans"placeholder="----"><br>
  <!-- <input type="submit" name="button_1" value="submit"> -->

<!-- </form> -->
<?php 
$servername="sql103.epizy.com";
$username="epiz_24680947";
$password="AogqJmWUkq9SoFP";//this password is for security pupose this password is not that $pw
$dbname="epiz_24680947_sudhanshu";
// $confirmpassword="AogqJmWUkq9SoFP";
 //$confirmpassword="";//when i write it then alert method is shown when password and confirm password are diffrent??i am not sure about it
 $message1="all entries should be filled"; 
 $conn= mysqli_connect($servername,$username, $password,$dbname);
 if($conn){
   // echo "connection sucessfull";
 }
 else{
    die("connection failed because".mysqli_connect_error());
 }
//   $username=$_GET['username'];
//   $rans=$_GET['remindans'];
//   $r=$_GET['remind'];

     $username='';
     if(isset($_GET["username"])) 
     {
         $username = $_GET['username'];
     }
      $rans='';
      if(isset($_GET["remindans"])) 
      {
         $rans = $_GET['remindans'];
     }
     $r='';
     if(isset($_GET["remind"])) 
     {
         $r = $_GET['remind'];
     }
  //  //if($username && $rans && $r)

 //if(isset($_GET['button_1']))
 //{  
    // $user=$_GET['username'];
  // }  // $r=$_GET['remind'];    
    // $rans=$_GET['remindans'];
    //   $username='';
    // if(isset($_GET["username"])) 
    // {
    //     $username = $_GET['username'];
    // }
    //   $rans='';
    //   if(isset($_GET["remindans"])) 
    //   {
    //       $rans = $_GET['remindans'];
    //   }
    // $r='';
    // if(isset($_GET["remind"])) 
    // {
    //     $r = $_GET['remind'];
    // }  
 
 
//if($user && $rans && $r)
//{
    $query="SELECT * FROM users WHERE  username='$username' && remindans='$rans' && remind='$r'" or die (mysqli_error($conn));
 $data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//echo $total;
$row=mysqli_fetch_array($data);
// if($total==1){
// echo "you are true ";
// echo "your old password is".$row['password'];
// }
//else "you are wrong";
//else echo "<script type='text/javascript'>alert('$message1');</script>";

?>
<!-- <form action="" method="GET"> --><br>
<label for="password">Enter new password</label>
<input type="password" name="password"placeholder="----"><br><br>
<!-- <input type="submit" name="submit"> -->
<!-- <button type="submit"value="submit1">update</button>   -->
<input type="submit" name="button_2" value="submit">
<!-- <h3> everything is right till here</h3> -->
</form>  
<?php

 
 if(isset($_GET['button_2'])){ 
   
  $message="security question and answer does not match";
  if($total==1){
    //echo "you are true ";
    echo "  your old password was ".$row['password'];
    

  //echo " everything is right till here";
$npw='';
if(isset($_GET["password"])) 
//{
    $npw = $_GET['password'];
   // echo "everything is going good";
  // $query1="INSERT INTO users (username,password) VALUES('$username','$npw')"or die (mysqli_error($query));
  // $query1="INSERT INTO users (username,email,gender,mobile_no,dob,selectoption,about,password,remind,remindans) VALUES('$un','$em','$g','$pn','$dob','$sl','$ab','$npw','$r','$rans')";
  // $rans='';
  // if(isset($_GET["remindans"])) 
  // {
  //     $rans = $_GET['remindans'];
  // }
$query_1 = "UPDATE `users` SET PASSWORD='$npw' WHERE REMINDANS= '$rans' ";
$X=mysqli_query($conn,$query_1);
 //echo $query_1;
//echo "value of x is\n "; 
//echo $X;
if($X){
  echo "\r";
  echo "   password changed sucessfully";
  ?>
 
  <p style=color:red;font-style:bold;font-size:1em;>For Login <a href="login.php"><b>click here</b></a> </p> 
  <?php
}
else{
    echo "data does not inserted ";
 // echo "wow we have done";
}
//}
//else    echo "something went wrong";
// else echo "something went wrong";
}
else{
    echo "<script type='text/javascript'>alert('$message');</script>"; ;
}
 }

else {
     echo " Please fill the above entries " ;
 }
?>
</div>
 </body>
   </html>
 