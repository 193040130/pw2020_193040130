<?php

function koneksi() {
    $conn = mysqli_connect("localhost", "root","") or die("koneksi ke Db gagal");
    mysqli_select_db($conn, "pw_193040130") or die("Database salah!");

    return $conn;

}


function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn , "$sql");

    $row = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>