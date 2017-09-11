<?PHP
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] != '') { // Checks if Session is up(user has logged in)
}else{
	header ("Location: login/login.php");
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Starting Easy</title>

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
              <a class="nav-link js-scroll-trigger" href="http://lexhak.tk/puzzleindex.php">Level 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://lexhak.tk/login/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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
