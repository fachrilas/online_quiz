<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=SITE_TITLE?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- styles -->
    
    <link href="<?php echo base_url().'../assets/css/bootstrap.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url().'../assets/css/justified-nav.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url().'../assets/css/style.css' ?>" rel="stylesheet">
    <script src="<?php echo base_url().'../assets/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url().'../assets/js/jquery.validate.min.js' ?>"></script>
    <script src="<?php echo base_url().'../assets/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url().'../assets/js/lightbox_me.js' ?>"></script>
    <style>
        .alert{
            margin-top: 14px;
            width: 97%;
        }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="masthead">
              <div class="row" style="margin-bottom: 8px;">
                  <div class="col-md-3">
                    <img src="<?php echo base_url().'../assets/img/MOExLogo.png' ?>" style="width: 100px;height: 100px;"/>
                  </div>
                  <div class="col-md-3 col-md-offset-6" style="text-align: left;margin-top: 50px;">
                      <i>The beacon of light amidst your journey through the sea of learning</i>
                  </div>
              </div>
            <ul class="nav nav-justified">
            <?
            if($this->session->userdata('is_logged_in'))
            {
                if($this->session->userdata('user_type') == ADMIN_USER_TYPE)
                {
            ?>
              <li><a href="<?=base_url().'user/admin_home'?>">Home</a></li>
              <li><a href="<?=base_url().'admin/add_question'?>">Add Questions</a></li>
              <li><a href="#">View Users</a></li>
              <li><a href="<?=base_url().'quiz/select_level_quiz_detail'?>">View Quiz</a></li>
              <li><a href="<?=base_url()?>user/logout">Logout</a></li>
            <?
                }
                else if($this->session->userdata('user_type') == END_USER_TYPE)
                {
            ?>
                  <li><a href="<?=base_url().'user/user_home'?>">Home</a></li>
                  <li><a href="<?=base_url().'user/view_children'?>">View Children</a></li>
                  <li><a href="<?=base_url().'user/add_child'?>">Add Child</a></li>
                  <li><a href="<?=base_url().'user/user_home'?>">See children Quiz</a></li>
                  <li><a href="<?=base_url().'user/user_home'?>">Assign Quiz</a></li>
                  
                  <li><a href="<?=base_url()?>user/logout">Logout</a></li>
            <?
                }
                else if ($this->session->userdata('user_type') == CHILDREN_TYPE)
                {
            ?>
                  <li><a href="<?=base_url().'user/child_home'?>">Home</a></li>
                  <li><a href="<?=base_url().'user/child_home'?>">See assigned Quiz</a></li>
                  <li><a href="<?=base_url().'user/child_home'?>">Take Quiz</a></li>
                  <li><a href="<?=base_url()?>user/logout">Logout</a></li>
            <?
                }
            }
            else
            {
            ?>
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="<?=base_url()?>user/login">Login</a></li>
              <li><a href="<?=base_url()?>user/signup">Sign up</a></li>
            </ul>
            <?
            }
            ?>
          </div>
