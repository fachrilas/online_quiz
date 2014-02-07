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
                           <a href="<?=base_url().'user/view_assign_quiz'?>"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MySchHolidays.png'?>" alt="" height="30px">My School Bag</a>
                      </li>
                      <li >
                          <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MyStickers.png'?>" alt="" height="30px">My Stickers </a>
                      </li>
                      <li >
                          <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-ReportCard.png'?>" alt="" height="30px">My School Holidays</a>
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
        <div style="border:#000 solid thin;border-width:0.99pt; background-color:#ffffff;border-radius: 10px; ">
             
           
            <div style="border:#000 solid thin;border-width:0.99pt;background-image:url('<?php echo base_url();?>../assets/img/rp-bg.png'); border-radius: 10px;margin: 20px; ">
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
                    <br>Age on <?php echo date('jS F, Y'); ?> : <?= getAge($child->yy,$child->mm,$child->dd) ?></p>
                   
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
                            <td width="40%"><?=$subject->level_name?></td>
                            <td><?=$subject->percentage?>%</td> 
                            <td><?=$subject->total?></td>
                            <td><?=$subject->obtained?></td>
                            <td><?=getBand($subject->percentage)?></td>
                        </tr>
                <?php
                    }
                ?>
               
                
               
                
                </table>
                
               <br/><br/><br/>
                
            </div>
            <? if($this->session->userdata('user_type') == END_USER_TYPE)
               {
                    if($comment)
                    {
            ?>
                    
                            <div style="margin:20px;">
                                <form name="report_Comment" action="<?=base_url()?>user/comment" method="post">
                                <h3>Comment</h3>
                                <p ><textarea name="comment" placeholder="Write your comments" class="form-control" rows="3" required>
                                    <?php if ($comment)
                                        {
                                            echo $comment->comment;
                                        }
                                    ?></textarea></p>
                                <input type="hidden" name="r_id" value="<?=$id?>">
                                <input type="submit" class="btn btn-primary pull-right" >
                                </form>
                            <br>
                            </div>
           <?
                    }
               }
           ?>
            
        </div>
    </div>
</div>

<?php
}

function getAge($y,$m,$d)
{
    return floor( (strtotime(date('Y-m-d')) - strtotime("$y-$m-$d")) / 31556926);
}

function getBand($percentage)
{
    if($percentage >= 85)
    {
        return 1;
    }
    else if ($percentage <85 && $percentage >=70)
    {
        return 2;
    }
    else if ($percentage < 70 && $percentage >= 50 )
    {
        return 3;
    }
    else
    {
        return 4;
    }     
}
?>