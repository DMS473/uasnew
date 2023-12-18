<html>

<head>
    
    <title>Member Page</title>
</head>
<style>
    

    table {
        width: 100%;
    }

    thead {
        background-color: #0000ff;
        color: white;
    }

   

  
</style>

<body>
    <div class="page">
    <form method="GET">
        <input type="text" name="username" value="<?php if(isset($_GET['username'])) { echo $_GET['username']; } ?>" placeholder="Masukkan Username" />
        <input type="submit" name="module" value="searchBuku" />
    </form>
        <h2>HASIL PENCARIAN BUKU</h2><br />
        <table align="center" border="1">
            <thead>
                <tr align="center">
                    <td widht="100">ID</td>
                    <td widht="85">JUDUL</td>
                    <!-- <td widht="99">IMAGE</td> -->
                    <td widht="82">STOCK</td>
                    <!-- <td widht="87">PASSWORD</td>
                    <td widht="41">ROLE</td>
                    <td widht="82">USIA</td>
                    <td widht="128">JENIS KELAMIN</td> -->
                    <!-- <td widht="182">EMAIL</td>
                    <td widht="152">NOMOR TELEPON</td> -->
                    <td colspan="2">AKSI</td>
                </tr>
            </thead>

            <tbody>
                <?php include "koneksi.php";
            if(isset($_GET['username'])) {
                $username = $_GET['username'];
                $sql = "SELECT * FROM books WHERE judul like '%" . $username . "%'";
                $qCari = mysqli_query($conn, $sql);
                while ($dataC = mysqli_fetch_array($qCari)) {
                    echo "<tr>";

                    echo "<td>" . $dataC['id'] . "</td>";
                    echo "<td>" . $dataC['judul'] . "</td>";
                    // echo "<td>" . $dataC['image'] . "</td>";
                    echo "<td>" . $dataC['stock'] . "</td>";
                    // echo "<td>" . $dataC['password'] . "</td>";
                    // echo "<td>" . $dataC['role'] . "</td>";
                    // echo "<td>" . $dataC['usia'] . "</td>";
                    // echo "<td>" . $dataC['jk'] . "</td>";
                    // echo "<td>" . $dataC['email'] . "</td>";
                    // echo "<td>" . $dataC['notel'] . "</td>";
                    echo "<td>";
                    // echo "<a href='edit.php?id=" . $dataC['id'] . "'>Edit</a> | ";
                    echo "<a href='?id=" . $dataC["id"]. "&module=edit#pos'>Edit</a> | ";
                    
                    echo "<a href='delete.php?id=" . $dataC['id'] . "'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                } 
            }
            else {
               
            }
                   
                ?>
            </tbody>
        </table>
        <br>
        </div>

</body>

</html>