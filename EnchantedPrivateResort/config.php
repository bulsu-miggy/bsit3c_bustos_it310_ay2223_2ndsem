<?php

$conn = mysqli_connect("localhost", "root", "", "enchanted");

if (!$conn) {
    echo "Connection Failed";
}