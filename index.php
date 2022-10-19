<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body class="mt-2">
    <div class="container">
    <h1><center> Webboard </center></h1>
    <?php
    include "nav.php";
    ?>
    <br>
    <div class="d-flex">
        <div>
            <label> หมวดหมู่: </label>
            <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="button2" data-bs-toggle="dropdown"aria-expanded="false">--ทั้งหมด--</button>
                <ul class="dropdown-menu ">
                    <a href="#" class="dropdown-item">--ทั้งหมด--</a>
                    <a href="#" class="dropdown-item">เรื่องทั่วไป</a>
                    <a href="#" class="dropdown-item">เรื่องเรียน</a>
                </ul>
        </div>
        <div class="ms-auto">
            <a href="newpost.php" class="btn btn-success btn-sm"> + สร้างกระทู้ใหม่</a>
        </div>
    </div><br>
    <table class="table table-bordered border-white table table-striped">
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<tr><td><a href=post.php?id=$i style=text-decoration:none>กระทู้ที่$i</a></td></tr>"
            }
        ?>
    </ul>
    </table>       
</body>
</html>