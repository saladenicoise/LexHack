<?PHP
session_start();
if($_COOKIE['admin'] == '1') {
if (isset($_SESSION['login']) && $_SESSION['login'] != '') { // Checks if Session is up(user has logged in)
}else{
	header ("Location: login/login.php");
}
}else{
  header ("Location: index.html");
}
?>
