<?php
    // $queue = ["bmw","volvo"];
    //     echo "kolejka: ";
    // var_dump($queue);
    //     echo "<br>Dodajemy element na koniec</br>";
    // array_push($queue, "Toyota");
    // var_dump ($queue);
    // echo "usuwamy pierwszy element<br>";

    // $deleted = array_shift($queue);
    // var_dump($queue);
    // echo "<br>Usunięty lement: ". $deleted;

    $a = array("c"=>"blue");
        array_unshift($a,"a"=>"red", "b"=>"green");
        print_r($a);
?>