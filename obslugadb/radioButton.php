<?php
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


    $fname = $_POST["fname"];
    $surname=$_POST["surname"];
    $favLanguage = $_POST["favLanguage"];


    if (mysqli_select_db($conn, $database)){
        echo "Database $database selected"."<br>";
    }else {
        echo "Error  select database: ". mysqli_error($conn);
    }

    $sql = "INSERT INTO MyGuests(firstname, lastname, favLanguage) VALUES ('$fname', '$surname','$favLanguage');";
    if (mysqli_query($conn, $sql)) {
        echo "New record created succenfully";
    } else {
        echo "Error: " . $sql . "<br" . mysqli_error($conn);
    }
?>