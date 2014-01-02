
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
    <?php
    if($questionDetails['question']->type==OPENENDED)
    {
    ?>
    <div class="options" style="padding: 7px;">
        <p><?=$questionDetails['openended'][0]->OpenEndedAnswer1?></p>
    </div>
    <?php
    
    }
    if($questionDetails['question']->type==OPTIONS)
                      {
                          
                      ?>
      <div class="form-group">
                       <label for="Answer">Correct Answer</label><br/>
                       
                        <label class="radio-inline">
                            <? if($questionDetails['options'][0]->is_correct)
                               {
                            ?>
                                <input type="radio"  value="option1" name="answer" checked="checked"> Option 1
                            <?
                               }
                            else
                            {
                            ?>
                                <input type="radio"  value="option1" name="answer"> Option 1
                            <?
                            }
                            ?>
                        </label>
                        <label class="radio-inline">
                            <? if($questionDetails['options'][1]->is_correct)
                               {
                            ?>
                                <input type="radio"  value="option2" name="answer" checked="checked"> Option 2
                            <?
                               }
                            else
                            {
                            ?>
                                <input type="radio"  value="option2" name="answer"> Option 2
                            <?
                            }
                            ?>
                        </label>
                        <label class="radio-inline">
                            <? if($questionDetails['options'][2]->is_correct)
                               {
                            ?>
                                <input type="radio"  value="option3" name="answer" checked="checked"> Option 3
                            <?
                               }
                            else
                            {
                            ?>
                                <input type="radio"  value="option3" name="answer"> Option 3
                            <?
                            }
                            ?>
                        </label>
                        <label class="radio-inline">
                            <? if($questionDetails['options'][3]->is_correct)
                               {
                            ?>
                                <input type="radio"  value="option4" name="answer" checked="checked"> Option 4
                            <?
                               }
                            else
                            {
                            ?>
                                <input type="radio"  value="option4" name="answer"> Option 4
                            <?
                            }
                            ?>
                        </label>
                       </div>
                     
    <?php
                      }
    ?>
</div>
