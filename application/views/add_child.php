<div class="container">
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
    <form name="signup" action="<?=base_url().'user/do_add_child'?>" method="POST" enctype="multipart/form-data" name="questionForm">
        <h3><i>Add Child</i></h3>
        
        <label for="option4">Username/Email</label>
        <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username" required />
        
        <label for="option4">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required />
                                                    
        <label for="option4">Full Name</label>
        <input type="text" name="full_name" class="form-control" id="exampleInputPassword1" placeholder="Full Name" required />

        <label for="exampleInputEmail1">Level</label>
        <input type="text" name="level" class="form-control" id="exampleInputPassword1" placeholder="Level" required />
        
        <label for="option4">D.O.B (mm/dd/yyy)</label>
        <br/>
        <select name="mm" class="form-control" style="width: 15%;float: left;margin-left: 4px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <select name="dd" class="form-control" style="width: 15%;float: left;margin-left: 4px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        <select name="yyyy" class="form-control" style="width: 30%;float: left;margin-left: 4px;">
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
        </select>
        <br/>
        
        
        <hr/>
        <button type="submit" class="btn btn-primary">Add Child</button>
        
    </form>
    
    </div>

</div>
</div>
</div>
<!--    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Add Child</h3>
                </div>
                <div class="panel-body">
                   <form role="form" action=">
                        <div class="form-group">
                            <label for="option4">Username/Email</label>
                            <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="option4">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="option4">Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="exampleInputPassword1" placeholder="Full Name" required>
                        </div>
                       <div class="form-group">
                           <label for="option4">D.O.B (mm/dd/yyy)</label>
                           <br/>
                           <select name="mm" class="form-control" style="width: 8%;float: left;">
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                               <option value="6">6</option>
                               <option value="7">7</option>
                               <option value="8">8</option>
                               <option value="9">9</option>
                               <option value="10">10</option>
                               <option value="11">11</option>
                               <option value="12">12</option>
                           </select>
                           <select name="dd" class="form-control" style="width: 8%;float: left;">
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                               <option value="6">6</option>
                               <option value="7">7</option>
                               <option value="8">8</option>
                               <option value="9">9</option>
                               <option value="10">10</option>
                               <option value="11">11</option>
                               <option value="12">12</option>
                               <option value="13">13</option>
                               <option value="14">14</option>
                               <option value="15">15</option>
                               <option value="16">16</option>
                               <option value="17">17</option>
                               <option value="18">18</option>
                               <option value="19">19</option>
                               <option value="20">20</option>
                               <option value="21">21</option>
                               <option value="22">22</option>
                               <option value="23">23</option>
                               <option value="24">24</option>
                               <option value="25">25</option>
                               <option value="26">26</option>
                               <option value="27">27</option>
                               <option value="28">28</option>
                               <option value="29">29</option>
                               <option value="30">30</option>
                               <option value="31">31</option>
                           </select>
                           <select name="yyyy" class="form-control" style="width: 20%;float: left;">
                               <option value="1995">1995</option>
                               <option value="1996">1996</option>
                               <option value="1997">1997</option>
                               <option value="1998">1998</option>
                               <option value="1999">1999</option>
                               <option value="2000">2000</option>
                               <option value="2001">2001</option>
                               <option value="2002">2002</option>
                               <option value="2003">2003</option>
                               <option value="2004">2004</option>
                               <option value="2005">2005</option>
                               <option value="2006">2006</option>
                               <option value="2007">2007</option>
                               <option value="2008">2008</option>
                               <option value="2009">2009</option>
                               <option value="2010">2010</option>
                               <option value="2011">2011</option>
                               <option value="2012">2012</option>
                               <option value="2013">2013</option>
                           </select>
                        </div>
                       <br/>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Level</label>
                            <input type="text" name="level" class="form-control" id="exampleInputPassword1" placeholder="Level" required />
                        </div>
                        <hr/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->