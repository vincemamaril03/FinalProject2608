<?php

@include 'config.php';

if(isset($_POST['submit'])){

   // form fields
   $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
   $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   // checks existing user accounts
   $select = " SELECT * FROM user_form WHERE email = '$email' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'User already exist!';

   }else{
         $insert = "INSERT INTO user_form(first_name, last_name, phonenumber, email, password) VALUES('$first_name', '$last_name', '$phonenumber','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

   <!-- bootstrap and jquery  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body>

   <!-- navbar -->
   <nav class="navbar navbar-dark" style="background-color: #130a32;">
      <div class="container-fluid">

         <!-- website logo -->
         <div class="navbar-header">
            <a href="homepage.html" id="navbar-logo">
               <img class="navbar-brand img-fluid" src="advocanet.png" alt="" width="30" height="30">
            </a>   
         </div>

         <!-- navbar buttons -->
         <div class = "navBarBtns">
                    
         </div>                
      </div>        
   </nav>

   <!-- body link to buttons -->
   <div class="row">
      <div style="text-align: right;" class="col-md-6">                    
         <img style="text-align: left;" class="pic" src="DA_site_image.png">
      </div>
      
      <div class="col-md-6">

         <!-- start of form -->
         <main class="form-login">
            <form action="" method="post">
               <h1 id="welcome"><b>Sign Up</b></h1>
               <br/>
               
               <!-- php for failed sign up attempt -->
               <div style="color: #73373B;"><b>
               <?php
                  if(isset($error)){
                     foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                     };
                  };
               ?>
               </b>
               </div>

               <!-- form: first_name -->
               <div class="row g-2">
               <div class="col-md">
               <div class="form-floating">
                  <input type="first_name" class="form-control" id="first_name" name="first_name" placeholder="FirstName" required>
                  <label for="floatingInput">First Name</label>
               </div>
               </div>
               <br/>
               
               
               <!-- form: last_name -->
               <div class="col-md">
               <div class="form-floating">
                  <input type="last_name" class="form-control" id="last_name" name="last_name" placeholder="LastName" required>
                  <label for="floatingInput">Last Name</label>
               </div>
               </div>
               </div>
               </br>
         
               <!-- form: phone number -->
               <div class="form-floating">
                  <input type="phonenumber" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number" required>
                  <label for="floatingInput">Phone Number (09xx xxx xxxx)</label>
               </div>
               <br/>
               
               <!-- form: email -->
               <div class="form-floating">
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                  <label for="floatingInput">Email address</label>
               </div>
               <br/>
               
               <!-- form: password -->
               <div class="form-floating">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  <label for="floatingPassword">Password</label>
               </div>
               
               <!-- form: submit button -->
               <button class="btn btn-lg btn-light mt-3" name="submit" type="submit" >Sign Up</button>
               <br/><br/>
			
               <h6>Already have an account?  <a href="login_form.php">Login.</a></h6>
            </form>
         </main>
      
      </div>
   </div>
	
   <br> <br>

</body>
</html>