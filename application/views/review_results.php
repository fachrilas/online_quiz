<?php
   if($this->session->userdata('is_logged_in'))
                    {
                    ?>
    

<link href="<?php echo base_url().'../assets/css/profile.css' ?>" rel="stylesheet">
<link href="<?php echo base_url().'../assets/css/viewChildren.css' ?>" rel="stylesheet">
 
<div style="margin-top: 50px;"></div>
<div class="row">
  <div class="col-md-4">
      <?php
    
include_once 'template/sidebar_enduser.php';

                    ?>
  
  </div>
        
    
    <div class="col-md-7">
        <div style="border:#000 solid thin;background-color:#ffffff;border-radius: 10px; ">
            <br> <p class="sec"><b></b></p>  
           
            <div style="border:#000 solid thin;background-color:#ffffff;border-radius: 10px;margin: 20px; ">
                <br>
                
                <div class="viewTable">My Child<span> Level</span> <span>                  
                        <img style="width:5%" src="<? echo base_url().'../assets/img/addchild.png'?>" />
                        <a href="<?=base_url().'user/add_child'?>" style="color: #ffffff;">Add Child</a></span>
                </div> 
                 
                <hr>
                <?php
                    foreach($children as $child)
                    {
                    ?>
                <div class="report">
                    <table><tr><td>
                                <b> <?=$child->name;?></b>
                            </td>
                            <td>
                                <b> <?= $child->level?> </b></td><td>
                    <a href="<?php echo base_url().'user/review_results_proceed/'.$child->id."/1";?>"><img style="width:84%" src="<? echo base_url().'../assets/img/Review_R.png'?>" /></a>
                    <p>last Assignment Taken :9 December, 2013</p>
                            </td>
                        </tr>
                    </table>
                </div> 
                <br>
                
                <hr class="hrc">
                <?php
                    }
                    ?>
               
                <br><br><br>
            </div>
            
            
        </div>
    </div>
</div>

<?php

                    }
                    ?>