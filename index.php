<?php
include 'config.php';

$sql = "SELECT * FROM jemaat";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Jemaat Gereja</title>
</head>
<body>
    <h1>Daftar Jemaat</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['sektor']}</td>
                        <td>{$row['alamat']}</td>
                        <td>{$row['no.hp']}</td>
                        
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
</body>
</html>
