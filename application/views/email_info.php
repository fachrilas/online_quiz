<div class="container">
    <div class="row" style="margin-top: 20px; ">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            
                   <div class="panel panel-default">
               
                <? if($message==EMAIL_NOT_EXISTS) 
                {
                    ?>    
                       
                <div class="panel-heading">
                <h3 class="panel-title"><? echo EMAIL_NOT_EXISTS; ?></h3>
                </div>
                <div class="panel-body">
                    <form class="form-inline" action="<?=base_url().'user/PassGet'?>" method="post" role="form">
  <div class="col-xs-4">
    <label class="sr-only" for="exampleInputEmail2">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Enter email" required>
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
                 <?
                }
                else if ($message==EMAIL_SENT)  {
                            echo '
                        <div class="panel-heading">
                <h3 class="panel-title">Email Sent</h3>
                        </div><label class="label label-success">'.EMAIL_SENT.'</label>';
                            
                                        
                           }
                           
                else if ($message==PASS_UPDATED)  {
                            echo '
                        <div class="panel-heading">
                <h3 class="panel-title">Password updated</h3>
                        </div><label class="label label-success">'.PASS_UPDATED.'</label>';
                            
                                        
                           }
                           
                        else
                           {
                               echo "invalid!";
                           }
                            ?>
                    
                    
                </div>
            </div>
            </div>
        </div>
  
</div>