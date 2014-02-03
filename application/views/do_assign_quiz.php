<link href="<?php echo base_url().'../assets/css/assign_quiz.css' ?>" rel="stylesheet">
<div class="col-md-2">  <?
include_once 'template/sidebar_enduser.php';
?>
</div>
<div class="col-md-10">

<div class="assign_quiz" style="background-image: url('<? echo base_url().'../assets/img/AssignPaper-BG.png'?>');">
    <div class="content">
        <?php if($count<count($quiz_details))
        {
            ?>
        <div class="block1">
        <h3 class="lead">
        <?=$level_Detail->level_name?>
        </h3>
        <p class="lead">Q #:<?=$quiz_details[$count]['question']->question_number?></p>
        <p class="lead">Q:
        <?php
                $detail=$quiz_details[$count]['question']->question;
                $details=preg_replace('<<br />>', ' ', $detail);
               echo substr($details,0,180) ?>
       </p>
       
        <?
        if($quiz_details[$count]['question']->image_relative)
        {
        ?>
        <img class="PTimage" src="<?=base_url().'../'.$quiz_details[$count]['question']->image_relative?>" />
        <?
        }else 
        {}
        ?>
        </div>
        <?php
        }
        else
        {
            echo "<div class='block2D'><a href='javascript:void(0)' data-toggle='modal' data-target='#myModal'><span class='assignquiz'>assign quiz ?</span></a></div>";
            
        }
        ?>
        </div>
    
         <?php 
         if($count<count($quiz_details))
         {
         if($count+1<count($quiz_details))
            {
            ?>  
         <div class="block2">
       
        <p class="lead">Q #:<?=$quiz_details[$count+1]['question']->question_number?></p>
        <p class="lead">Q:
        <?php
                $detail=$quiz_details[$count+1]['question']->question;
                $details=preg_replace('<<br />>', ' ', $detail);
               echo substr($details,0,180) ?>
       </p>
       
        <?
        if($quiz_details[$count+1]['question']->image_relative)
        {
        ?>
        <img class="PTimage" src="<?=base_url().'../'.$quiz_details[$count+1]['question']->image_relative?>" />
        <?
        }else 
        {}
        ?>
        </div>
    <a href="<?=base_url()?>user/assign_quiz_proceed/<?=$level_Detail->id?>/<?=$count+2?>"><img class="arrow" src="<?=base_url()?>../assets/img/assign-arrow.png"/></a>
        <?php
        }
        else
        {
            echo "<div class='block2'><a href='javascript:void(0)' data-toggle='modal' data-target='#myModal'><span class='assignquiz'>assign quiz ?</span></a></div>";
        }
         }
        //echo $count.count($quiz_details);
        ?>
 
</div>
</div>


<!-- Modal -->
<style>
    .modal-title
    {
       
        text-align: center;
        font-size: 30px;
        font-weight: bold;
    }
    .modal-content
    {
        text-align: center;
    }
    .ask
    {
       font-weight: bold;
        font-size: 30px;
        position: absolute;
        margin-left: 31%;
    }
</style>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content" style="background-color: #a6e1ec;width: 397px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Assign Paper To :</h4>
      </div>
      <div class="modal-body">
       <!-- Include Twitter Bootstrap and jQuery: -->

<!-- Include the plugin's CSS and JS: -->
<script type="text/javascript" src="<?=base_url()?>../assets/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="<?=base_url()?>../assets/css/bootstrap-multiselect.css" type="text/css"/>
<span class="ask">?</span>
<!-- Build your select: -->
<form name="quiz" action="<?=base_url()?>user/do_assign_quiz" method="post">
    <select class="multiselect" multiple="multiple" name="child[]" required>
     <?  
     foreach($children as $child)
     {
     ?>
  <option value="<?=$child->username?>"><?=$child->name?></option>
  
    <?
    }
    ?>
 </select>
    <br><br><br>
    <input type="hidden" name="level" value="<?=$level_Detail->id?>" />
    <input type="hidden" name="level_name" value="<?=$level_Detail->level_name?>" />
    <input type="submit" class="btn btn-success">
    <input type="button" value="cancel" class="btn btn-danger" data-dismiss="modal">
</form>
<!-- Initialize the plugin: -->
<script type="text/javascript">
  $(document).ready(function() {
    $('.multiselect').multiselect({
      buttonClass: 'btn-primary btn-lg'
      
    });
  });
</script>
          
          
          
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->