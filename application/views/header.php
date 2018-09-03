<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/material/topbar/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Feb 2017 23:14:05 GMT -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title><?php echo $page_title; ?> | Bayelsa State Scholarship Board</title>

  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/css/bootstrap.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/css/bootstrap-extend.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/site.min3f0d.css?v2.2.0">

  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/animsition/animsition.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/switchery/switchery.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/intro-js/introjs.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/slidepanel/slidePanel.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/flag-icon-css/flag-icon.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/waves/waves.min3f0d.css?v2.2.0">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/examples/css/pages/login.min3f0d.css?v2.2.0">
   <!-- Plugins For This Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/bootstrap-sweetalert/sweet-alert.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/toastr/toastr.min3f0d.css?v2.2.0">

  <!-- Plugins For jQuery wizard form validation -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/jquery-wizard/jquery-wizard.min.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/vendor/formvalidation/formValidation.min.css?v2.2.0">
  
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/fonts/material-design/material-design.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>global/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0">

  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700'>


  <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="<?php echo base_url(); ?>../../global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo base_url(); ?>../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>global/vendor/modernizr/modernizr.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/breakpoints/breakpoints.min.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full page-dark">

  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<?php $pre = 'alert alert'; ?>
	<?php if($this->session->flashdata('success_msg')): ?>
		<p><div class="<?=$pre?>-success text-center" role="alert"><?php echo $this->session->flashdata('success_msg'); ?><button type="button" class="close" data-dismiss="alert">&times;</button></div></p>
	<?php endif; ?>
	<?php if($this->session->flashdata('error_msg')): ?>
		<p><div class="<?=$pre?>-danger text-center" role="alert"><?php echo $this->session->flashdata('error_msg'); ?><button type="button" class="close" data-dismiss="alert">&times;</button></div></p>
	<?php endif; ?>
	<?php if($this->session->flashdata('info_msg')): ?>
		<p><div class="<?=$pre?>-info text-center" role="alert"><?php echo $this->session->flashdata('info_msg'); ?><button type="button" class="close" data-dismiss="alert">&times;</button></div></p>
	<?php endif; ?>
	<?php if($this->session->flashdata('warning_msg')): ?>
		<p><div class="<?=$pre?>-warning text-center" role="alert"><?php echo $this->session->flashdata('warning_msg'); ?><button type="button" class="close" data-dismiss="alert">&times;</button></div></p>
	<?php endif; ?>
	<?php if($this->session->flashdata('news_msg')): ?>
		<p><div class="<?=$pre?>-primary text-center" role="alert"><?php echo $this->session->flashdata('news_msg'); ?><button type="button" class="close" data-dismiss="alert">&times;</button></div></p>
	<?php endif; ?>