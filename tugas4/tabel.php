<?php
    include "koneksi.php";
    $data = $koneksi->query("SELECT * FROM `petugas`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pengaduan Masyarakat</h1>
    <table border="1">
        <tr>
            <th>id_petugas</th>
            <th>nama_petugas</th>
            <th>username</th>
            <th>password</th>
            <th>telp</th>
            <th>level</th> 
        </tr>
    <?php foreach($data as $d) : ?>
        <tr>
            <td><?php echo $d['id_petugas'] ?></td>
            <td><?php echo $d['nama_petugas'] ?></td>
            <td><?php echo $d['username'] ?></td>
            <td><?php echo $d['password'] ?></td>
            <td><?php echo $d['telp'] ?></td>
            <td><?php echo $d['level'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>