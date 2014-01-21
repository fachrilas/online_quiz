<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Add question</h3>
                </div>
                <div class="panel-body">
                   <form role="form" action="<?=base_url().'quiz/add_question'?>" method="POST" enctype="multipart/form-data" name="questionForm">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Level</label>
                        <select name="level" class="form-control">
                            <?foreach ($levels as $level)
                            {?>
                                <option value="<?=$level->id?>"><?=$level->level_name?></option>
                            <?}?>
                        </select>
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Question Number</label>
                        <input type="text" name="question_number" class="form-control" id="question_number" placeholder="question number" required/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Question</label>
                        <textarea name="question" class="form-control" id="exampleInputEmail1" placeholder="Question" required></textarea>
                      </div>
                         <div class="form-group">
                        <label for="exampleInputEmail1">Hint *</label>
                        <textarea name="hint" class="form-control" id="exampleInputEmail1" placeholder="Give a hint" required></textarea>
                          </div>
                    
                           <div class="form-group">
                        <label for="exampleInputEmail1">Score</label>
                        <textarea name="score" class="form-control" id="exampleInputEmail1" placeholder="Score" required></textarea>
                          </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Subjects *</label>
                        <select name="subjects">
                            <option value="<?=SUBJECTS_MATH ;?>">MATH</option>
                            <option value="<?=SUBJECTS_SCIENCE ;?>">SCIENCE</option>
                            <option value="<?=SUBJECTS_ENG ;?>">ENG</option>
                            <option value="<?=SUBJECTS_GENERAL ;?>">GENERAL</option>
                           
                        </select>
                        </div>
                    
                       
                       
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="sample_file" class="form-control" id="exampleInputPassword1"/>
                      </div> 
                       <hr/>
                        <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio"  id="MultipleChoiceQuestions" name="MultipleEndedQuestions" value="0" checked="checked"> 
                         Multiple Choice Questions       
                        </label>
                         <label class="radio-inline">
                            <input type="radio"  id="OpenEndedQuestions" name="MultipleEndedQuestions" value="1" > 
                         Open Ended Questions       
                        </label>
                           
                           
                       </div>
                       <hr/>
                       <div id="OpenEndedMultipleQuestionsAppended">
                       </div>
                      <div id="Options">
                      <div class="form-group">
                        <label for="option1">Option 1</label>
                        <input type="text" name="option1" class="form-control" id="exampleInputPassword1" placeholder="Option 1" required>
                      </div>
                       <div class="form-group">
                        <label for="option2">Option 2</label>
                        <input type="text" name="option2" class="form-control" id="exampleInputPassword1" placeholder="Option 2" required>
                      </div>
                       <div class="form-group">
                        <label for="option3">Option 3</label>
                        <input type="text" name="option3" class="form-control" id="exampleInputPassword1" placeholder="Option 3" required>
                      </div>
                       <div class="form-group">
                        <label for="option4">Option 4</label>
                        <input type="text" name="option4" class="form-control" id="exampleInputPassword1" placeholder="Option 4" required>
                      </div>
                       <hr/>
                       <div class="form-group">
                       <label for="Answer">Correct Answer</label><br/>
                        <label class="radio-inline">
                            <input type="radio"  value="option1" name="answer" checked="checked"> Option 1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="option2" name="answer"> Option 2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="option3" name="answer"> Option 3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="option4" name="answer"> Option 4
                        </label>
                       </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                     <button type="button" id ="cancel" class="btn btn-primary">Cancel</button>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url().'../assets/js/ShowHide.js' ?>"></script>