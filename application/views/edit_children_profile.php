 <link href="<?php echo base_url().'../assets/css/profile.css' ?>" rel="stylesheet">
<div style="margin-top: 50px;"></div>
<div class="row">
  <div class="col-md-4">
      <table>
          <tr>
              <td style="width: 20%;"></td>
              <td style="width: 20%;"></td>
              <td style="width:80%;border: #000 solid thin;border-radius: 58px;">
                  <img class="profile-img" style="width: 100%;padding-top: 10px;padding-right: 5px;padding-bottom: 5px;padding-left: 10px;"   src="<? echo base_url().'../assets/img/Icon-Student-Small.png'?>">
                  <p><center><a style="text-decoration:underline;color: #000" > My Profile </a></center></p>    
              </td>
              <td >
                  <p class="editProfile">
                      Edit profile
                  </p>
              </td>
          </tr>  
          
        <tr>
              <td style="width: 20%;"></td>
              <td colspan="2">
                  <ul class="profile">
                      <li >
                          <a href=""><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MySchBag.png'?>" alt="" height="30px">My Report Card</a>
                      </li>
                       <li >
                           <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MySchHolidays.png'?>" alt="" height="30px">My School Bag</a>
                      </li>
                      <li >
                          <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MyStickers.png'?>" alt="" height="30px">My Stickers </a>
                      </li>
                      <li >
                          <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-ReportCard.png'?>" alt="" height="30px">My School Holidays</a>
                      </li>
                  </ul>
              </td>   
              
          </tr>
          
      </table>
      </div>
        
                                               

    <div class="col-md-7">
        <div style="border:#000 solid thin;background-color:#DFF9FA;border-radius: 10px; ">
            <br> <p class="sec"><b>About Me</b></p>  
           
            <div style="border:#000 solid thin;background-color:#ffffff;border-radius: 10px;margin: 20px; ">
                <br>
                 <table>
                     <form class="form-horizontal" action="<? echo base_url()."user/profile_update"; ?>" method="POST">
                                        
                                        <tr>
                                            <td width="200px;"><p class="sec"><b>Full Name</b>:</p></td>
                                            <td width="70%"><input type="text" name="name" class="form-control input-sm" value="<?=$child->name; ?>" required autofocus/></td>
                                     
                                        </tr>
                                        
                 </table>
                <hr>

                 <table>
                                        
                                        <tr>
                                            <td width="200px;"><p class="sec"><b>Member Since</b>:</p></td>
                                            <td width="70%"><input type="text" class="form-control input-sm" name="member_Since" value="<?=$child->member_Since; ?>" required readonly/></td>
                                        </tr>
                                        
                 </table>
                
                <hr>
                 <table>
                                        
                                        <tr>
                                            <td width="200px;"><p class="sec"><b>Last Login</b>:</p></td>
                                            <td width="70%"><input type="text" name="last_login" class="form-control input-sm" value="<?=$child->last_login; ?>" required readonly/></td>
                                        </tr>
                                        
                 </table>
                
                <hr>
                 <table>
                                        
                                        <tr>
                                            <td width="200px;"><p class="sec"><b>Today's mood</b>:</p></td>
                                            <td width="70%"><input type="text" name="mood" value="<?=$child->mood; ?>" class="form-control input-sm" required/></td>
                                        </tr>
                                        
                 </table>
                
                <hr>
                <div class="plast">
                    <br>
                    <p class="sec" style="text-decoration:underline;"><b>Last journal Entry:</b>: 1 january,2014</p>
                    
                        <br>
                       
                      <table>
                                        
                                        <tr>
                                            
                                            <td class="sec" width="670px" >
                                                
                                                <textarea class="form-control" rows="8"></textarea>
                                                <br>
                                                <input type="submit" class="btn btn-primary pull-right" >
                                                </form>
                                            </td>
                                        </tr>
                                        
                 </table>
                
                </div>
            </div>
            
            
        </div>
    </div>
</div>