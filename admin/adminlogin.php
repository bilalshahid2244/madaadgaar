<?php require_once("../template/config.php") ;
session_start();
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
    <center>
    <form action="" method="post">
        <h1>ADMIN LOGIN</h1>
        <p>ENTER EMAIL</p>
        <input type="email" name="mail">
        <p>ENTER PASSWORD</p>
        <input type="password" name="pswd">
        <br>
        <button class="btn btn-primary" type="submit" name="btn">LOGIN</button>

    </form>
    </center>
    <?php
    if(isset($_POST["btn"])){
        $email = $_POST["mail"];
        $pass = $_POST["pswd"];

        $fetch = "SELECT * FROM `tbl_admin` WHERE`email` = '$email' AND`pass` = '$pass'";
        $runadmin = mysqli_query($conn,$fetch);
        $check = mysqli_num_rows($runadmin);

        if($check==0){
            echo "<script>
            alert('INVALID LOGIN')
            window.location.href='adminlogin.php'
            </script>";
        }
        else{
            $convert = mysqli_fetch_array($runadmin);
            $_SESSION["adminname"] = $convert[1];
            $_SESSION["adminmail"] = $convert[2];
            header("location:dashboard.php");

        }


    }
    ?>
</body>
</html>