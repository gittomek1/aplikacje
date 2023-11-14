<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tomasz_5inb";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die ("Connection failed: ". mysqli_connect_error());

    }
    //echo "Connected succesfully";

    $data = $_POST["data"];
    $iloscOsob = $_POST["ile_osob"];
    $nrTel = $_POST["numer_telefonu"];

    $sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data', '$iloscOsob', '$nrTel');";
    if (mysqli_query($conn, $sql)) {
        echo "Dodano rezerwacje do bazy";
    }else{
        echo "Error: " . mysqli_error();
    }


    


?>