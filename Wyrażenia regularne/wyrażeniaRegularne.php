<?php
    $wzorzec = '/być/';
    $tekst = "być albo nie być";
    if(preg_match($wzorzec, $tekst) )
        echo "znaleziono wzorzec <br>";
    else
        echo "nie znaleziono wzorca";

    echo "znaleziono:".preg_match_all($wzorzec, $tekst);

    //szukanie wzroca (czy slowo być wystepuje w zdaniu. Jezeli tak to znaleziono else nie znalziono)
?>