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
        <form name="signup" action="<?=base_url()?>user/contact" method="post">
        <h3><i>Contact us for your <b>Better</b> information!</i></h3>
        <label>Email Address *</label>
        <input type="text" name="email" class="form-control" required>
        <label>phone *</label>
        <input type="text" name="phone" class="form-control" required>
        <label>Message *</label>
        <textarea  name="message" class="form-control" rows="7" required></textarea>
        
        <br>
        <input type="submit" class="btn btn-primary pull-right"  >
        <br>
        </form>
    
    </div>

</div>