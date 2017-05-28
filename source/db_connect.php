<?php
include_once 'psl_config.php';   
global $mysqli;
$mysqli = new mysqli(HOST, USER, PASSWORD,DATABASE);
if ($mysqli->connect_error) {
    echo "Error de conexión";
}
?>