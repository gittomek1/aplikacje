<?php
    $myfile = fopen("webdectionary.tst","r")
                or die("Unable to open file!");
    echo fread($myfile, filesize("webdictionary.txt"));
    fclose($myfile);
?>