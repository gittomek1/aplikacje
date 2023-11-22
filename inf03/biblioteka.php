<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id = "baner">
        <h1>Biblioteka w Książkowicach Wielkich</h1>
    </div>
    <div id = "content">
        <div id = "lewy">
        <h3>Polecamy dzieła autorów:</h3>
            <ol>
                <?php
                    $conn = mysqli_connect("localhost","root","","biblioteka");

                    if(!$conn){
                        die("error: ". mysqli_connect_error());
                    }

                    $sql = "SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC;";
                    $rez = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($rez)>0){
                        while($row = mysqli_fetch_row($rez)){
                            echo "<li>".$row[0]." ".$row[1]."</li>";
                        }
                    }
                    mysqli_close($conn);
                ?>
            </ol>
        </div>
        <div id = "srodkowy">
            <h3>ul. Czytelnicza 25, <br> Książkowice Wielkie</h3>
            <p>
            Napisz do nas: <a href = "mailto:sekretariat@biblioteka.pl">sekretariat@biblioteka.pl</a>
            </p>
            <img src = "biblioteka.png" alt  = "książki">
        </div>
        <div id = prawy>
            <div id = "prawy1">
                <h3>Dodaj czytelnika</h3>
                <form method = "post" action = "biblioteka.php">
                <label for="imie">imię:</label>
                <input type="text" id="imie" name="imie"><br> 

                <label for="nazwisko">nazwisko:</label>
                <input type="text" id="nazwisko" name = "nazwisko"><br>
                
                <label for="symbol">symbol:</label>
                <input type="number" id="symbol" name="symbol"><br>

                <input type = "submit" value = "DODAJ">

                </form>
            </div>
            <div id = "prawy2">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $imie = $_POST["imie"];
                        $nazwisko = $_POST["nazwisko"];

                        $conn = mysqli_connect("localhost","root","","biblioteka");

                        $sql = "INSERT INTO czytelnicy (imie, nazwisko) VALUES ('$imie', '$nazwisko');";
                        $rez = mysqli_query($conn, $sql);
                        if($rez){
                            echo "Czytelnik $imie $nazwisko został dodany do bazy danych";
                        }

                
                    }   
                ?>
            </div>
        </div>
    </div>
    <div id = "stopka">
        <p>Projekt strony: Tomasz Szczygieł</p>
    </div>
    
</body>
</html>