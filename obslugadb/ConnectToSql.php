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
    echo "Connected succesfully";

    $database = "tomasz5inb";
    //Create db
    $sql = "CREATE DATABASE $database";

    if (mysqli_query($conn, $sql)) {
        echo "Database created succesfully";
    } else {
        echo "Error creating database: ". mysqli_error($conn);

    }
    //mysqli_close($conn);
    if (mysqli_select_db($conn, $database)){
        echo "Database $database selected";
    }else {
        echo "Error  select database: ". mysqli_error($conn);
    }

    $sql = "CREATE TABLE MyGuest (
                                id INT(6) UNSIGNED AUTO_INCREMENT
                                    PRIMARY KEY,
                                firstname VARCHAR(30) NOT NULL,
                                lastname VARCHAR(30) NOT NULL,
                                emial VARCHAR(50),
                                reg_date TIMESTAMP DEFAULT
                                        CURRENT_TIMESTAMP ON UPDATE
                                    CURRENT_TIMESTAMP
                                )";
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuest created succesfully";
    } else {
        echo "Error creating table: ". mysqli_error($conn);
    }

    $sql = "INSERT INTO MyGuest (firstname, lastname, email) VALUES ('John','Doe','john@example.com');";
    $sql .= "INSERT INTO MyGuest (firstname, lastname, email) VALUES ('Kamil','Slimak','kamil@slimak.com');";
    $sql .= "INSERT INTO MyGuest (firstname, lastname, email) VALUES ('Patryk','Rozgwiazda','patryk@example.rozgwiazda');";
    $sql .= "INSERT INTO MyGuest (firstname, lastname, email) VALUES ('Bob','Budowniczy','bob@budowniczy.com');";
    
    
    if (mysqli_multi_query($conn, $sql)) {
        echo "New record created succesfully";
    }else{
        echo "Error: " . $sql . "<br>".mysqli_error($conn);
    }

    $sql = 'SELECT id, firstname, lastname FROM MyGuest';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0 ) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: ".$row["id"]. " - Name: " . $row['firstname']. " ". $row['lastname']. '<br>';
        }
    }else{
        echo "0 results";
    }
?>