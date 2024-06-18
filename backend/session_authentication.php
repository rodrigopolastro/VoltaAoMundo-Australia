<?php
  session_start();

  if(!isset($_SESSION['user_id'])){
    header("Location: /volta-ao-mundo-australia/views/pages/login.php");
    exit();
  }
?>