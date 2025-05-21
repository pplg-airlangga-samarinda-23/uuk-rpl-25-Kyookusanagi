<?php
    require "koneksi.php";

    if ($_SERVER ["REQUEST_METHOD"] == "POST" ) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);


        $sql = "INSERT INTO users(nama_lengkap, username, password) values (?, ?, ?)";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("sss", $nama_lengkap, $username, $password );
        $stmt->execute();
        


        header("login.php");
    }
    require "tampilan/tampilan_register.php";
?>



