<style>
    td
    {        
        text-align:center; 
        vertical-align:middle;
    }
</style>
<?php
if($this->session->userdata('is_logged_in'))
{
?>
    

<link href="<?php echo base_url().'../assets/css/profile.css' ?>" rel="stylesheet">
<link href="<?php echo base_url().'../assets/css/report.css' ?>" rel="stylesheet">
 
<div style="margin-top: 50px;"></div>
<div class="row">
<div class="col-md-4">
<?php
if($this->session->userdata('user_type')  == END_USER_TYPE)
{
    include_once 'template/sidebar_enduser.php';
}
else
{
?>
      <table>
          <tr>
              <td style="width: 20%;"></td>
              <td style="width: 20%;"></td>
              <td style="width:80%;border: #000 solid thin;border-radius: 58px;">
                  <img class="profile-img" style="width: 100%;padding-top: 10px;padding-right: 5px;padding-bottom: 5px;padding-left: 10px;"   src="<? echo base_url().'../assets/img/Icon-Student-Small.png'?>">
                  <p><center><a style="text-decoration:underline;color: #000">My Profile </a></center></p>    
              </td>
              <td >
                  <p class="editProfile">
                      <a href="<?=base_url()?>user/edit_children_profile"><font color="white">Edit profile</font></a>
                  </p>
              </td>
          </tr>  
          
          <tr>
              <td style="width: 20%;"></td>
              <td colspan="2">
                  <ul class="profile">
                      <li >
                          <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MySchBag.png'?>" alt="" height="30px">My Report Card</a>
                      </li>
                       <li >
                           <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MySchHolidays.png'?>" alt="" height="30px">My School Bag</a>
                      </li>
                      <li >
                          <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MyStickers.png'?>" alt="" height="30px">My Stickers </a>
                      </li>
                      <li >
                          <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-ReportCard.png'?>" alt="" height="30px">My School Holidays</a>
                      </li>
                      <li >
                          <a href="<?=base_url().'user/view_assign_quiz'?>"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-ReportCard.png'?>" alt="" height="30px">Assigned Quizzes</a>
                      </li>
                  </ul>
              </td>   
              
          </tr>
          
      </table>
<?
}
?>
  
  </div>
        
    
    <div class="col-md-7">
        <div style="border:#000 solid thin;background-color:#ffffff;border-radius: 10px; ">
            <br> <p class="sec"><b></b></p>  
           
            <div style="border:#000 solid thin;background-image:url('<?php echo base_url();?>../assets/img/rp-bg.png'); border-radius: 10px;margin: 20px; ">
                <br>
               
                <table class="reportT" width="100%">
                    <tr>
                    <th colspan="5">
                    <? if($this->session->userdata('user_type') == END_USER_TYPE)
                    {
                    ?>
                        <h3><b>YOUR CHILD'S REPORT CARD</b></h3>
                    <?
                    }
                    else
                    {
                        echo "<h3><b>MY REPORT CARD</b></h3>";
                    }
                    ?>
                    <p class="pull-right">Academic Year : <?=date('Y')?></p>
                    <p>Name of Child: <?=$child->name;?>
                    <br>Age on <?php echo date('l j'); ?>th : <?= getAge($child->yy,$child->mm,$child->dd) ?></p>
                   
                    </th>
                    
                </tr>
                
               
                <tr style="border-top: 1pt solid black;border-bottom:1pt solid black;">        
                   
                    <td>Subject</td>
                    <td>Weightings</td> 
                    <td>Total</td>
                    <td>Obtained</td>
                    <td>Band</td>
                </tr>
               
                <?php                                        
                    foreach ($assign_quiz as $subject)
                    {
                ?>
                        <tr> 
                            <td width="20%"><?=$subject->level_name?></td>
                            <td><?=$subject->percentage?>%</td> 
                            <td><?=$subject->total?></td>
                            <td><?=$subject->obtained?></td>
                            <td><?=$subject->grade?></td>
                        </tr>
                <?php
                    }
                ?>
               
                
               
                
                </table>
                
               <br/><br/><br/>
                
            </div>
            
            
        </div>
    </div>
</div>

<?php
}

function getAge($y,$m,$d)
{
    return floor( (strtotime(date('Y-m-d')) - strtotime("$y-$m-$d")) / 31556926);
}
?>