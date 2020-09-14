function ajax_post(){
  // Create our XMLHttpRequest object
  var hr = new XMLHttpRequest();
  // Create some variables we need to send to our PHP file
  var url = "decode.php";
  var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var phno = document.getElementById("phno").value;
    var email = document.getElementById("email").value;
    var e = document.getElementById("eventname");
    var strUser1 = e.options[e.selectedIndex].text;
  var vars = "fname="+fname+"&lname="+lname+"&phno="+phno+"&email="+email+"&eventname="+strUser1;
  console.log(vars);
  hr.open("POST", url, true);
  // Set content type header information for sending url encoded variables in the request
  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // Access the onreadystatechange event for the XMLHttpRequest object
  hr.onreadystatechange = function() {
    if(hr.readyState == 10 && hr.status == 200) {
      var return_data = hr.responseText;
    document.getElementById("status").innerHTML = return_data;
    }
  }
  // Send the data to PHP now... and wait for response to update the status div
  hr.send(vars); // Actually execute the request
  document.getElementById("status").innerHTML = "processing...";
}
function validateform(){
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var phno = document.getElementById("phno").value;
    var email = document.getElementById("email").value
    var e = document.getElementById("eventname");
    var strUser = e.options[e.selectedIndex].value;
    var strUser1 = e.options[e.selectedIndex].text;
    // console.log(strUser1);
    if (strUser === 0) {
        document.getElementById("eventname1").innerHTML = " ** Please Select a Contest";
    // alert("Please select a Contest");
        return false;
    }
    if (fname === "") {
        document.getElementById("fname1").innerHTML =
          " ** Please fill the username field";
        setTimeout(() => {
          document.getElementById("fname1").innerHTML = " ";
        }, 2000);
        return false;
      }
      if (fname.length <= 2 || fname.length > 20) {
        document.getElementById("fname1").innerHTML =
          " ** Name length must be between 2 and 20";
        setTimeout(() => {
          document.getElementById("fname1").innerHTML = " ";
        }, 2000);
        return false;
      }
      if (!isNaN(fname)) {
        document.getElementById("fname1").innerHTML =
          "only characters are allowed";
        setTimeout(() => {
          document.getElementById("fname1").innerHTML = " ";
        }, 2000);
        return false;
    }
    if (lname === "") {
        document.getElementById("lname1").innerHTML =
          " ** Please fill the username field";
        setTimeout(() => {
          document.getElementById("lname1").innerHTML = " ";
        }, 2000);
        return false;
      }
      if (lname.length <= 2 || lname.length > 20) {
        document.getElementById("lname1").innerHTML =
          " ** Name length must be between 2 and 20";
        setTimeout(() => {
          document.getElementById("lname1").innerHTML = " ";
        }, 2000);
        return false;
      }
      if (!isNaN(lname)) {
        document.getElementById("lname1").innerHTML =
          "only characters are allowed";
        setTimeout(() => {
          document.getElementById("lname1").innerHTML = " ";
        }, 2000);
        return false;}
    if (phno === "") {
        document.getElementById("phno1").innerHTML =
          "Please fill the mobile number";
        setTimeout(() => {
          document.getElementById("phno1").innerHTML = " ";
        }, 2000);
    
        return false;
      }
      if (isNaN(phno)) {
        document.getElementById("phno1").innerHTML =
          "user must write digits only not characters";
        setTimeout(() => {
          document.getElementById("phno1").innerHTML = " ";
        }, 2000);
    
        return false;
      }
      if (phno.length != 10) {
        document.getElementById("phno1").innerHTML =
          "Mobile Number must be 10 digits only";
        setTimeout(() => {
          document.getElementById("phno1").innerHTML = " ";
        }, 2000);
    
        return false;
      }
    
      if (email === "") {
        document.getElementById("email1").innerHTML =
          "Please fill the email idx` field";
        setTimeout(() => {
          document.getElementById("email1").innerHTML = " ";
        }, 2000);
    
        return false;
      }
      if (email.indexOf("@") <= 0) {
        document.getElementById("email1").innerHTML = "@ Invalid Position";
        setTimeout(() => {
          document.getElementById("email1").innerHTML = " ";
        }, 2000);
    
        return false;
      }
    
      if (
        email.charAt(email.length - 4) != "." &&
        email.charAt(email.length - 3) != "."
      ) {
        document.getElementById("email1").innerHTML = " . Invalid Email";
        setTimeout(() => {
          document.getElementById("email1").innerHTML = "";
        }, 2000);
    
        return false;
      }
    
  document.getElementById("fname").value = "";
  document.getElementById("lname").value = "";
  document.getElementById("phno").value = "";
  document.getElementById("email").value = "";
  document.getElementById("eventname").value = "0";

  
}