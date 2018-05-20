<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md nav-mycolor">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <img id="logo" src="../picc/Logo.png" alt="">
            <h3 id="title-name">ระบบติดตามแผนงาน ​<br>คณะวิทยาศาสตร์ สจล.</h3>
        </div>
        <!-- <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div> -->
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        KPI
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php
                      include("connect2.php");
                      if ($cn->connect_error) {
                          die("Connection with the database failed: </br>" . $cn->connect_error);
                      }
                      if($result = $cn->query('SHOW TABLES')){
                        $i=0;
                        while($row = mysqli_fetch_array($result)){
                          $tables[] = $row[0];
                        }
                      }
                      foreach($tables as $key => $value)
                      {
         			      		echo '<a class="dropdown-item" href="#">'.$value.'</a>';
                      }
                      ?>
                    </div>
                </li>
                <li class="nav-item color-item">
                    <a class="nav-link" href="#">เอกสารของท่าน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trackingscore.php">ติดตามผล</a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            บัญชีของท่าน
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">ช่วยเหลือ</a>
                            <a class="dropdown-item" href="#"​>ตั้งค่า</a>
                            <a class="dropdown-item" href="#">ออกจากระบบ</a>
                    </li>
            </ul>
        </div>
    </nav>
</body>
</html>
