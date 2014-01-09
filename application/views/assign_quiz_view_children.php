<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Assign a Quiz</h3>
                </div>
                
                <div class="panel-body">
                    
                    <table class="table table-hover">
                        <form name="asign_quiz" action="<?=base_url()?>user/do_assign_quiz" method="post" >
                   
                        <tr>
                            <td>
                                Name:
                                <select name="child">
                                     <?
                    foreach($children as $child)
                    {
                    ?>
                                    <option value="<?=$child->username;?>"> <?=$child->name;?></option>
                                <?
                    }
                    ?>
                                
                                </select>
                             </td>
                             </tr>
                             <tr>
                               <td>
                                Level:
                                <select name="level">
                                     <?
                    foreach($levels as $level)
                    {
                    ?>
                                    <option value="<?=$level->id;?>"> <?=$level->level_name;?></option>
                                <?
                    }
                    ?>
                                </select>
                             </td>
                        </tr>
                        <tr>
                            <td>
                        <input type="submit" value="submit" class="btn btn-primary">
                            </td>
                        </tr>
                   
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>