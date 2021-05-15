<?php

$conn = mysqli_connect('localhost', 'root', '', 'login');

function login($data){
    global $conn;
    $nama = mysqli_real_escape_string($conn, $data['name']);
    $uname = mysqli_real_escape_string($conn, $data['username']);
    $paswd= mysqli_real_escape_string($conn, $data['password']);

//tambahkan data ke database
mysqli_query($conn, "INSERT INTO login WHERE('$nama', '$uname", '$paswd')");

return mysqli_affected_rows($conn);
}
?>