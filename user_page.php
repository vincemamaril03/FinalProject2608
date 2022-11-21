<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- website title -->
    <title>Home</title>

    <!-- for proper rendering -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="stylesheet"href="css/bootstrap.css">
	<link rel="stylesheet"href="homepage.css">
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet"href="user_page.css">
</head>

<!-- contents of the web page --> 
<body>
    <!-- creates a navigation bar --> 
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex">
          <a class="navbar-brand" href="homepage.html">
            <img src="logo.png" alt="Logo" height=60% width=60% class="d-inline-block align-text-top">
          </a>
		  
		  <!-- creates a toggle for navbar --> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
		  
          <div class="collapse navbar-collapse" id="navbarNav">
			
			<!-- nav bar links --> 
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
			   <li class="nav-item">
               <a class="nav-link active" aria-current="page" href=""><b>Home</b></a>
        </li>
            <li class="nav-item">
				   <a class="nav-link" href="logout.php"><b>Logout</b></a>
			   </li>
			   
			</ul>

		  </div>
        </div>
      </nav>	
	
	<br/>
	<br/>
   <br/>
	
   <!-- welcome banner -->
	<div class="container" style="color:white;">
	   <h1><center><b>Welcome, <span><?php echo $_SESSION['user_name'] ?></span>!</b></center></h1>	
	</div>
    <center><h6><i>As we enter the world of advocacies, feel free to enjoy and learn the different advocacies that are presented below</i></h6> </center>
</br></br>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex justify-content-center">
              <img id="pic" src="happy family 2.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <img id="pic" src="pollution 1.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <img id="pic" src="relief goods 2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <img id="pic" src="new normal 2.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <img id="pic" src="technology 2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <img id="pic" src="housing 2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br>
    <div class="one">
      <img id="pic" src="happy family 1.jpg" class="img-fluid" alt="">
      <div class="card-body">
        <h1 class="card-title">CHILDREN, YOUTH AND FAMILIES</h1>
        <p class="card-text1">APA encourages the use of psychiatric expertise to stop violence and trauma. <br>We advocate for the early detection of mental health and developmental needs in all contexts, such as child welfare, juvenile justice, pre-K-12 education, and other locations where kids live, learn, play, and develop. <br/>Through its ACT: Raising Safe Kids Program, the APA also educates parents on evidence-based child abuse prevention and early intervention measures.</p>
        <p class="card-text">American Psychological Association - est. July 18, 1992 <br> Advocacy founded: October 2021 - now(on-going)</p><br>
        <p class="card-text2"><i>To know more, click the link: <a href="https://www.apaservices.org/advocacy/children-youth-families"><u>APAservices.org</u></a></i></p>
      </div>
    </div>
    <br>
      <div class="one">  
        <img id="pic" src="pollution 2.jpg" class="img-fluid" alt="">
        <div class="card-body">
          <h1 class="card-title">BREATHELIFE</h1>
          <p class="card-text1">There are numerous ways to quickly and significantly reduce air pollution. BreatheLife offers advice on putting air pollution control measures into action along with knowledge in public health and climate change. <br/>The campaign also backs the international development objectives. Check out the appropriate solution areas for your city, nation, or region.</p>
          <p class="card-text">BreathLife est. - 2016 <br> Advocacy founded: 2016 - now (on-going) </p>
          <p class="card-text2"><i>To know more, click the link: <a href="https://breathelife2030.org"><u>BreathLife.org</u></a></i></p>
        </div>
      </div>
    <br>
    <div class="one">  
      <img id="pic" src="relief goods 1.jpg" class="img-fluid" alt="">
      <div class="card-body">
        <h1 class="card-title">BAYANBAYANIHAN</h1>
        <p class="card-text1">In the National Capital Region and neighboring provinces, the Bayan Bayanihan food program fed 162,000 households in 44 barangays, or about 810,000 individuals (at an average of 5 persons per household).<br> The actual number of households served exceeded the 140,000 that had been projected earlier. <br>It is founded on the Filipino Bayanihan philosophy, or the idea of giving to one's community what one has.</p>
        <p class="card-text"> Bayanbayanihan - est. March 26, 2020 <br> Advocacy founded: March 26, 2020 - May 20, 2020 (ended)</p>
        <p class="card-text2"><i>To know more, click the link: <a href="https://www.adb.org/what-we-do/bayan-bayanihan"><u>adb.org</u></a></i></p>
      </div>
    </div>
    <br>
    <div class="one">  
      <img id="pic" src="new normal 1.jpg" class="img-fluid" alt="">
      <div class="card-body">
        <h1 class="card-title">PRIORITZE, PROTECT, AND PLAN FOR EDUCATION</h1>
        <p class="card-text1">INEE advocacy messages for during and after the COVID-19 pandemic. These messages are designed to influence policy dialogue <br> and debate to ensure access to safe, inclusive, equitable, and quality education for all children affected by conflict and crisis. <br>INEE is an open, global network of members working together within a humanitarian and development framework.</p>
        <p class="card-text"> Inter-agency Network for Education in Emergencies - est. 2000 <br> Advocacy founded: 2000 - now (ongoing) </p>
        <p class="card-text2"><i>To know more, click the link: <a href=" https://inee.org/covid-19/advocacy"><u>inee.org</u></a></i></p>
      </div>
    </div>
    <br>
    <div class="one">  
      <img id="pic" src="technology 1.jpg" class="img-fluid" alt="">
      <div class="card-body">
        <h1 class="card-title">GIRLS WHO CODE</h1>
        <p class="card-text1">A variety of initiatives are available through Girls Who Code to help college-aged students and recent graduates continue their studies in computer science. In order to spark high school students' curiosity and fully engage them, <br> it also develops summer programs for them. The activism supports the discrimination against nonbinary people as well as women who are the targets of prejudice.</p>
        <p class="card-text"> Girls who code - est. 2021 <br> Advocacy founded: 2021 - now (ongoing) </p>
        <p class="card-text2"><i>To know more, click the link: <a href="https://girlswhocode.com/"><u>girlswhocode.com</u></a></i></p>
      </div>
    </div>
    <br>
    <div class="one">  
      <img id="pic" src="housing 1.jpg" class="img-fluid" alt="">
      <div class="card-body">
        <h1 class="card-title">INTERNATIONAL ADVOCACY FOR HOUSING</h1>
        <p class="card-text1">The goal of Habitat for Humanity's Global Policy and Advocacy Agenda is to advance laws that guarantee everyone has access to affordable housing options. <br> Promoting laws that: "Promote secure tenure rights and equal access to land for shelter" is on the agenda. housing to support resilient and responsive communities. Increasing affordability through available house financing esncourage participation from the community and among stakeholders.</p>
        <p class="card-text">  Habitat for Humanity - est. 1976 <br> Advocacy founded: 1976 - now (ongoing) </p>
        <p class="card-text2"><i>To know more, click the link: <a href="https://www.habitat.org/about/advocacy/international"><u>habitat.org</u></a></i></p>
      </div>
    </div>
    <br><br>
    <nav class="navbar navbar-dark" style="background-color: #373b73;">
      <div class="container-fluid">
          <div class="navbar-header">
            <img id="pic2" class="navbar-brand" class="img-fluid" src="logo.png" alt="" >
          </div>                   
        </div>           
      </nav>
	<br/>
  <br/>
  <br/>
  <br/>
	<!-- footer -->
   <footer style="background-color:#D3D4EA;">
</body>
</html>

