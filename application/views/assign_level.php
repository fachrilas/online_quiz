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
                            <th>assigned topic</th>
                            <th>operation</th>
                        </tr>
                        
                            <?php
                        
                    foreach($assign_quiz as $user)
                    {
                    ?>
                            <tr><td><?=$child->name;?></td>
                            <td><?=$user->level_name;?></td>
                            <?php if($user->operation==TAKEN_YES)
                            {?>
                            <td>already taken</td>
                            <?php } else{ ?>
                            <td><a href="<?php echo base_url(); ?>user/start_quiz/0">Start</a></td>
                                </tr><?php 
                            }
                    }
                            ?>
                        
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>