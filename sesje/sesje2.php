<?php
    session_start();

    echo 'Welcome to page #2<br>';

    echo 'Ulubiony kolor: '.$_SESSION['FAVCOLOR'];
    echo 'Ulubione zwierze: '.$_SESSION['ANIMAL'] . '<br>';
    echo date ('Y m d H:i:s', $_SESSION['TIME']) . '<br>';

    echo $_SESSION['bzdura'];
?>