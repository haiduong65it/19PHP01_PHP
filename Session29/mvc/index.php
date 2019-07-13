<head>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="webroot/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="webroot/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="webroot/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="webroot/css/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="webroot/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="webroot/css/_all-skins.min.css">
   <link rel="stylesheet" href="webroot/css/bootstrap-datepicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" type="text/css" href="webroot/css/custom.css">
</head>

<body>

<a href="index.php">Home</a>
 | <a href="index.php?action=news">News</a>
| <a href="index.php?action=products">Products</a>
| <a href="index.php?action=contact">Contact</a>
<?php
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->handleRequest();
?>
</body>