<?php
    
    include('konek.php');
    
    $id = $_GET['id'];

    $query = "DELETE FROM mahasiswa WHERE id=$id";
    $code = mysqli_query($conect, $query);

    if($code){
        
        echo "<script>alert('Kamu Berhasil Delete Data Silahkan Reload Agar Data Kamu Terupdate ')</script>";
        
        echo "<script>window.open('Data_mahasiswa.php')</script>";
        
    }
?>
