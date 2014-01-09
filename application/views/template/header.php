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
          
                  <?  if($this->session->userdata('is_logged_in'))
                    {
                    ?>
              
              <div class="signout">
                  <span class="glyphicon glyphicon-log-out"> <a href="../user/logout" >
                          <font> Sign Out
                          </font></a></span>
              <? }?></div>
          <div class="masthead">
              <div class="row" style="margin-bottom: 21px;margin-top:6px;">
                  <div class="col-md-3">
                    <a href="<?=base_url().'main/index'?>"><img src="<?php echo base_url().'../assets/img/MOExLogo.png' ?>" style="width: 100px;height: 100px;"/></a>
                  </div>
                  <div class="col-md-3 col-md-offset-6" style="text-align: left;margin-top: 50px;">
                      <i>The beacon of light amidst your journey through the sea of learning</i>
                  </div>
              </div>
            <ul class="nav nav-justified">
              <?
                if(isset($_GET['page']))
                {
                  $page = $_GET['page'];
                }
                else
                {
                    $page = PAGE_MY_ACCOUNT;
                }
                
              if($page == PAGE_HOME)
              {
              ?>
              <li class="pink-tab"><a href="<?=base_url().'main/about_us?page='.PAGE_HOME?>" style="color:white;">Home</a></li>
              <?
              }
              else
              {
              ?>
                <li><a href="<?=base_url().'main/about_us?page='.PAGE_HOME?>" style="color:white;background: rgba(223,27,125,1);">Home</a></li>
              <?
              }
              if($page == PAGE_PACKAGES)
              {
              ?>
              <li class="green-tab"><a href="<?=base_url().'main/packages?page='.PAGE_PACKAGES?>" style="color:white;">Packages</a></li>
              <?
              }
              else
              {
              ?>
                <li><a href="<?=base_url().'main/packages?page='.PAGE_PACKAGES?>" style="color:white;background: rgba(122,181,66,1);">Packages</a></li>
              <?
              }
              if($page == PAGE_KNOW_ALL)
              {
              ?>
                <li class="orange-tab"><a href="<?=base_url().'main/know_all?page='.PAGE_KNOW_ALL?>" style="color:white;">Information Board</a></li>
              <?
              }
              else
              {
              ?>
                <li><a href="<?=base_url().'main/know_all?page='.PAGE_KNOW_ALL?>" style="color:white;background: rgba(227,154,37,1);">Information Board</a></li>
              <?
              }
              if($page == PAGE_FAQ)
              {
              ?>
                <li class="blue-tab"><a href="<?=base_url().'main/FAQ?page='.PAGE_FAQ?>" style="color:white;">FAQ</a></li>
              <?
              }
              else
              {
              ?>
                <li><a href="<?=base_url().'main/FAQ?page='.PAGE_FAQ?>" style="color:white;background: rgba(42,125,193,1);">FAQ</a></li>
              <?
              }
              if($this->session->userdata('is_logged_in'))
              {
              ?>
               <?
               if($page == PAGE_MY_ACCOUNT)
               {
               ?>
                <li class="grey-tab"><a href="<?=base_url().'main/my_account?page='.PAGE_MY_ACCOUNT?>" style="color:white;">My Account</a></li>    
               <?
               }
               else
               {
               ?>
                <li><a href="<?=base_url().'main/my_account?page='.PAGE_MY_ACCOUNT?>" style="color:white;background: rgba(94,95,95,1);">My Account</a></li>    
               <? 
               }
               ?>
              <?
              }
              else
              {
                  if($page == PAGE_SIGN_IN)
                  {
              ?>
                <li class="grey-tab"><a href="<?=base_url().'user/login?page='.PAGE_SIGN_IN?>" style="color:white;">Sign in</a></li>  
              <?  
                  }
                  else
                  {
             ?>
                <li><a href="<?=base_url().'user/login?page='.PAGE_SIGN_IN?>" style="color:white;background: rgba(94,95,95,1);">Sign in</a></li>  
             <?
                  }
              }
             ?>   
            </ul>
            
          </div>
