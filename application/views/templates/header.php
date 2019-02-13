<html>
<head>
	<title><?php echo $title;?></title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">YourWebSite</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url("index.php/Login/sign_Up");?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?php echo base_url("index.php/Login/sign_Up");?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row justify-content-md-center">