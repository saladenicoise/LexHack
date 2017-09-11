<?PHP
$uname = "";
$pword = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require 'configure.php';

	$uname = $_POST['username'];
	$pword = $_POST['password'];

	$database = "2442002_users";

	$db = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );
	// Check connection
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
			if ($result > 0) {
			 $errorMessage = "<b>Username already taken</b>";
		 } else {
			 $phash = password_hash($pword, PASSWORD_DEFAULT);
			 $stmt = $db->prepare("INSERT INTO login (uname, pword) VALUES (?, ?)");
			 if (!$stmt) {
				 $errorMessage = "Prepare failed: (" . $db->errno . ") " . $db->error;

			 }else{
			 $stmt->bind_param('ss', $uname, $phash);
			 $stmt->execute();
			$stmt->close();
			 header ("Location: login.php");
			 $db->close();
		 	}

		 }
	 }else {
		 $errorMessage = "Database Not Found";
	 }


}
?>

	<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
		<script src="http://lexhak.tk/js/customjs.js"></script>
	<title>Basic Signup Script</title>
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
	<body class="blue">
		<div id="login-page" class="row">
			<div class="col s12 z-depth-6 card-panel">
		<FORM NAME ="form1" METHOD ="POST" ACTION ="signup.php">
			<div class="row">
				<div class="input-field col s12 center">
					<p class="center login-form-text">Lex Hack Puzzle Registration</p>
				</div>
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
					<INPUT id="password" TYPE = 'password' Name ='password' required>
					<label for="password">Password</label>
				</div>
			</div>
			<div class="row">
				<div class="container" style="margin-left: 50px">
					<button id="aaa" type="submit" class="btn btn-success btn-block" >Register Now!</button>
				</div>
				<div class="container" style="margin-left: 50px">
					<p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login</a></p>
				</div>
			</div>
			<div class="container" style="margin-left:50px">
			<?PHP print $errorMessage;?>
		</div>
</FORM>
</div>
</div>
<!-- jQuery Library -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--materialize js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>


	</body>
	</html>
