<script>
$(function(){
    $('form').on('submit',function(e)
    {
        e.preventDefault();
        $('.alert').remove();
        $.ajax
        ({
            url : $(this).attr('action'),
            data: $(this).serialize(),
            type:'POST',
            success:function(data)
            {
                if(data == <?=SUCCESS_CODE?>)
                {
                    window.location.href = '<?=base_url().'user/user_home'?>'
                }
                else if (data == <?=ERROR_PASSWORD_NOT_MATCH?>)
                {
                    $('.form-container').prepend("<div class='alert alert-danger'><?=MSG_PASSWORD_NOT_MATCH?></div>");
                    $("html, body").animate({ scrollTop: $('.alert').offset().top });
                }
                else if (data == <?=ERROR_USERNAME_ALREADY_EXIST?>)
                {
                    $('.form-container').prepend("<div class='alert alert-danger'><?=MSG_USER_ALREADY_EXISTS?></div>");
                    $("html, body").animate({ scrollTop: $('.alert').offset().top });
                }
                
            }
        });
    });    
});
</script>
<div class="container form-container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Sign up</h3>
                </div>
                <div class="panel-body">
                   <form role="form" action="<?=base_url().'user/do_register'?>" method="POST" enctype="multipart/form-data" name="questionForm">
                      <div class="form-group">
                        <label for="First Name">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required />
                      </div>
                       <div class="form-group">
                        <label for="First Name">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" required />
                      </div>
                       <div class="form-group">
                        <label for="First Name">Contact Number</label>
                        <input type="text" name="contact" class="form-control"  placeholder="Contact Number" required />
                      </div>
                       <div class="form-group">
                        <label for="First Name">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                      </div>
                      <div class="form-group">
                        <label for="First Name">Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required />
                      </div>
                      <div class="form-group">
                        <label for="First Name">Purpose</label>
                        <textarea  name="purpose" class="form-control" placeholder="Briefly describe your purpose of using this application" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="First Name">Child's Strengths</label>
                        <textarea  name="strength" class="form-control" placeholder="What are your child's strengths?"  required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="First Name">Child's Weaknesses</label>
                        <textarea  name="weakness" class="form-control" placeholder="What are your child's weakness?" required></textarea>
                      </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>