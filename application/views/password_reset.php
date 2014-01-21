
<script>
$(document).ready(function(){
  $("form").submit(function(){
    if($('#pass').val()!==$('#cpass').val()){
       alert('Password not matches');
       return false;
   }
   return true;
  });
});
</script>
<div class="container">
    <div class="row" style="margin-top: 20px; ">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            
                   <div class="panel panel-default">
                
                       
                <div class="panel-heading">
                <h3 class="panel-title">Reset your password </h3>
                </div>
                <div class="panel-body">
                    <form class="form-inline" action="<?=base_url().'user/password_update'?>" method="post" role="form">
  <div class="col-xs-8">
    <label class="sr-only" for=""></label>
   <input type="password" class="form-control" name="new_password" id="pass" placeholder="Password" required>
  </div>
                        <br/>
                             <br/>
                                  <br/>
                        <div class="col-xs-8">
    <label class="sr-only" for=""></label>
   <input type="password" class="form-control" name="confirm_password" id="cpass" placeholder="Password" required>
  </div>
                        
                        <input type="hidden" name="token" value="<?=$token; ?>">
                        <input type="submit" id="reset_form" class="btn btn-info" value="Submit">
</form>
                    
                </div>
            </div>
            </div>
        </div>
  
</div>

