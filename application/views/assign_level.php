<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">View assigned Quiz</h3>
                </div>
                
                <div class="panel-body">
                    
                    <table class="table table-hover">

                        <tr>
                            <th>Children name</th>
                            <th>assign quiz</th>
                            <th>operation</th>
                        </tr>
                        <tr>
                            <?
                        
                    foreach($assign_quiz as $user)
                    {
                    ?>
                            <td><?=$user->child_username;?></td>
                            <td><?=$user->level;?>-level</td>
                            <td><a href="<?=base_url()?>user/start_quiz/0">Start</a></td>
                            
                            <?
                            }
                            ?>
                        </tr>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>