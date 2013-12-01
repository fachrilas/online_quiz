<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=SITE_TITLE?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- styles -->
    <link href="<?php echo base_url().'../assets/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url().'../assets/css/bootstrap.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url().'../assets/css/justified-nav.css' ?>" rel="stylesheet">
    <script src="<?php echo base_url().'../assets/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url().'../assets/js/jquery.validate.min.js' ?>"></script>
    <script src="<?php echo base_url().'../assets/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url().'../assets/js/lightbox_me.js' ?>"></script>
  </head>
  <body>
      <div class="container">
          <div class="masthead">
            <h3 class="text-muted"><?=SITE_TITLE?></h3>
            <ul class="nav nav-justified">
            <?
            if($this->session->userdata('is_logged_in'))
            {
            ?>
              <li><a href="#">Home</a></li>
              <li><a href="<?=base_url().'admin/add_question'?>">Add Questions</a></li>
              <li><a href="#">View Users</a></li>
              <li><a href="#">View Quiz</a></li>
              <li><a href="<?=base_url()?>user/login">Logout</a></li>
            <?
            }
            else
            {
            ?>
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="<?=base_url()?>user/login">Login</a></li>
            </ul>
            <?
            }
            ?>
          </div>
