<?php
    $conn = mysqli_connect("localhost", "root", "", "nims");
    
    if(!$conn){
        echo "Error connecting to the database";
        exit();
    }
return $conn;