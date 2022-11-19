<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   // form fields
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

         $_SESSION['user_name'] = $row['first_name'];
         header('location:user_page.php');
   }

   else{
      $error[] = 'Incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

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
      <div class="col-md-6">

      <!-- start of form -->
      <main class="form-login">
            <form action="" method="post">
               <h1 id="welcome"><b>Welcome back! We have some jobs for you.</b></h1>
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
               <button class="btn btn-lg btn-light mt-3" name="submit" type="submit">Login</button>
               <br/><br/>
			
               <h6>Don't have an account?  <a href="signup_form.php">Sign Up.</a></h6>
            </form>
         </main>

      </div>
         <div class="col-md-6">
            <img style="text-align: left;" class="pic" src="DA_site_image.png">
         </div>
   
   </div>
   <br> <br>

</body>
</html>
