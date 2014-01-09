<div class="container">
    <div class="row" style="margin-top: 20px; ">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            
                   <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Select Level</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                    <?
                        foreach($levels as $level)
                        {
                   ?>
                        <tr>
                            <td style="text-align: center;">
                                <a href="<?echo base_url();?>user/assign_quiz_levels_assignQuiz?level=<?=$level->id?>&cid=<?=$cid ?>">
                                    <?=$level->level_name?>
                                </a>
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