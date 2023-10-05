<?php
    // $x = 1;

    // while ($x <= 5) {
    //     echo "The number is: $x <br>";
    //     $x++; //increment
    // }

    echo "<style>
    table, tr, td {
        border: 1px solid;
        width: 10%;
        border-collapse: collapse;
    }
    </style>";


    $x = 10;
    echo "<table >\n";
    while ($x >= 0) {
        echo "<tr><td> The number is: <br>" .$x. "</tr></td>\n";
        $x -=2;
    }
    echo "</table>";

    
?>