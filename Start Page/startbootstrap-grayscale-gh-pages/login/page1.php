<?PHP
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	header ("Location: login.php");
}

?>
	<html>
	<head>
	<title>Basic Login Script</title>


	</head>
	<body>




	User Logged in
<P>
<A HREF = logout.php>Log out</A>

	</body>
	</html>
