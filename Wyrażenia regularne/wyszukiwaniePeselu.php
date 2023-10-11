<?php
    $wzorzec = '/\d{11}/';
    $tekst = "12345678910";
    if(preg_match($wzorzec, $tekst) )
        echo "znaleziono pesel";
    else
        echo" nie znaleziono peselu";
?>