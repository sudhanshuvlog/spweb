  <?php
 //session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>





    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Pacifico|Righteous|Zhi+Mang+Xing&display=swap" rel="stylesheet">
  <link rel ="stylesheet" href="css.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SPweb</title>
  </head>
  <body>
  <div class="registrationpage">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
<a class="navbar-brand" href="new.php">HOME </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="login.php">LOG IN</a>
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



<!--// <head>
//     <title>SPWeb</title>
// </head> 

// <body>-->
 
  
<!-- <h1> WELCOME TO SPweb</h1> -->
 
<p>
 <!-- WE  ARE HERE TO TAKE YOUR BUISNESS ONLINE -->
</p>
 
 <h3 style=color:tomato;font-style:italic;padding-left:20px;> REGISTRATION FORM  </h3><br> 
 <!-- <div style= background-image:url("image/1.jpg")> <!-- ,class="container-fluid" alt="first slide"width= "1444px" height="335px"
   -->  
 
 <form action="index.php" method="GET"> <!--when form would be submited then which site to be run -->
<!--  <php include('errors.php')   -->
  <div class="registrationcolor">  





 




 Username <input type ="text" name="username" value="" placeholder="username"required><br><br>
 
    <label for ="email">Email : </label>
    <input type="email" name="email" placeholder="nanki@gmail.com" required> <br> 
<!-- <h5> please choose a strong password</h5> -->

<label for="gender">Male</label>
  <input type="radio" name="gender"value="m">
  <label for="gender">Female</label>
  <input type="radio" name="gender"value="f"> <br>
 
<label for="mobile_no">phone no</label>
  <input type="mobile_no" name="mobile_no"placeholder="2424****"><br><br>

  <label for ="date">dob </label>
       <input type ="date"name="dob" >  <!--remind you should not provide space in like "date " --><br> <br>
     <label for ="type">what do you want</label>
        <select name="selectoption">
       <option value="0" selected disabled>select</option>
        <option value="webdevelopment">website</option>
        <option value="appdevelopment">app</option>

</select>
 <br> 
<label for ="text">Tell us brief about your buisness</label>
    <input type="text" name="about"   placeholder="website for my general store"required> <br><br> 

    <label for ="webadd">Things which you want to add in your website:</label>
    <input type="text"name="webadd" placeholder="my products,my info,my location" required><br><br>
  
    <label for ="type">Did you want database:</label>
    <select name="databasereq">
    <option value="0" selected disabled>select</option>
        <option value="y">yes,i want user database</option>
        <option value="n">no,i have to make just a frontend website</option>
</select>
  <br><br>
    <label for ="password">Password : </label>
    <input type="password"name="password" placeholder="******" required><br>

   <label for ="confirmpassword">Confirm Password: </label>
    <input type="password" name="confirmpassword" placeholder="******" required><br><br>   

    <label for ="type"> security question</label>
    <select name="remind">
    <option value="0" selected disabled>security question</option>
        <option value=" bfn"> best friend's name</option>
        <option value="fcn">first school's name</option>
        <option value="fc">favourite cartoon</option>
      </select>
      <br>
      <label for="remindans">Answer</label>
  <input type="text" name="remindans"placeholder="----"><br> <br>
 <div class="g-recaptcha" data-sitekey="6LevrL8UAAAAABu8tGTCJZsn52fl6qbTeG5Iee9a"></div> <br> 
  <!-- <input type="submit" value="submit" name=""> -->
  <div id="submit">
  <input type="submit"style="color:blue; padding-left:20px;font-style:italic;" name="submit"> 
 </div>
</div><!-- div of registration color class-->   
 
   <?php
   
 // if (isset($_GET['submit'])) 
  //header('location:login.php');

?>
  <!-- <input type="submit" a href="mainpage.php" name="submit"> <!-- 
  <!-- <a href="mainpage.php" class="button">Click Here</a> <!-- 
  <!-- <button onclick= window.location.href='mainpage.php'>Continue</button> -->
   <p style="color:tomato;"> Already a user? <a href="login.php"><b>Log in</b></a> </p>  
  </form>
  
  <?php
   
   if (isset($_GET['login.php'])) 
   header('location:login.php');

?>
 </div>
    
</body>

</html>
