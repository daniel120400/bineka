<?php 

    include("konek.php");

    $id = $_GET['id'];

    $run_mahasiswa = mysqli_query($conect, "SELECT * FROM mahasiswa WHERE id=$id");

    $row_mahasiswa = mysqli_fetch_array($run_mahasiswa);

    $nama = $row_mahasiswa['nama'];
    $nim = $row_mahasiswa['nim'];
    $email = $row_mahasiswa['email'];
    $kontak = $row_mahasiswa['kontak'];
    $alamat = $row_mahasiswa['alamat'];
    $gambar = $row_mahasiswa['gambar'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <Form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">            

        <div class="form-group"><!-- form-group Begin -->
                            
            <label class="col-md-3 control-label"> Profil </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->

                    <input name="gambar" type="file" class="form-control" value="<?php echo $gambar; ?>">  

                </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->


        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Nama </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="nama" type="text" class="form-control" value="<?php echo $nama; ?>" required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->
        

        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Nim </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="nim" type="text" class="form-control" value="<?php echo $nim; ?>" required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->


        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Email </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->      


        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Kontak </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="kontak" type="text" class="form-control" value="<?php echo $kontak; ?>" required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->      

        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Alamat </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="alamat" type="text" class="form-control" value="<?php echo $alamat; ?>" required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->


        <div class="text-center"><!-- text-center Begin -->

            <button name="update" class="btn btn-primary"><!-- btn btn-primary Begin -->
            
                <i class="fa fa-user-md"></i> Update
            
            </button><!-- btn btn-primary inish -->

        </div><!-- text-center Finish -->

    </Form>
</body>
</html>

<?php

include('konek.php');

if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $kontak = $_POST['kontak'];
    $alamat = $_POST['alamat'];
    
    $gambar = $_FILES['gambar']['name'];
    
    $temp_name1 = $_FILES['gambar']['tmp_name'];
    
    move_uploaded_file($temp_name1,"Profil/$gambar");
    
    $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim',email='$email',kontak='$kontak',alamat='$alamat',gambar='$gambar' WHERE id=$id ";
    $code = mysqli_query($conect, $query);
    
    if($code){
        
        echo "<script>alert('Kamu Berhasil Update Data Silahkan Reload Agar Data Kamu Terupdate ')</script>";
        
        echo "<script>window.open('Data_mahasiswa.php')</script>";
        
    }
}
?>