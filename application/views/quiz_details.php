<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Quiz Details</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <th>Number</th>
                        <th>Question</th>
                         <th>Question hint</th> 
                        
                        <th>View Answer</th>
                        
                        <th>Operations</th>
                    <?
                        foreach($quiz_details as $question)
                        {
                    ?>
                        <tr>
                            <td><?=$question['question']->question_number?></td>
                            <td><?=$question['question']->question?></td>
                              <td><?=$question['question']->q_hint?></td>
                              <td><a href="<?=base_url()?>quiz/viewAnswer?qid=<?=$question['question']->id?>" target="_blank">answer</a></td>
                          
                                    <td>
                                        <a href="<?=base_url()?>quiz/edit_question?qid=<?=$question['question']->id?>">Edit</a> | 
                                        <a href="#">Delete </a>| 
                                        <a href="<?=base_url()?>quiz/preview?qid=<?=$question['question']->id?>" target="_blank">Preview</a>
                                    </td>
                        </tr>
                    <?
                        }
                    ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>