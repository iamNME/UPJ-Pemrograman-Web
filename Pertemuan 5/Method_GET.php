<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- method get akan memperlihatkan nilai di url -->
    <form action="" method:="get">
        <input type="text" name="nama">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
    
    <?php
    // cek apakah apakah nilai submit sudah di set atau belum 
        if(isset($_GET['submit'])){
            echo $_GET['nama'];
        }
    ?>
</body>
</html>