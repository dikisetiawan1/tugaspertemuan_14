<?php



$conn = mysqli_connect("localhost", "root", "", "latihan1");


if ($conn == false) {
    echo "Koneksi ke server gagal.";
    die();
}
