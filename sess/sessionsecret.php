<?php
  session_start();
  
  if (!isset($_SESSION['ok']) || $_SESSION['ok'] !== true) {
    header('Location: sessionlogin.php');
  }
?>
<h1>Neues in PHP 6</h1>