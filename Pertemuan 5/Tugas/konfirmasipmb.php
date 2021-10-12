<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            if(isset($_POST['jalur']) &&
               isset($_POST['nama']) &&
               isset($_POST['ttl']) &&
               isset($_POST['nik']) &&
               isset($_POST['jk']) &&
               isset($_POST['agama']) &&
               isset($_POST['status']) &&
               isset($_POST['kp']) && 
               isset($_POST['nh']) && 
               isset($_POST['alamat']) && 
               isset($_POST['kota_sekolah']) && 
               isset($_POST['asal_sekolah']) && 
               isset($_POST['provinsi_sekolah']) && 
               isset($_POST['jurusan_sekolah']) && 
               isset($_POST['tahun_lulus']) && 
               isset($_POST['biaya_kuliah']) && 
               isset($_POST['nama_ayah']) && 
               isset($_POST['nama_ibu']) && 
               isset($_POST['alamat_ortu']) && 
               isset($_POST['kp_ortu']) && 
               isset($_POST['nh_ortu']) && 
               isset($_POST['pt_ayah']) && 
               isset($_POST['pt_ibu']) && 
               isset($_POST['st_ayah']) && 
               isset($_POST['st_ibu']) &&
               isset($_POST['pk_ayah']) &&
               isset($_POST['pk_ibu']) &&
               isset($_POST['ph_ayah']) &&
               isset($_POST['ph_ibu'])
            ){
    ?>
                <div class="container">
                    <div class="mt-4 alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Pendaftaran Sukses!!!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
    <?php
            }
        }else{
            header('Location: pmb.php');
            die();
        }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>