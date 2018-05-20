<?php
session_start();
?>
<body>
  <?php
  include('connect.php');
  $username = $_POST["username"];
  $password = $_POST["key"];
  echo "user :$username \n" ;
  echo "pass :$password \n";
  $sql = "SELECT username,password FROM managerlogin WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($cn,$sql);
  // $objResult = mysqli_fetch_array($result);
  if(!$result){
    echo "$result ";
    echo "user or pass not correct";
    echo "$username , $password";
  }else{
    $_SESSION["UserID"] = $username;
    session_write_close();
    header('Location:managerindex.php');
  }
  ?>
 
</body>