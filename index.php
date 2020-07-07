<?php

$title = 'Data Barang';
include_once 'koneksi.php';


$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);



include_once 'header.php';

echo '<a href="tambah_barang.php">Tambah Barang</a>';
if ($result) :
?>
    <table>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Katagori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th colspan="2">Aksi</th>

        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_array($result)) : ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo "img src=\"{$row['gambar']}\" />"; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kategori']; ?></td>
                <td><?php echo $row['harga_jual']; ?></td>
                <td><?php echo $row['harga_beli']; ?></td>
                <td><?php echo $row['stok']; ?></td>
                <td>
                    <a href="edit_barang.php?id=<?php echo $row['id_barang']; ?>">Edit</a>
                </td>
                <td>
                    <a href="hapus_barang.php?id=<?php echo $row['id_barang']; ?>">Hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>
<?php
endif;

include_once 'footer.php';

?>
