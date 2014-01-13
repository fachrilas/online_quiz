<link href="<?php echo base_url().'../assets/css/preview.css' ?>" rel="stylesheet">
<link href="<?php echo base_url().'../assets/css/radio_style.css' ?>" rel="stylesheet">
<style>
label.css-label {
        background-image:url('<?php echo base_url().'../assets/img/radio-bg.png' ?>');
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
                        }
    </style>
    
<div class="col-md-1"></div>
<div class="col-md-10" >
    <?php if($count>0){ ?>
    <div class="preview" style="background-image: url('<? echo base_url().'../assets/img/quizboard-bg.png'?>');background-position:fixed;">
        <form id="assign_quiz" method="post" action="<? echo base_url();?>user/start_quiz/<? echo $next; ?>" class="form-group" >
        <table class="PTable">
            <tr >
                <td ><b>Question <?=$questionDetails['question']->question_number?>:</b></td></tr><tr>
            
                <td><?php
                $detail=$questionDetails['question']->question;
                $details=preg_replace('<<br />>', ' ', $detail);
               echo substr($details,0,180) ?> ?</td></tr><tr>
                
                <td >
                        <?
    if($questionDetails['question']->image_relative)
    {
    ?>

                    <img class="PTimage" src="<?=base_url().'../'.$questionDetails['question']->image_relative?>" />
                <?
    }
    else
    { ?>
      <img class="PTimage" src="<? echo base_url().'../assets/img/no-images.jpg'?>" />
   <? }
    ?>
        
                </td>
            </tr>
            
            <input type="hidden" name="type" value="<?=$questionDetails['question']->type?>"/>
            <?php
            if ($questionDetails['question']->type==OPTIONS)
            {
                
            
            ?>
            <tr>
            
                <td>
                    <br>
                    <input type="radio" name="answer" id="radio1" class="css-checkbox" value="a"/><label for="radio1" class="css-label">A</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="answer" id="radio2" class="css-checkbox" value="b"/><label for="radio2" class="css-label">B</label>
                </td>
            </tr>
                <tr><td>
                    <input type="radio" name="answer" id="radio3" class="css-checkbox" value="c"/><label for="radio3" class="css-label">C</label>
                </td>
                </tr><tr>
                <td>
                    <input type="radio" name="answer" id="radio4" class="css-checkbox" value="d"/><label for="radio4" class="css-label">D</label>
                </td>
            </tr>
            <?php }else
            {
                ?>
            <tr>
            
                <td>
                    <br><br>
                    Answer :
                <input type="text" class="form-control" name="answer" />
                </td>
            </tr>
            <?php }?>
            <tr>
                <td>
                    <?php if(($count-1)>0){ ?>
                    <a href="javascript:void(0);"><img src="<? echo base_url().'../assets/img/back.png'?>" id="back" onclick="mybackFunction()" class="" style="width: 78px;
                                    margin-right: 15px;" /> </a>
                    
                    <a href="javascript:void(0);"><img src="<? echo base_url().'../assets/img/next.png'?>" id="next" onclick="myFunction()" class="pull-right" style="width: 78px;
                                    margin-right: 15px;" /> </a>
                    <?  }else{ ?>
                        <input type="submit" class="btn btn-primary pull-right" >
                    <? }?>
                </td>
            </tr>
        </table>
    </form>
        
        
    </div>    
     <?  } ?>
</div>
<div class="col-md-1">
    
    
</div>
<script>
$( "#next" ).click(function() {
 //alert('hello');
 $( "#assign_quiz" ).submit();
});
$( "#back" ).click(function() {
 //alert('hello');
 history.go(-1);

});



</script>