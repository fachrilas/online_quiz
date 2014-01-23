<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/<style>
img
{
    width: 50px;
}
a:hover
{
    text-decoration: none;
}
.blackboard_container 
{
    min-height: 650px;
}
</style>
<div style="margin-top: 50px;"></div>
<div class="container outer-container" >
    <div class="row blackboard_container" >
        <div class="blackboard row" style="">
            <div class="col-md-9 right-side">
                <div class="row promotion-container" >
                    <div class="heading">
                        <h1>FAQ'S - MEOX</h1>
                    </div>
                    <div class="promotion-text">
                    Some questions that comes in your mind 
                    </div>
                </div>
                <div class="row about-us-container">
                    <div class="col-md-12 about-us-left">
                        <p class="share_us"><b>Q:How do I reset my password?</b></p>
                        <p class="share_us">Ans:You can request a new password by clicking on the Forgot your password? link on the login page. We will send then send you an email with a link to reset your password.</p>
                        <br>
                        <p class="share_us"><b>Q:Can our Tution Centre subscribe to MOEx?</b></p>
                        <p class="share_us">Ans:Yes. The intention of MOEx is to provide an automated self-assessment platform, allowing parents and tutors to better use their time on educating the children than on marking the assessment books.Please contact MOEx if you would like to find out more about being a member.</p>
                        <br>
                        <p class="share_us"><b>Q:Do I have to pay for more than 1 membership if I have more than 1 child?</b></p>
                        <p class="share_us">Ans:No. Membership is tagged to each parent, therefore you can tag more than 1 child to your account.</p>
                        <br>
                        <p class="share_us"><b>Q:Are the assessment questions in line with the local education system?</b></p>
                        <p class="share_us">Ans:Yes. We engage qualified school educators  to set the assessment questions to be in line with the local education system as well as band weightings.</p>
                        <br>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3 left-side">
                <br>
                <br>
                
                <p class="like">Like us ?</p>
                <p class="share_us">Share about us on:</p>
                
                
                <a href="<?=share_url('facebook',	array('url'=>'http://www.ministryofexcellence.com.sg/', 'text'=>SOCIAL_FB));?>" target="_blank"><img src="<?=base_url()?>../assets/img/SharingIcons_fb.png" />    
                </a>
	  <a href="<?=share_url('twitter',	array('url'=>'http://www.ministryofexcellence.com.sg/', 'text'=>SOCIAL_TW));?>" target="_blank"><img src="<?=base_url()?>../assets/img/SharingIcons_tw.png" />    
                </a>
	
                
            </div>
        </div>
    </div>
</div>

|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "main";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */