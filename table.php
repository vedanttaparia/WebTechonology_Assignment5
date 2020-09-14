<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "api.php", true);
    ajax.send();
 
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
 
            var html = "";
            for(var a = 0; a < data.length; a++) {
                var firstName = data[a].F_NAME;
                var lastName = data[a].L_NAME;
                var email = data[a].EMAIL;
                var phone = data[a].PHONE;
                var event = data[a].EVENT;
                var timestamp = data[a].CREATED_AT;
                
 
                html += "<tr>";
                    html += "<td>" + firstName + "</td>";
                    html += "<td>" + lastName + "</td>";
                    html += "<td>" + email + "</td>";
                    html += "<td>" + phone + "</td>";
                    html += "<td>" + event + "</td>";
                    html += "<td>" + timestamp + "</td>";
                    
                html += "</tr>";
            }
            document.getElementById("myTable").innerHTML += html;
        }
    };
</script>
    <title>Restaurant List</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">InternForm</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#register">Registration <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
        <i class="fas fa-align-center">
        <br><br>
        <h1 class="mt-3"><p class="text-center font-italic font-weight-bold">Registered Candidates</p></h1>
        <br>
    </i>
        <br>
        <br>
        <table id="myTable" class="table table-striped mt-5 co">
                <thead class="thread-dark">
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">TimeStamp</th>
                    </tr>
                </thread>
                <tbody class="values"></tbody>
            </table>   
    </div>
</div>
<footer class="footer fixed-bottom" style="background-color: black;height: 10vh;text-align: center;padding: 5px;">
      <div class="container-fluid" style="color: white;padding-left: 20px;  padding-right: 20px;"> 
          <p>&copy; Copyright 2020</p>
          <a href="mailto:vstaparia@mitaoe.ac.in">vstaparia@mitaoe.ac.in</a></p>
      </div>
      </footer>
</body>
</html>