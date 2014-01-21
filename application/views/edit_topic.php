<div class="container">
    <div class="row" style="margin-top: 20px; ">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            
                   <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Select Topic</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                    <?
                        foreach($topic as $topics)
                        {
                   ?>
                        <tr>
                            <td style="text-align: center;">
                                <a href="<?echo base_url();?>quiz/edit_topic_edit?topic_id=<?=$topics->id?>&topic=<?=$topics->level_name;?>">
                                    <?=$topics->level_name?>
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