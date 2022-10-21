<?php
function open_connection()
{
    $hostname = "103.151.63.30";
    $username = "kelompok3";
    $password = "";
    $dbname = "kelompok3_akademik";
    $koneksi = mysqli_connect($hostname, $username, $password, $dbname);
    return $koneksi;
}