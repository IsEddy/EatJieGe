<?php
// Change this to your own configuration
$link = new mysqli('localhost','IsEddy','PASSWORD','20123621');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "Eat JieGe（For gmb only）_rank";
