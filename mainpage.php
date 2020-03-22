<?php
session_start();
 //ob_start();
//include("index.php");
 //include("login.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>spweb</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
 <!--//      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
//     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
//     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    
//  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
//   <a class="navbar-brand" href="new.php">Log out</a>
//   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
//     <span class="navbar-toggler-icon"></span>
//   </button>

//   <div class="collapse navbar-collapse" id="navbarSupportedContent">
//     <ul class="navbar-nav mr-auto">
       
//       <li class="nav-item">
//         <a class="nav-link" href="aboutSPweb.php">About SPweb</a>
//       </li>

//       <li class="nav-item">
//         <a class="nav-link" href="contact.php">Contact Us</a>
//       </li>

//       <li class="nav-item dropdown">
//         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
//         Our Services
//         </a>
//         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
//           <a class="dropdown-item" href="registration.php">web development</a>
//           <a class="dropdown-item" href="app.php">app development</a>
//           <div class="dropdown-divider"></div>
//           <a class="dropdown-item" href="app.php">marketing</a>
//         </div>
//       </li>
//       <li class="nav-item">
//         <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
//       </li>
//     </ul>
//     <form class="form-inline my-2 my-lg-0">
//       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
//       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
//     </form>
//   </div>
// </nav>-->


 <?php







 // session_start();
  //include("index.php");

$servername="sql103.epizy.com";
$username="epiz_24680947";
$password="AogqJmWUkq9SoFP";//this password is for security pupose this password is not that $pw
$dbname="epiz_24680947_sudhanshu";
// $confirmpassword="AogqJmWUkq9SoFP";
 //$confirmpassword="";//when i write it then alert method is shown when password and confirm password are diffrent??i am not sure about it
$conn= mysqli_connect($servername,$username, $password,$dbname);
 if($conn){
    //echo "connection sucessfull";
 }
 else{
    die("connection failed because".mysqli_connect_error());
 }
  



$user='';
    if(isset($_GET["username"])) 
    {
        $user = $_GET['username'];
    }
    $pw='';
    if(isset($_GET["password"])) 
    {
        $pw = $_GET['password'];
    }



$message="incorrect username and password combination try again!"; 
  if (isset($_GET['submit']))
 {
// $user=$_GET['username'];
// $pw=$_GET['password'];
 
 

$query="SELECT * FROM users WHERE username='$user' && password='$pw'";
//echo $query;
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//echo $total;
if($total==1)
{ //echo "well";




    ?>
  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="new.php">Log out</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       
       <li class="nav-item">
         <a class="nav-link" href="aboutSPweb.php">About SPweb</a>
       </li>

       <li class="nav-item">
         <a class="nav-link" href="contact.php">Contact Us</a>
       </li>

       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Our Services
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
 <?php 

























  $result=mysqli_fetch_assoc($data);
                             $p= $result['username'];
  //echo $p;
                           //$_SESSION['username']=$user;
    ?>   
    <?php
      echo "welcome ".$p."";                                                    
    //header('location:mainpage.php');
//echo"done";
?>
<br>
<h2 style="color:red;text-align:center;"> Welcome to SPweb </h2><br>
 <h3 style="color:red;text-align:center;"> Any update about your website will be shown here:</h3>
 <br>
<p style="color:red;text-align:center;"> we will mail you for any query please keep an eye on your mail inbox.</p>
<p style="color:red;text-align:center;"> your website link will be send to your mail
  where you can easily give us your website name and domain name</p>
<p style="color:red;text-align:center;"> your website will be made within 10 dayes</p>
<p style="color:red;text-align:center;"> for any suggestion about your website mail us on "pandeysudhanshuup@gmail.com" by introducing your username there.</p>
<p style="color:red;text-align:center;">your first website will be totaly free of cost you have to just pay for domain name and hosting</p>
<p style="color:red;text-align:center;">thanks for using SPweb</p>
 <p style="color:red;text-align:center;">For any query please contact us on "pandeysudhanshuup@gmail.com"</p>
 
<?php

















}
else {
    echo "<script type='text/javascript'>alert('$message');</script>";

 ?>
  
  <p style="color:red;text-align:center;padding-top:30px;"> you have entered wrong details<a href="login.php"><b> Try again!! click here</b></a> </p>

 <?php
 
} 
  
} 
  











//    $p='';
//       if(isset($_GET["username"])) 
//       {
//      //echo $_GET['username'];
//      $p=$_GET['username'];
//       }
      //else echo "error:something went wrong";
 
 
//echo "welcome ". $p ;
//echo "$total";
 //echo "$total";





// $user='';
// if(isset($_GET["username"])){
// $user = $_GET['username'];
// }

//echo "welcome to SPweb".$_SESSION[];
      
    
    // else echo "something went wrong";
    //else{
    //  die("connection failed because".mysqli_connect_error($_SESSION));
    //}

?>
//<!--  <h2 style="color:red;text-align:center;"> Welcome to SPweb </h2><br>
//  <h3 style="color:red;text-align:center;"> Any update about your website will be shown here:</h3>
//  <br>
// <p style="color:red;text-align:center;"> we will mail you for any query please keep an eye on your mail inbox.</p>
// <p style="color:red;text-align:center;"> your website link will be send to your mail
//   where you can easily give us your website name and domain name</p>
// <p style="color:red;text-align:center;"> your website will be made within 10 dayes</p>
// <p style="color:red;text-align:center;"> for any suggestion about your website mail us on "pandeysudhanshuup@gmail.com" by introducing your username there.</p>
// <p style="color:red;text-align:center;">your first website will be totaly free of cost you have to just pay for domain name and hosting</p>
// <p style="color:red;text-align:center;">thanks for using SPweb</p>-->
 
</body>

</html>

 