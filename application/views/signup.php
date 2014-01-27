<style>
    
</style>
<div class="row">    
<div class="col-md-2"></div>
<div class="col-md-10">
<div class="signupDes" style="background-image:url('<? echo base_url().'../assets/img/signup-bg.png'?>');">
        <img src="<? echo base_url()?>../assets/img/Pen-lengthened.png" >
        <p>ministry of excelenece ministry of excelenece ministry of excelenece ministry of excelenece 
        ministry of excelenece 
        ministry of excelenece 
        ministry of excelenece
        ministry of excelenece 
        ministry of excelenece 
        ministry of excelenece</p>
</div>
   
    <div class="signupform">
        <form name="signup" action="<?=base_url().'user/do_register'?>" method="post">
        <h3><i>Sign up for your <b>Free</b> account!</i></h3>
        <label>Email Address *</label>
        <input type="text" name="email" class="form-control" required>
        <label>Full Name *</label>
        <input type="text" name="name" class="form-control" required>
        <label>Password *</label>
        <input type="password" name="password" class="form-control" required>
        <label>Confirm Password *</label>
        <input type="password" name="cpassword" class="form-control" required>
        
        <label>Contact Number *</label>
        <input type="text" name="contact" class="form-control" required>
        <label>Purpose *</label>
        <input type="text" name="purpose" class="form-control" required>
        
        <br>
        <input type="submit" class="btn btn-primary pull-right"  >
        <br>
        </form>
    
    </div>

</div>
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