<?php
session_start();
require 'koneksi.php';
ceklogin();
cekadmin();
$id = $_POST['id_prodi'];
$prodi = $_POST['namaprodi'];

//echo 'nama prodinya adalah: ' . $prodi ;

//$query = "INSERT INTO prodi (Nama_Prodi) VALUES ('$prodi')";

$query = "UPDATE prodi SET nama_prodi='$prodi' WHERE id_prodi =$id ";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "
            <script>
            alert('Data Berhasil Diubah');
            document.location.href='prodi.php';
            </script>
    ";
} else {
    echo "
    <script>
    alert ('Data gagal ditambahkan');
    </script>
";
    echo mysqli_error($conn);
}
;
?>