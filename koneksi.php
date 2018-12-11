<?php
$db_host = "localhost:8080";
$db_user = "root";
$db_pass = "";
$db_name = "DatabaseLogin";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    echo 'Gagal Melakukan Melakukan Koneksi ke Database : '.mysqli_connect_error();
}
?>