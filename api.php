<?php
    //$conn = mysqli_connect('localhost', 'VED' , 'test1234', 'assign5_ved' );
    $conn = mysqli_connect('localhost', 'id14162883_ved' , '|($$f8Krk]Um', 'id14162883_assign5_ved' );

    if(!$conn){
        echo 'connection error: ' . mysqli_connect_error();
    }
    
    $sql = "SELECT * FROM `table` ORDER BY `table`.`EVENT` ASC";

    $result = mysqli_query($conn, $sql);

    

    //while($tabledata = mysqli_fetch_array($result)){
        //print_r($tabledata);
    //};
    while($tabledata = mysqli_fetch_array($result)){
            //print_r($tabledata);
            $jsonarray[]= $tabledata;
    

        //$jsonarray[] = json_encode(array("message1" => $tabledata['F_NAME'],'message2' =>$tabledata['L_NAME'],'message3'=> $tabledata['PHONE']
    //,'message4'=> $tabledata['EMAIL'],'message5'=> $tabledata['EVENT'],'message6'=> $tabledata['CREATED_AT']));

    //print_r($tabledata);

    
    
    //return $jsonarray;
    
    }
    
    echo json_encode($jsonarray);

    mysqli_free_result($result);

    mysqli_close($conn);
?>