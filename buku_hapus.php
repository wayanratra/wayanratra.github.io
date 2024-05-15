<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");
?>
<script>
    alert('Hapus data berhasil');
    location.href = "?page=buku";
</script>