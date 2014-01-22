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
   
<div class="col-md-12" >
    
   
    
    <div class="preview" style="background-image: url('<? echo base_url().'../assets/img/quizboard-bg.png'?>');background-position:fixed;">
       
          <p id="counter" style=""></p>
        <form id="assign_quiz" method="post" action="<? echo base_url();?>user/review_results_proceed/<? echo $user_id; ?>/<? echo $next; ?>" class="form-group" >
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
   <script>
        $('.preview').removeClass('preview').addClass('previewN');
        </script>
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
                    <?php if ($answer==OPTIONS1) { ?>
                    <input type="radio" name="answer" id="radio1" class="css-checkbox" value="option1" checked/><label for="radio1" class="css-label"><?=$questionDetails['options'][0]->option; ?></label>
                    <?php }else{?>
                     <input type="radio" name="answer" id="radio1" class="css-checkbox" value="option1"/><label for="radio1" class="css-label"><?=$questionDetails['options'][0]->option; ?></label>
                     <?php } ?>
                </td>
            </tr>
            <tr><td >
                    <?php if ($remarks==TRUE)
                    { ?>
                    <img class="Y-N" src="<? echo base_url().'../assets/img/yes.png'?>" /></td></tr>
                    <?php }else{?>
                    <img class="Y-N" src="<? echo base_url().'../assets/img/no.png'?>" /></td></tr>
                    
                    <?php }?>
            <tr>
                <td>
                 <?php if ($answer==OPTIONS2) { ?>
                    <input type="radio" name="answer" id="radio2" class="css-checkbox" value="option2" checked/><label for="radio2" class="css-label"><?=$questionDetails['options'][1]->option; ?></label>
                    <?php }else{?>
                     <input type="radio" name="answer" id="radio2" class="css-checkbox" value="option2"/><label for="radio2" class="css-label"><?=$questionDetails['options'][1]->option; ?></label>
                     <?php } ?>
                </td>
                
            </tr>
                <tr><td>
                 <?php if ($answer==OPTIONS3) { ?>
                    <input type="radio" name="answer" id="radio3" class="css-checkbox" value="option3" checked/><label for="radio3" class="css-label"><?=$questionDetails['options'][2]->option; ?></label>
                    <?php }else{?>
                     <input type="radio" name="answer" id="radio3" class="css-checkbox" value="option3"/><label for="radio3" class="css-label"><?=$questionDetails['options'][2]->option; ?></label>
                     <?php } ?>
                    </td>
                </tr><tr>
                <td>
                <?php if ($answer==OPTIONS4) { ?>
                    <input type="radio" name="answer" id="radio4" class="css-checkbox" value="option4" checked/><label for="radio1" class="css-label"><?=$questionDetails['options'][3]->option; ?></label>
                    <?php }else{?>
                     <input type="radio" name="answer" id="radio4" class="css-checkbox" value="option4"/><label for="radio1" class="css-label"><?=$questionDetails['options'][3]->option; ?></label>
                     <?php } ?>
                </td>
            </tr>
            <?php }else
            {
                ?>
                        <tr><td>
              <?php if ($remarks==TRUE)
                    { ?>
                    <img class="Y-N-SECOND" src="<? echo base_url().'../assets/img/yes.png'?>" /></td></tr>
                    <?php }else{?>
                    <img class="Y-N-SECOND" src="<? echo base_url().'../assets/img/no.png'?>" /></td></tr>
                    
                    <?php }?>
            <tr>
            
                <td>
                    <br><br><br><br>
                    Answer :
                    <input type="text" class="form-control" name="answer" value="<?=$answer;?>" disabled />
                </td>
                
            </tr>

            <?php }?>
            <tr>
                <td>
                    <?php if($next<=$count){ ?>
                    <a href="javascript:void(0);"><img src="<? echo base_url().'../assets/img/back.png'?>" id="back" onclick="mybackFunction()" class="" style="width: 14%;
margin-top: -8px;
margin-left: 47%;" /> </a>
                    
                    <a href="javascript:void(0);"><img src="<? echo base_url().'../assets/img/next.png'?>" id="next" onclick="myFunction()" class="pull-right" style="width: 14%;
margin-right: 14px;" /> </a>
                    <?  }else{ ?>
                    <input type="submit" value="Done" class="btn btn-primary pull-right" >
                    <? }?>
                </td>
            </tr>
        </table>
    </form>
        
        
    </div>    
     
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
