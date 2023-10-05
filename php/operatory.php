<?php
    $a = 3; //assignment
    $b = &$a; //$b is a reference to $a

    print "$a\n"; //prints 3
    print "$b\n"; //print 3

    $a = 4; //change $a

    print "$a\n"; //prints 4
    print "$b\n"; //prints 4
?>