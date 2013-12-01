<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Quiz Details</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <th>Question</th>
                        <th>Option 1</th>
                        <th>Option 2</th>
                        <th>Option 3</th>
                        <th>Option 4</th>
                        <th>Operations</th>
                    <?
                        foreach($quiz_details as $question)
                        {
                    ?>
                        <tr>
                            <td><?=$question['question']->question?></td>
                            <?
                            foreach($question['options'] as $option)
                            {
                                if($option->is_correct)
                                {
                            ?>
                                    <td class="success"><?=$option->option?></td>
                            <?
                                }
                                else
                                {
                                ?>
                                    <td><?=$option->option?></td>
                                <?
                                }
                            }
                            ?>
                                    <td>
                                        <a href="<?=base_url()?>quiz/edit_question?qid=<?=$question['question']->id?>">Edit</a> | 
                                        <a href="#">Delete </a>
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