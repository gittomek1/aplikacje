<?php
    echo "Welcome ".$_GET['firstname']."<br>";
    echo "this is your last name: ".$_GET['lastname']."<br>";

    $servername = "localhost";
    $username = "root";
    $password = "";

    //create connection
    $conn = mysqli_connect($servername, $username, $password);

    //check connection

    if (!$conn) {
        die ("Connection failed: ". mysqli_connect_error());

    }
    echo "Connected succesfully"."<br>";
    $database = "tomasz5inb";


    $fname = $_GET["firstname"];
    $lname = $_GET["lastname"];


    if (mysqli_select_db($conn, $database)){
        echo "Database $database selected"."<br>";
    }else {
        echo "Error  select database: ". mysqli_error($conn);
    }
    
    $sql = "INSERT INTO MyGuest (firstname, lastname) VALUES ('$fname,'$lname');";
    if (mysqli_query($conn, $sql)) {
        echo "New record created succesfully"."<br";
    }else{
        echo "Error: " . $sql . "<br>".mysqli_error($conn);
    }

?>