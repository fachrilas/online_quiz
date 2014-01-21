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
        <form method="post" action="" class="form-group" >
        <table class="PTable">
            <tr >
                <td ><b>Question <?=$questionDetails['question']->question_number?>:</b></td></tr><tr>
                <td><?= substr($questionDetails['question']->question,0,180) ?> ?</td></tr><tr>
                
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
            <tr>
            
                <td>
                    <br>
                    <input type="radio" name="radiog_lite" id="radio1" class="css-checkbox" /><label for="radio1" class="css-label">A</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" /><label for="radio2" class="css-label">B</label>
                </td>
            </tr>
                <tr><td>
                    <input type="radio" name="radiog_lite" id="radio3" class="css-checkbox" /><label for="radio3" class="css-label">C</label>
                </td>
                </tr><tr>
                <td>
                    <input type="radio" name="radiog_lite" id="radio4" class="css-checkbox" /><label for="radio4" class="css-label">D</label>
                </td>
            </tr>
           
        </table>
    </form>
        
        
    </div>    
    
</div>
