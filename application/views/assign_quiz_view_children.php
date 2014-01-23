<link href="<?php echo base_url().'../assets/css/assign_quiz.css' ?>" rel="stylesheet">
<div class="col-md-2">  <?
include_once 'template/sidebar_enduser.php';
?>
</div>
<div class="col-md-10">

<div class="assign_quiz" style="background-image: url('<? echo base_url().'../assets/img/AssignPaper-BG.png'?>');">
    <div class="content">
        <form>
    <?
    foreach($levels as $level)
    {
?>
       <?=$level->id?>
<?
    }
?>   
        </form>
 </div>
</div>
</div>