<!DOCTYPE html>
<html lang="en">
<head>
<title>SAMtech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="ccs/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

 
</head>

<body>
<?php include 'menu.php' ?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image3.jpg" alt="a man with computer" margin="0" padding="0" width="1400" height="500">
      <div class="carousel-caption">
        <h3>Dynamic And Creative</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" alt="Code" width="1400" height="500">
      <div class="carousel-caption">
        <h3>Dynamic And Creative</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image1.jpg" alt="software engineer" width="1400" height="500">
      <div class="carousel-caption">
        <h3>Dynamic And Creative</h3>
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
    <div class="py-5">
       <h2 class="text-center">About Us</h2>
  
    </div>
    <div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/image5.jpg" width="500" height="250 class=img-fluid">
        
        </div>
        <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4"> Welcome to SAMtech.</h2> 
        <p class="py-3">At SAMtech, we are passionate about the transformative power of technology. Founded in
             2023, SAMTECH has been at the forefront of software development, hardware innovation,
              AI solutions. Our journey began with a simple yet profound goal - to harness technology 
              to make a positive impact on the world.</p>
              <a href="about.php"class=btn btn-success">Read More</a>
              </div>
              </div>
              </div>
              </section>


              <section class="my-5">
              <div class="py-5">
              <h2 class="text-center">Our Services</h2>   
            </div>
            <div class="container-fluid">
                <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
  <img class="card-img-top" src="images/softwaredevlopment.webp" alt="Software-devlopment" height="250">
  <div class="card-body">
    <h4 class="card-title">Software Devlopment</h4>
    
    <a href="https://www.atlassian.com/software-development" class="btn btn-primary">See Profile</a>
  </div>
</div>
 </div>
 <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
  <img class="card-img-top" src="images/hardware.jpg" alt="Hardware" height="250">
  <div class="card-body">
    <h4 class="card-title">Hardware Innovation</h4>
    
    <a href="https://www.sciencedirect.com/topics/engineering/hardware-development" class="btn btn-primary">See Profile</a>
  </div>
</div>
 </div>
 <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
  <img class="card-img-top" src="images/AIsolution.jpg" alt="AI solution" height="250">
  <div class="card-body">
    <h4 class="card-title">AI Solution</h4>
    
    <a href="https://chat.openai.com/" class="btn btn-primary">See Profile</a>
  </div>
</div>
 </div>
     </div>
  </div>
 </section>
            <section class="my-5">
              <div class="py-5">
              <h2 class="text-center">Contact Us</h2>   
            </div>
            <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
         
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
          
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
          
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control"></textarea>
                    
            </div>
            <button type="submit" class="btn btn-success">submit</button>

            </div>
</form>

 
      
      
    
  
</section>
<footer>
  <p class= "p-3 bg-dark text-white text-center">@SAMtech production</p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>








    
</body>
</html>