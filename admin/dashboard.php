<?php 
 require_once("../template/config.php");
 session_start();
 if(!isset( $_SESSION["adminmail"])){
    header("location:adminlogin.php");
 }
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
    <form action="" method="post">
        <h1>HELPER </h1>
        <p>ENTER HELPER NAME</p>
        <input type="text" name="name" >
        <p>ENTER HELPER address</p>
        <input type="text" name="address" >
        <p>ENTER HELPER ph</p>
        <input type="text" name="ph" >
        <br>
        <button type="submit" name="add">ADD</button>


    </form>
    <?php
    if(isset($_POST["add"])){
       
        $name = $_POST["name"];
        $add = $_POST["address"];
        $ph = $_POST["ph"];

        $insert_helper = "INSERT INTO `tbl_helper`(`helper_name`, `helper_addresss`, `helper_ph`)
         VALUES ('$name','$add','$ph')";
         $execute = mysqli_query($conn,$insert_helper);

         if($execute==true){
            echo "<script>
            alert(' HELPER INFORMATION ADDED')
            window.location.href='dashboard.php'
            </script>";
         }
         else{
            echo "<script>
            alert(' HELPER INFORMATION ERROR')
            window.location.href='dashboard.php'
            </script>";

         }

    }



    ?>
    
</body>
</html>