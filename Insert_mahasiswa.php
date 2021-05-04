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

                    <input name="gambar[]" type="file" class="form-control" multiple>  

                </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->


        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Nama </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="nama" type="text" class="form-control"  required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->
        

        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Nim </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="nim" type="text" class="form-control" required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->


        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Email </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="email" type="text" class="form-control" required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->      


        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Kontak </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="kontak" type="text" class="form-control" required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->      

        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"> Alamat </label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->
                
                    <input name="alamat" type="text" class="form-control" required>
                
                </div><!-- col-md-6 Finish -->  
        </div><!-- form-group Finish -->


        <div class="form-group"><!-- form-group Begin -->

            <label class="col-md-3 control-label"></label> 

                <div class="col-md-6"><!-- col-md-6 Begin -->

                    <input name="submit" value="Upload" type="submit" class="btn btn-primary form-control">

                </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

    </Form>
</body>
</html>

<?php

include('konek.php');

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $kontak = $_POST['kontak'];
    $alamat = $_POST['alamat'];
    
    $gambar = $_FILES['gambar']['name'];
    
    $temp_name1 = $_FILES['gambar']['tmp_name'];
    
    move_uploaded_file($temp_name1,"Profil/$gambar");
    
    $query = "INSERT INTO mahasiswa (nama,nim,email,kontak,alamat,gambar) values ('$nama','$nim','$email','$kontak','$alamat','$gambar')";
    $code = mysqli_query($conect, $query);

    if($code){
        
        echo "<script>alert('Kamu Berhasil Insert Data Silahkan Reload Agar Data Kamu Terupdate ')</script>";
        
        echo "<script>window.open('Data_mahasiswa.php')</script>";
        
    }
}
?>