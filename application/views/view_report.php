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
    
include_once 'template/sidebar_enduser.php';

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
                    <h3><b>YOUR CHILD'S REPORT CARD</b></h3>
                    <p class="pull-right">Academic Year :<?=$child->yy;?></p>
                    <p>Name of Child: <?=$child->name;?>
                    <br>Age on <?php echo date('l j'); ?>th : <?php echo date("Y")-$child->yy; ?></p>
                   
                    </th>
                    
                </tr>
                
               
                <tr style="border-top: 1pt solid black;border-bottom:1pt solid black;">        
                   
                    <td>Subject</td><td>Weightings</td> 
                    <td>Total</td><td>Obtained</td><td>Grade</td>
                </tr>
               
                    <?php                                        
                    foreach ($assign_quiz as $subject)
                    {
                        ?>
                    <tr> <td width="20%"><?=$subject->level_name?></td><td><?=$subject->percentage?></td> 
                    <td><?=$subject->total?></td><td><?=$subject->obtained?></td><td><?=$subject->grade?></td> </tr>
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
                    ?>