<?php
    $myfile = fopen("webdectionary.tst","w")
                or die("Unable to open file!");
    $txt = "John Doe\n";
    echo fgets($myfile, $txt);
    fclose($myfile);
?>