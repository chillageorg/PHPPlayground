<?php
  session_start();
  if (isset($_POST['login']) && isset($_POST['pass'])) {
    if ($_POST['login'] == 'test@php.net' && $_POST['pass'] == 'supersicher') {
      $_SESSION['ok'] = true;
      header('Location: sessionsecret.php?' . urlencode(session_name()) . '=' . urlencode(session_id()));
    } else {
      echo 'Login leider falsch.';
      $_SESSION['ok'] = false;
    }
  }
?>
<form method="post">
  Login: <input type="text" name="login" /><br />
  Passwort: <input type="password" name="pass" /><br />
  <input type="submit" value="Login" />
</form>