<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>

</head>
<body>

    <table border="1" >
        <tr>
            <th> No </th>
            <th> Profil </th>
            <th> Nama </th>
            <th> Nim </th>
            <th> Email </th>
            <th> Kontak </th>
            <th> Alamat </th>
            <th> Hapus </th>
            <th> Update </th>
        </tr>
        <tr>
            <?php
                include("konek.php");

                $query = mysqli_query($conect, "SELECT * FROM mahasiswa");
                while($data = mysqli_fetch_array($query)){
                    $m_id = $data['id']; 
                    $m_gambar = $data['gambar']; 
                    $m_nama = $data['nama']; 
                    $m_nim = $data['nim']; 
                    $m_email = $data['email']; 
                    $m_kontak = $data['kontak']; 
                    $m_alamat = $data['alamat']; 
            ?>
            <td> <?php echo $m_id; ?> </td>
            <td> <img src="Profil/<?php echo $m_gambar; ?>" width="200" height="200"></td>
            <td> <?php echo $m_nama; ?> </td>
            <td> <?php echo $m_nim; ?> </td>
            <td> <?php echo $m_email; ?> </td>
            <td> <?php echo $m_kontak; ?> </td>
            <td> <?php echo $m_alamat; ?> </td>
            <td>
                <a href="Hapus_mahasiswa.php?id=<?php echo $m_id; ?>">
                                     
                    <i class="fa fa-trash-o"></i> Delete
                                    
                </a> 

            </td>
            <td>
                <a href="edit_mahasiswa.php?id=<?php echo $m_id; ?>">
                                     
                    <i class="fa fa-update-o"></i> Edit
                                    
                </a> 

            </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>

