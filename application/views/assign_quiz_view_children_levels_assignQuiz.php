<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Quiz's Details</h3>
                </div>
                
                <div class="panel-body">
                    
                    <table class="table table-hover">
                        <th>Quiz</th>
                        <th>level</th>
                        <th>assign</th>
                        <th>not assign</th>
                        
                        <form class="form-group" method="post" name="assin_auiz" >
                               <?
                               $i=0;
                        foreach($quiz_details as $question)
                        {
                                ?>
                  
                            <tr>
                                    <td>
                                       <?=$question['question']->question?> 
                                    </td>  
                                    <td>
                                      <?=$level?>  
                                    </td>
                                    <td>
                                        <input type="radio" name="assign<?=$i?>" value="<?=$question['question']->id?>" required >  
                                    </td>
                                    <td>
                                        <input type="radio" name="assign<?=$i?>" value="" required checked >  
                                    </td>
                            
                                            
                            
                            </tr>
                             
                             
                             <?
                         
                             $i++;
                        }
                             ?>
                            
                        </form>
                
                    
                    </table>
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>