<?php
    session_start();

    echo 'Welcome to page #3<br>';

    echo 'Ulubiony kolor: '.$_SESSION['FAVCOLOR'];

    unset( $_SESSION['FAVCOLOR']);
?>