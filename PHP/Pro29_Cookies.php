<?php
    $value = "Vasundhara Laykar";
    setcookie("my_cookie", $value, time() + (86400 * 1), "/");

    if(isset($_COOKIE["my_cookie"])){
        $stored_value = $_COOKIE["my_cookie"];
        echo "Value retrieved from cookie : ". $stored_value. "<br>";
    }else{
        echo "Cookie not set";
    }
?>