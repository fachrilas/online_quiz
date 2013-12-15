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
                        <label for="exampleInputEmail1">Question</label>
                        <textarea name="question" class="form-control" id="exampleInputEmail1" placeholder="Question" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="sample_file" class="form-control" id="exampleInputPassword1"/>
                      </div> 
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>