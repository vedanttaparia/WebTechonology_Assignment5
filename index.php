<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Assignment_No.5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">InternForm</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="table.php">Registered <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#register">Registration <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" id="top">
        <div class="carousel-item active">
          <img src="5ceea26b4ac19fe44c91c9ea_Everything You Need to Know About It Engineering!.jpg" class="d-block w-100" >
          <div class="carousel-caption d-none d-md-block">
            <h5>Apply for internship today</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="covid.jpg" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Get reply from companies within a week.</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="c1_3607880.jpg" class="d-block w-100" >
          <div class="carousel-caption d-none d-md-block">
            <h5>In the field of cs,it and ee</h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
     </div> 
  </header>
  <div class="container text-center" style="padding-top: 100px;padding-bottom: 200px;">
    <h1 >About us</h1>
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Donec adipiscing tristique risus nec feugiat in fermentum. Erat imperdiet sed euismod nisi. 
       Erat nam at lectus urna duis convallis convallis. Vitae turpis massa sed elementum tempus egestas sed.
        Ut eu sem integer vitae justo eget magna fermentum iaculis. Sagittis id consectetur purus ut faucibus. 
        Malesuada bibendum arcu vitae elementum curabitur. Urna condimentum mattis pellentesque id nibh tortor id aliquet.
         Sed velit dignissim sodales ut eu. Phasellus vestibulum lorem sed risus. Enim tortor at auctor urna.
          Amet nulla facilisi morbi tempus. Aliquam faucibus purus in massa tempor nec feugiat nisl. Sed vulputate odio ut enim blandit volutpat. 
          Turpis egestas integer eget aliquet nibh. Et netus et malesuada fames. Arcu non sodales neque sodales ut etiam sit amet nisl. 
          Pellentesque diam volutpat commodo sed egestas. Ac ut consequat semper viverra.</h3>
  </div>
    <div class="container text-center" style="padding-bottom: 30px;">
      <h1 id="register">Registration form</h1>
    </div>
    <form id="regForm" class="modal-content animate t" style="padding-bottom: 200px;"  action="#" onsubmit="return validateform()">

      <div class="container" style="width: 450px;">
          <br>

          <div class="form-group ma" style="float:left; width:310px">
              <label><b>First Name</b></label>
              <input type="text" name="fname" id="fname" autocomplete="off">
              <small id="fname1"></small>
          </div>
          
          <div class="form-group" style="float:left; width:320px">
              <label><b>Last Name</b></label>
              <input type="text" id="lname" name="lname" autocomplete="off">
              <small id="lname1"></small>
          </div>
          
          <div class="form-group">
              <label ><b>Phone Number</b></label>
              <input type="text" id="phno" name="phno" autocomplete="off" >
              <small id="phno1"></small>
          </div>

          <div class="form-group">
              <label><b>Email</b></label>
              <input type="text" id="email" name="email" autocomplete="off" >
              <small id="email1"></small>
          </div>

          <div class="form-group">
              <label><b>Event Name</b></label>
              <select id="eventname" >
                  <option value='0'>Choose</option>
                  <option value='1'>Computer_Science</option>
                  <option value='2'>Electronic_Engineering</option>
                  <option value='3'>IT</option>
              </select>
              <small id="eventname"></small>
          </div>

          <input type="submit" onclick="javascript:ajax_post()" value="Submit" class="btn btn-dark checkk">

          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      </div>
  </form>
  <br><br>
  <div id="status"></div>
</section>
    <footer class="footer" style="background-color: black;height: 10vh;text-align: center;padding: 5px;">
      <div class="container-fluid" style="color: white;padding-left: 20px;  padding-right: 20px;"> 
          <p>&copy; Copyright 2020</p>
          <a href="mailto:vstaparia@mitaoe.ac.in">vstaparia@mitaoe.ac.in</a></p>
      </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="script.js"></script>
</body>
</html>