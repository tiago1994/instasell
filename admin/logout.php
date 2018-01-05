<?
  session_start();

  unset($_SESSION['adminid']);
  unset($_SESSION['adminnome']);
  unset($_SESSION['adminemail']);
  unset($_SESSION['adminsenha']);
  unset($_SESSION['adminprivilegio']);

  header('Location: login.php?deslogado=1');
  exit();
?>