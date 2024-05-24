<?php
function connection(){
    $host =  "localhost";
    $user = "root";
    $password = "";

    $bd = "restaurante";
    $connect = mysqli_connect($host, $user, $password);
    mysqli_select_db($connect, $bd);
    return $connect;
}
?>