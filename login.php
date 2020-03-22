 <?php
 // session_start();
 ob_start();
 //include("mainpage.php");
 ?>


<!doctype html>
<html lang="en">
  <head>
  <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Pacifico|Righteous|Zhi+Mang+Xing&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Modak|Pacifico|Righteous|Zhi+Mang+Xing&display=swap" rel="stylesheet"> 
  <link rel ="stylesheet"href="css.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SPweb</title>
  </head>
  <body>
    
  <div class="loginpage">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="new.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="registration.php">Register Here<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutSPweb.php">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        our services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registration.php">web development</a>
          <a class="dropdown-item" href="registration.php">app development</a>
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
  <h1 style=color:green;font-style:bold;>LOGIN PAGE</h1>
  <div class="container-fluid">
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner"> 
<div class="carousel-item active">
 <!-- <img src="image/webn1.jpg" class="d-block" alt="first slide" width= "1444px" height="335px"> -->
      <img src="image/webn1.jpg" class="container-fluid" alt="first slide"width= "1444px" height="335px" >
    </div>
    <div class="carousel-item">
      <img src="image/webn2.jpg" class="container-fluid"alt="second slide"width= "1444px" height="335px" >
    </div>
    <div class="carousel-item">
      <img src="image/webn3.jpg" class="container-fluid"alt="third slide"width= "1444px" height="335px" >
    </div>
    
    <div class="carousel-item">
      <img src="image/webn4.jpg" class="container-fluid"alt="four slide"width= "1444px" height="335px">
    </div>
    <div class="carousel-item">
      <img src="image/webn5.jpg" class="container-fluid"alt="five slide"width= "1444px" height="335px">
    </div>
    <div class="carousel-item">
      <img src="image/webn6.jpg" class="container-fluid"alt="six slide"width= "1444px" height="335px">
    </div>
      <div class="carousel-item">
      <img src="image/webn7.jpg" class="container-fluid"alt="seven slide"width= "1444px" height="335px">
    </div>
    <div class="carousel-item">
      <img src="image/webn10.jpg" class="container-fluid"alt="eight slide"width= "1444px" height="335px">
    </div>
    <div class="carousel-item">
      <img src="image/webn11.jpg" class="container-fluid"alt="eight slide"width= "1444px" height="335px">
    </div>
    <div class="carousel-item">
      <img src="image/webn12.jpg" class="container-fluid"alt="eight slide"width= "1444px" height="335px">
    </div>
    <div class="carousel-item">
      <img src="image/webn13.jpg" class="container-fluid"alt="eight slide"width= "1444px" height="335px">
    </div>
       </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  <!-- <img src="image/dog1.jpg" class="img-fluid" alt="Responsive image"> -->
</div>
</div>















 
<h3 style=color:red;font-style:italic;>fill below entries to login</h3>
  
 <form action="mainpage.php" method="GET">  
 <div class="logincolor">
 Username <input type ="text" name="username" value=""><br>
 <label for ="password">Password: </label>
<input type="password"name="password" placeholder="******" required> <br>
<div id="submit">
<input type="submit" name="submit"> 
</div> 
   <p> new user? <a href="registration.php"><b>register here</b></a> </p> 
   <p> forget password? <a href="forgetpassword1.php"><b>click here</b></a> </p>
  </form>
  </div>
  <?php
// $conn1='';
// if(isset($_GET[$conn])){
// $conn1 = $_GET[$conn];
// }

$servername="sql103.epizy.com";
$username="epiz_24680947";
$password="AogqJmWUkq9SoFP";//this password is for security pupose this password is not that $pw
$dbname="epiz_24680947_sudhanshu";
// $confirmpassword="AogqJmWUkq9SoFP";

//$confirmpassword="";//when i write it then alert method is shown when password and confirm password are diffrent??i am not sure about it
$conn= mysqli_connect($servername,$username, $password,$dbname);
 if($conn){
    // echo "connection sucessfull";
 }
 else{
    die("connection failed because".mysqli_connect_error());
 }

//  $user='';
//     if(isset($_GET["username"])) 
//     {
//         $user = $_GET['username'];
//     }
//     $pw='';
//     if(isset($_GET["password"])) 
//     {
//         $pw = $_GET['password'];
//     }



// $message="incorrect username and password combination try again!"; 
//   if (isset($_GET['submit']))
//  {
// // $user=$_GET['username'];
// // $pw=$_GET['password'];
 
// $query="SELECT * FROM users WHERE username='$user' && password='$pw'";
// //echo $query;
// $data=mysqli_query($conn,$query);
// $total=mysqli_num_rows($data);
// echo $total;
// if($total==1)
// {// echo "well";
//   $result=mysqli_fetch_assoc($data);
//                              $p= $result['username'];
//   //echo $p;
//                            $_SESSION['username']=$user;
                                                          
//    // header('location:mainpage.php');
// echo"done";
// }
// else {
//     echo "<script type='text/javascript'>alert('$message');</script>";

// } 
  
// } 
  
  
 ?>



</div>
</body>

</html>




 