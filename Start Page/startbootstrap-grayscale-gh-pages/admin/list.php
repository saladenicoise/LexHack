<?PHP
session_start();
if($_COOKIE['admin'] == '1') {  // Checks if Session is up(user has logged in)
  $flag = "";
  $points = "";
  $name = "";
  $errorMessage = "";
    require 'configure.php';

    $flag = "";
    $points = "";
    $name = "";
    //Declare Database
    $database = "2442002_users";
    //Connect to Database
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

    if ($db->connect_error) {
  	    die("Connection failed: " . $db->connect_error);
  	}

    if ($db) {
      $list = "SELECT * FROM puzzleflags";
      $result = $db->query($list);
      if($result->num_rows > 0) {
            echo "<table><tr><th>Flag</th><th>Name</th><th>Points</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["flag"]. "</td><td>" . $row["name"]. "</td><td>" . $row["points"]. "</td></tr>";
            }
            echo "</table>";
          }else{
            $errorMessage = "There is nothing in the database, uh oh...";
          }
        }
        $list->close;
    }else{
      header ("Location: http://lexhak.tk/index.html");
    }

?>
<html>
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
<style>
table, th, td {
    border: 1px solid black;
    margin-top:110px;
    margin-left: 300px;
}
</style>
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
  <div class="container" style="margin-top:100px">
      <?php print $errorMessage ?>
</div>
</body>
</html>
