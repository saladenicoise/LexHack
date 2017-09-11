<?PHP
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] != '') { // Checks if Session is up(user has logged in)
}else{
	header ("Location: login/login.php");
}
?>
