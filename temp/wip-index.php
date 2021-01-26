<!-- index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?>
  </title>

<?php
  if(!isset($_SESSION['login_id']))
    header('location:login.php');
include('./header.php'); 
 ?>

</head>

<style>
.modal-dialog.large {
	width: 80% !important;
	max-width: unset;
}
.modal-dialog.mid-large {
	width: 50% !important;
	max-width: unset;
}
#viewer_modal .btn-close {
	position: absolute;
	z-index: 999999;
	background: unset;
	color: white;
	border: unset;
	font-size: 27px;
	top: 0;
}
#viewer_modal .modal-dialog {
    width: 80%;
    max-width: unset;
    height: calc(90%);
    max-height: unset;
}
#viewer_modal .modal-content {
    background: black;
	border: unset;
    height: calc(100%);
    display: flex;
    align-items: center;
    justify-content: center;
}
#viewer_modal img,#viewer_modal video{
    max-height: calc(100%);
    max-width: calc(100%);
}
</style>

<body class=" ">
  <div class="wrapper ">
  	include('./navbar.php')