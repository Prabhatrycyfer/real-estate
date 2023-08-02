<?php
    
    // servername => localhost
    // username => u848568311_maxland
    // password => svLPpe37mAa;
    // database name => u848568311_maxland
    $conn = mysqli_connect("localhost", "u848568311_maxland", "Maxland@123", "u848568311_maxland");
    
    // Check connection
    if($conn == false){
        die("ERROR: Could not connect.". mysqli_connect_error());
    }

?>