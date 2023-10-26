<?php
    if(isset($_POST["vehicle1"])){
        echo "Pierwszy checkbox: " . $_POST["vehicle1"]."<br>";
    }
    if(isset($_POST["vehicle2"])){
        echo "Drugi checkbox: " . $_POST["vehicle2"]."<br>";
    }
    if(isset($_POST["favcar"])){
        echo "Trzeci checkbox: " . $_POST["favcar"]."<br>";
    }

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

    $fveh1 = $_POST["vehicle1"];
    $fveh2 = $_POST["vehicle2"];
    $favveh = $_POST["favcar"];


    if (mysqli_select_db($conn, $database)){
        echo "Database $database selected"."<br>";
    }else {
        echo "Error  select database: ". mysqli_error($conn);
    }

    $sql = "ALTER TABLE MyGuest ADD vehicle1 varchar(30);";
    $sql .= "ALTER TABLE MyGuest ADD vehicle2 varchar(30);";

    if (mysqli_multi_query($conn, $sql)) {
        echo "New record created succesfully"."<br";
    }else{
        echo "Error: " . $sql . "<br>".mysqli_error($conn);
    }

    $sql = "UPDATE MyGuest SET vehicle1='$fveh1';"
    $sql .= "UPDATE MyGuest SET vehicle2='$fveh2';"
    
    if (mysqli_multi_query($conn, $sql)) {
        echo "New record created succesfully"."<br";
    }else{
        echo "Error: " . $sql . "<br>".mysqli_error($conn);
    }
?>