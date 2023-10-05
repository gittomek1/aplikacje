<?php
    $cookie_name = "user";
    setcookie("user","",time() - 3600);
    if (!isset($_COOKIE[$cookie_name])){
        echo "Cookie named '".$cookie_name. "' is not set!";
    } else {
        echo "Cookie '".$cookie_name."' is set!<br>";
        echo "Value is: ".$_COOKIE[$cookie_name];   }
?>