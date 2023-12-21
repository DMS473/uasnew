<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Lihat Data</title>
  </head>
  <body>
    <h2>Daftar Buku</h2> <br>
      <table border="1">
          <tr align="center">
            <td width="31">id</td>
            <td width="85">judul</td>
            <!-- <td width="50">image</td> -->
            <td width="82">stock</td>
            <!-- <td width="70">password</td>
            <td width="41">role</td>
            <td width="41">usia</td>
            <td width="50">jk</td> -->
            <!-- <td width="100">email</td>
            <td width="100">notel</td> -->
            <td colspan="2" width="86">aksi</td>
          </tr>
        </table>

    <?php
//ambil file koneksi
include "koneksi.php";

// masukan koneksi DB
$select = mysqli_query($conn, "select * FROM books");


while ($buff = mysqli_fetch_array($select)) { ?>

      <table border="1">
        <tr align="center">
          <td width="31"><?php echo $buff['id']; ?></td>
          <td width="85"><?php echo $buff['judul']; ?></td>
          <!-- <td width="50"><?php echo $buff['image']; ?></td> -->
          <td width="82"><?php echo $buff['stock']; ?></td>
          <!-- <td width="70"><?php echo $buff['password']; ?></td>
          <td width="41"><?php echo $buff['role']; ?></td>
          <td width="41"><?php echo $buff['usia']; ?></td>
          <td width="50"><?php echo $buff['jk']; ?></td> -->
          <!-- <td width="100"><?php echo $buff['email']; ?></td>
          <td width="100"><?php echo $buff['notel']; ?></td> -->
          <td width="40"><a href="?id=<?php echo $buff['id']; ?>&module=editBuku#pos">edit</a></td>
          <td width="40"><a href="deleteBuku.php?id=<?php echo $buff['id']; ?>">hapus</a></td>
        </tr>
      </table>

  <?php
}
;
?>

<br>
      <a href="index.php"><---- Kembali ke Index</a>
  </body>
</html>