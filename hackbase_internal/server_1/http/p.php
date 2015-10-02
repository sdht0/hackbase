<?php

function deleteCookie($name) {
    if (isset($_COOKIE[$name])) {
            unset($_COOKIE[$name]);
            setcookie($name, null, -1);
            return true;
        } else {
            return false;
        }
}
var_dump($_COOKIE);
deleteCookie("TestCookie1");
var_dump($_COOKIE);
echo "p";