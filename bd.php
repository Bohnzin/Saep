<?php

$conn = mysqli_connect("localhost", "root", "root", "saep_bd");
if(!$conn) {
    die("Connection failed" . mysqli_connect_error());
} else {
    echo "Ok";
}

?>