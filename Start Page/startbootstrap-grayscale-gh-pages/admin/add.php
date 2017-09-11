<?PHP
session_start();
if($_COOKIE['admin'] == '1') {  // Checks if Session is up(user has logged in)
  $flag = "";
  $points = "";
  $name = "";
  $errorMessage = "";
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'configure.php';

    $flag = $_POST['flag'];
    $points = $_POST['points'];
    $name = $_POST['name'];
    //Declare Database
    $database = "2442002_users";
    //Connect to Database
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

    if ($db->connect_error) {
  	    die("Connection failed: " . $db->connect_error);
  	}

    if ($db) {
      //Check if there is already a puzzle named that
      $checkflag = $db->prepare('SELECT flag, name FROM puzzleflags WHERE flag = ? AND name = ?');
      if (!$checkflag) {
        $errorMessage = "Prepare failed 0: (" . $db->errno . ") " . $db->error;
      }else{
        $checkflag->bind_param('ss', $flag, $name);
        $checkflag->execute();
        $checkflag->store_result();
        $result = $checkflag->num_rows;
        $checkflag->close();
        if($result > 0) {
          $errorMessage = "A puzzle with the same name or flag already exit!" . " Flag: " . $flag . " Name: " . $name . " Result: " . $result;
        }else{
          $addflag = $db->prepare('INSERT INTO puzzleflags (flag, points, name) VALUES (?, ?, ?)');
          if (!$addflag) {
            $errorMessage = "Prepare failed 1: (" . $db->errno . ") " . $db->error;
          }else{
          $addflag->bind_param('sss', $flag, $points, $name);
          $addflag->execute();
    			$addflag->close();
          $errorMessage = "Puzzle Flag Successfully Added!";
        }
      }
    }
}
}
}else{
  header ("Location: http://lexhak.tk/index.html");
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lex Hack Capture the Flag Puzzles</title>

  <!-- Bootstrap core CSS -->
  <link href="http://lexhak.tk/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Jules's CSS-->
  <!-- Custom fonts for this template -->
  <link href="http://lexhak.tk/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://lexhak.tk/css/grayscale.min.css" rel="stylesheet">
</head>
  <body style="background-color: #5693a9">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="http://lexhak.tk/index.html">Lex Hack</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://lexhak.tk/puzzleindex.php">Puzzle Index Access</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://lexhak.tk/admin/admin.php">Admin Access</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://lexhak.tk/login/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top:130px">
      <div class="row" align-center>
        <form NAME ="form1" METHOD ="POST" ACTION ="add.php">
        	<div class="row margin">
        		<div class="input-field col s12">
              <label for="flag" data-error="wrong" data-success="right" class="center-align">Flag:</label>
        			<INPUT  id="flag" TYPE = 'text' Name ='flag'  required>
        		</div>
        	</div>
        	<div class="row margin">
        		<div class="input-field col s12">
              <label for="points">Points:</label>
        			<INPUT id="points" TYPE = 'text' Name ='points' required>
        		</div>
        	</div>
          <div class="row margin">
        		<div class="input-field col s12">
              <label for="name">Name:</label>
        			<INPUT id="name" TYPE = 'text' Name ='name' required>
        		</div>
        	</div>
        	<div class="row">
        		<div class="container" style="margin-left: 70px">
        			<button id="aaa" type="submit" class="btn btn-success">Submit Query</button>
        		</div>
            <?php print $errorMessage ?>
      </div>
    </div>

<!--Custom Scripts and Such -->
    <script src="http://lexhak.tk/vendor/jquery/jquery.min.js"></script>
    <script src="http://lexhak.tk/vendor/popper/popper.min.js"></script>
    <script src="http://lexhak.tk/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://lexhak.tk/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->

    <!-- Custom scripts for this template -->
    <script src="http://lexhak.tk/js/grayscale.min.js"></script>
  </body>
  </html>
