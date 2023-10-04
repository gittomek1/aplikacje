<?php
    session_start();

    echo 'Welcome to page #1';

    $_SESSION['FAVCOLOR'] = 'blue';
    $_SESSION['ANIMAL'] = 'dog';
    $_SESSION['TIME'] = time();


    echo '<br><a href = "sesje2.php">Page 2</a>';
?>