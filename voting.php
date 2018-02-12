<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "voting";

  $connect = mysqli_connect($host, $user, $pass, $db);

  if (!$connect) {
    die("koneksi ke database gagal!");
  }

  if (isset($_POST["kirimvote"])) {

    $pilihan = $_POST["pilihan"];

    $sql   = "INSERT INTO data (pilihan) VALUES('$pilihan')";
    $query = mysqli_query($connect, $sql);

    if ($query) {
      header("Location: index.php");
    } else {
      die("gagal!");
    }

  }

  $query1      = mysqli_query($connect, "SELECT * FROM data WHERE pilihan='sangat buruk'");
  $sangatburuk = mysqli_num_rows($query1);

  $query2      = mysqli_query($connect, "SELECT * FROM data WHERE pilihan='buruk'");
  $buruk       = mysqli_num_rows($query2);

  $query3      = mysqli_query($connect, "SELECT * FROM data WHERE pilihan='lumayan'");
  $lumayan     = mysqli_num_rows($query3);

  $query4      = mysqli_query($connect, "SELECT * FROM data WHERE pilihan='baik'");
  $baik       = mysqli_num_rows($query4);

  $query5      = mysqli_query($connect, "SELECT * FROM data WHERE pilihan='sangat baik'");
  $sangatbaik  = mysqli_num_rows($query5);

?>
