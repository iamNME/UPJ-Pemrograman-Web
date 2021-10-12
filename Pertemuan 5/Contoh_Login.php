<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = "Waluyo";
        $password = 12345;

        if(isset($_POST['submit'])){
            if($_POST['nama']==$user && $_POST['password']==$password){
                // memindahkan lokasi
                // header('Location: Profile.php');
                // memindahkan lokasi dengan tambahan di url
                header('Location: Profile.php?nama=' . $user);
            }else{
                echo "Login Gagal!!!";
            }
        }
    ?>

    <form action="Contoh_Login.php" method="post">
        <input type="text" name="nama">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>