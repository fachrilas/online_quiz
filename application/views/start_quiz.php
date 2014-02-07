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
                        
 #counter{
    
    color: brown;
    float: right;
    margin-top: -30px;
 }
    </style>
   
    
<div class="col-md-12" >
    
    <?php if($count>0){ ?>
    <div class="preview" style="background-image: url('<? echo base_url().'../assets/img/quizboard-bg.png'?>');">
       
         
        <form id="assign_quiz" method="post" action="<? echo base_url();?>user/start_quiz/<?=$next?>/<?=$quiz?>" class="form-group" >
        <table class="PTable">
            
            <tr >
                <td ><b>Question <?=$questionDetails['question']->question_number?>:</b><p id="counter" style=""></p> </td></tr><tr>
            
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
         
                    <input type="radio" name="answer" id="radio1" class="css-checkbox" value="a"/><label for="radio1" class="css-label"><?=$questionDetails['options'][0]->option; ?></label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="answer" id="radio2" class="css-checkbox" value="b"/><label for="radio2" class="css-label"><?=$questionDetails['options'][1]->option; ?></label>
                </td>
            </tr>
                <tr><td>
                    <input type="radio" name="answer" id="radio3" class="css-checkbox" value="c"/><label for="radio3" class="css-label"><?=$questionDetails['options'][2]->option; ?></label>
                </td>
                </tr><tr>
                <td>
                    <input type="radio" name="answer" id="radio4" class="css-checkbox" value="d"/><label for="radio4" class="css-label"><?=$questionDetails['options'][3]->option; ?></label>
                </td>
            </tr>
             <tr>
            
                <td>
                    
                    Hint :<?=$questionDetails['question']->q_hint?>
                </td>
            </tr>
            <?php }else
            {
                ?>
            <tr>
            
                <td>
                    
                    Hint :<?=$questionDetails['question']->q_hint?>
                </td>
            </tr>
            <tr>
            
                <td>
                    
                    Answer :
                <input type="text" class="form-control" name="answer" />
                </td>
            </tr>
            <?php }?>
            <tr>
                <td>
                    <a href="javascript:void(0);"><img src="<? echo base_url().'../assets/img/back.png'?>" id="back" onclick="mybackFunction()" class="" style="width: 14%;
margin-top: -8px;
margin-left: 47%;" /> </a>
                    <?php if(($count-1)>0){ ?>
                    
                    <a href="javascript:void(0);"><img src="<? echo base_url().'../assets/img/next.png'?>" id="next" onclick="myFunction()" class="pull-right" style="width: 14%;
margin-right: 14px;" /> </a>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.cookie/1.3.1/jquery.cookie.js"></script>
<script>
var timeToPass = 0;

function setCounter(c) {
  
  var timeout = timeToPass + c,
      hours = Math.floor(timeout/3600),
      minutes = Math.floor(timeout%3600/60),
      seconds = timeout%60;
  $('#counter').text([hours + ' hours', minutes + ' minutes', seconds + ' seconds'].join(', '));
}

/* get the last time the user visited the page */
var lastTime = parseInt(($.cookie('timepassed') || new Date().getTime()), 10);
var timeAway = parseInt((new Date().getTime() - lastTime) / 1000, 10);
var timeElapsed = parseInt(($.cookie('mytimeout') || 0), 10);

/* add elapsed time to the count. If the count is negative, set it to 0 */
var count = Math.min(timeElapsed + timeAway);

/* set an interval that adds seconds to the count */
setCounter(count);
var interval = setInterval(function () {
    count++;
    setCounter(count);
    /* plus, you can do something you want to do every second here, 
     like display the countdown to the user */
}, 1000);

/* set a timeout that expires 900000 Milliseconds (15 Minutes) - 
   the already passed time from now */
var timeout = setTimeout(function () {
    /* put here what you want to do once the timer epires */
}, timeToPass * 1000 - count * 1000);

/* before the window is reloaded or closed, store the current timeout in a cookie. 
   For cookie options visit jquery-cookie */
window.onbeforeunload = function () {
    $.cookie('mytimeout', count, {
        expires: 7,
        path: '/'
    });
    $.cookie('timepassed', new Date().getTime(), {
        expires: 7,
        path: '/'
    });
};
</script>
