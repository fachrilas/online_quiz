<style>
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;

}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    margin-top: 10px;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}

</style>
<script>
    $(function(){
        $('.usertTypeForm').on('change',function(event)
        {
            window.location.href = 'login?page=sign_in&type='+$(this).val();
        });
    });
</script>
<div class="container">
    <?
        if(isset($error))
        {
            echo "<div class='alert alert-danger'>".MSG_USER_PASSWORD_INVALID."</div>";
        }
        if(isset($_GET['type']))
        {
            $type = $_GET['type'];
        }
        else
        {
            $type = END_USER_TYPE;
        }
    ?>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><center>Sign in to your MOEx Account</center></h3>
                </div>
                <?
                if($type == END_USER_TYPE)
                {
                ?>
                    
                    <img class="profile-img" src="<? echo base_url().'../assets/img/Icon-Parent-Small.png'?>" alt="">
                    <form class="form-signin" action="validate_user" method="POST">
                        You are signing in as a:
                        <select name="usertype" class="form-control usertTypeForm">
                            <option value="<?=END_USER_TYPE?>" selected="selected">Parent</option>
                            <option value="<?=CHILDREN_TYPE?>">Student</option>
                            <option value="<?=TUTOR_TYPE?>">Tutor</option>
                        </select>
                        <br/>
                        <input type="text" class="form-control" placeholder="Email" name="username" required autofocus />
                        <input type="password" class="form-control" placeholder="Password" name="password" required />
                        
                        <a href="forgetPass">Forgot your password ?</a>
                        <br/>
                        <br/>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in
                        </button>
                    </form>
                <?
                }
                else if ($type == CHILDREN_TYPE)
                {
                ?>
                    <img class="profile-img" src="<? echo base_url().'../assets/img/Icon-Student-Small.png'?>" alt="">
                    <form class="form-signin" action="validate_user" method="POST">
                        You are signing in as a:
                        <select name="usertype" class="form-control usertTypeForm">
                            <option value="<?=END_USER_TYPE?>">Parent</option>
                            <option value="<?=CHILDREN_TYPE?>" selected="selected">Student</option>
                            <option value="<?=TUTOR_TYPE?>">Tutor</option>
                        </select>
                        <br/>
                        <input type="text" class="form-control" placeholder="Email" name="username" required autofocus />
                        <input type="password" class="form-control" placeholder="Password" name="password" required />
                          <a href="forgetPass">Forgot your password ?</a>
                        <br/>
                        <br/>
                      
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in
                        </button>
                    </form>
                <?
                }
                else if ($type == TUTOR_TYPE)
                {
                ?>
                    <img class="profile-img" src="<? echo base_url().'../assets/img/Icon-Tuitor-Small.png'?>" alt="">
                    <form class="form-signin" action="validate_user" method="POST">
                        You are signing in as a:
                        <select name="usertype" class="form-control usertTypeForm">
                            <option value="<?=END_USER_TYPE?>">Parent</option>
                            <option value="<?=CHILDREN_TYPE?>">Student</option>
                            <option value="<?=TUTOR_TYPE?>" selected="selected">Tutor</option>
                        </select>
                        <br/>
                        <input type="text" class="form-control" placeholder="Email" name="username" required autofocus />
                        <input type="password" class="form-control" placeholder="Password" name="password" required />
                          <a href="forgetPass">Forgot your password ?</a>
                        <br/>
                        <br/>
                      
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in
                        </button>
                        <br />
                        OR
                        <br/>
                        
                    </form>
                <?
                }
                ?>
                
            </div>
            <a href="<? echo base_url().'user/signup'?>" class="text-center new-account">Sign up for a free account</a>
        </div>
    </div>
</div>