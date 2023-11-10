<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Wędkowanie</title>
        <link rel="stylesheet" href="styl_1.css">
    </head>
    <body>
        <div id="banner">
            <h1>Portal dla wędkarzy</h1>
        </div>
        <div id="prawy">
            <img src="ryba1.jpg" alt="Sum"><br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
        <div id="lewy1">
            <h3>Ryby zamieszkujące rzeki</h3>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "wedkowanie";

                $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (!$conn) {
                    die("error".mysqli_connect_errno());
                }

                $sql = "SELECT nazwa, akwen, wojewodztwo FROM ryby, lowisko WHERE ryby.id=ryby_id and rodzaj=3;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result)> 0){
                    echo "<ol>";
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<li>" . $row[0] . "pływa w rzece" . $row[1] . "," . $row[2] . "</li>"; 
                    }
                    echo "</ol>";
                }
                mysqli_close($conn);


            ?>

        </div>
        <div id="lewy2">
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr>
                    <th>Lp</th>
                    <th>Gatunek</th>
                    <th>Występowanie</th>
                </tr>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "wedkowanie";
    
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                        die("error".mysqli_connect_errno());
                    }

                    $sql = "SELECT id, nazwa, wystepowanie FROM ryby where ryby.styl_zycia=1;";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result)> 0){
                        while ($row = mysqli_fetch_row($result)) {
                            echo "<tr>"."<td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>"; 
                        }

                    }
                    mysqli_close($conn);

                ?>

                
            </table>
        </div>
        <div id="stopka">
            <p>Stronę Wykonał 112121212121211
            </p>
        </div>
    </body>
</html>
