<?php
    $conn = mysqli_connect('localhost', 'id14162883_ved' , '|($$f8Krk]Um', 'id14162883_assign5_ved' );

    echo 'Thank you '. $_POST['fname'] . ' ' . $_POST['lname'] . ', says the PHP file';
    $fname=$_POST['fname'] ;
    $lname=$_POST['lname'] ;
    $email=$_POST['email'];
    $phone=$_POST['phno'] ;
    $event=$_POST['eventname'];

    

    if(!$conn){
        echo 'connection error: ' . mysqli_connect_error();
    }

    $sql="INSERT INTO `table`(`F_NAME`, `L_NAME`, `PHONE`, `EMAIL`, `EVENT`) VALUES ('$fname','$lname','$phone','$email','$event')";

   if(mysqli_query($conn,$sql)){
    echo '                               ';

    echo 'SQL executed';
   }
   else{
       echo '/n not executed';
   }



?>