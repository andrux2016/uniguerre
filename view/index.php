<?php

if (filesize("config.php") == 0) {
    echo "config non rempli";
} else {
    header("location: login.php");
}
?>