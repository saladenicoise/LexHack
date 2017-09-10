<?PHP
$uname = "";
$pword = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	//require 'configure.php';

	$uname = $_POST['username'];
	$pword = $_POST['password'];

	$database = "2442002_users";


	$db = new mysqli('pdb9.awardspace.net', '2442002_users', '931#^JVbQ8vh', $database );

	if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	}

	if ($db) {

	$SQL = $db->prepare('SELECT * FROM login WHERE uname = ?');
	$SQL->bind_param('s', $uname);
	$SQL->execute();
	$SQL->store_result();
	$result = $SQL->num_rows;
	$SQL->close();
		if ($result >= 1) {

			$stmt = $db->prepare('SELECT pword FROM login WHERE uname = ?');
			if(!$stmt) {
				$errorMessage1 = "Prepare failed: (" . $db->errno . ") " . $db->error;
			}else{
			$stmt->bind_param('s', $uname);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($hash);
			$res = $stmt->fetch();
			$stmt->close();

			if (password_verify($pword, $hash) && $res) {
				session_start();
				$_SESSION['login'] = "1";
				$login = "login";
				$session = "1";
				setcookie($login, $session, time() + 3600, "/");
				header ("Location: http://www.lexhak.tk/puzzleindex.php");
			} else {
				$errorMessage = "Login FAILED";
				$errorMessage1 = "Pword:" . $pword . "Hash: " . $hash;
				session_start();
				$_SESSION['login'] = '';
			}
			}
		}
		else {
			$errorMessage = "Username or Password is invalid! Please try again!       ";
			$errorMessage1 = "Result: " . $result;
		}
	}
}
?>


<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<script src="http://lexhak.tk/js/customjs.js"></script>
<title>Basic Login Script</title>
<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>
</head>
<body class="red">
	<div id="login-page" class="row">
		<div class="col s12 z-depth-6 card-panel">
<FORM NAME ="form1" METHOD ="POST" ACTION ="login.php">
	<div class="row">
		<p style="margin-left:40px">Lex Hack Puzzle Login</p>
	</div>
	<div class="row margin">
		<div class="input-field col s12">
			<i class="mdi-social-person-outline prefix"></i>
			<INPUT  id="username" TYPE = 'text' Name ='username'  maxlength="20" required>
			<label for="username" data-error="wrong" data-success="right" class="center-align">Username</label>
		</div>
	</div>
	<div class="row margin">
		<div class="input-field col s12">
			<i class="mdi-action-lock-outline prefix"></i>
			<INPUT id="password" TYPE = 'password' Name ='password' maxlength="16" required>
			<label for="password">Password</label>
		</div>
	</div>
	<div class="row">
		<div class="container" style="margin-left: 70px">
			<button id="aaa" type="submit" class="btn btn-success btn-block">Login</button>
		</div>
		<div class="row">
			<div class="container" style="margin-left: 70px">
				<p><a href="signup.php">Register Now!</a></p>
			</div>
</FORM>
</div>
</div>

<P>
<?PHP print $errorMessage;?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <!--materialize js-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>


</body>
</html>
