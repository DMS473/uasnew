
<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "uas_platform";

// Create connection
$conn =  mysqli_connect('localhost', 'root', 'admin', 'uas_platform');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($conn){
  echo "koneksi berhasil unpam";
}

$t=time();
$d=date("Y-m-d",$t);
// $f=strtotime($d);

$mysql = "INSERT INTO pinjams (user_id, book_id, start) VALUES ('"
    . $_POST['user_id'] ."','"
    // . $f ."','"
    . $_POST['book_id'] ."','"
    . $d. "');";

    if ($conn->query($mysql) === TRUE) {
        echo "<script>
        alert('Selamat, anda telah terdaftar');
        window.location.href='dashboardAdmin.php';
        </script>";
      } else {

        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>