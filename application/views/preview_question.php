<?
//    var_dump($questionDetails);
?>
<div class="row" style="padding: 24px;min-height: 500px;">
    <div class="question-container" style="padding: 7px;">
        <b><u>Question <?=$questionDetails['question']->question_number?>:</u></b> <?= $questionDetails['question']->question ?>
    </div>
    <?
    if($questionDetails['question']->image_relative)
    {
    ?>
    <div class="image-container">
        <center><img src="<?=base_url().'../'.$questionDetails['question']->image_relative?>"/></center>
    </div>
    <?
    }
    ?>
    <div class="options" style="padding: 7px;">
        <input type="radio" name="option" value="a" /> a <br/>
        <input type="radio" name="option" value="a" /> b <br/>
        <input type="radio" name="option" value="a" /> c <br/>
        <input type="radio" name="option" value="a" /> d <br/>
    </div>
</div>