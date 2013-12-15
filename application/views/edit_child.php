<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Add Child</h3>
                </div>
                <div class="panel-body">
                   <form role="form" action="<?=base_url().'user/do_edit_child?cid='.$child->id?>" method="POST" enctype="multipart/form-data" name="questionForm">
                        <div class="form-group">
                            <label for="option4">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputPassword1" value="<?=$child->username?>" required>
                        </div>
                        <div class="form-group">
                            <label for="option4">Password</label>
                            <input type="password" name="option4" class="form-control" id="exampleInputPassword1" placeholder="Enter New Password or leave blank" value="">
                        </div>
                        <div class="form-group">
                            <label for="option4">Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="exampleInputPassword1" value="<?=$child->name?>" required>
                        </div>
                       <div class="form-group">
                           <label for="option4">D.O.B (mm/dd/yyy)</label>
                           <br/>
                           <select name="dd" class="form-control" style="width: 8%;float: left;">
                               <? for ($count = 1;$count <= 12;$count++)
                                  {
                               ?>
                                    <? if ($count == $child->dd)
                                       {
                                    ?>
                                           <option value="<?=$count?>" selected="selected"><?=$count?></option>
                                    <?
                                       }
                                       else
                                       {
                                       ?>
                                           <option value="<?=$count?>"><?=$count?></option>
                                  <?    
                                       }
                                  }
                                  ?>
                           </select>
                           <select name="mm" class="form-control" style="width: 8%;float: left;">
                               <? for ($count = 1;$count <= 31; $count++)
                                  {
                               ?>
                                    <? if ($count == $child->mm)
                                       {
                                    ?>
                                           <option value="<?=$count?>" selected="selected"><?=$count?></option>
                                    <?
                                       }
                                       else
                                       {
                                       ?>
                                           <option value="<?=$count?>"><?=$count?></option>
                                  <?    
                                       }
                                  }
                                  ?>
                           </select>
                           <select name="yyyy" class="form-control" style="width: 8%;float: left;">
                               <? for ($count = 1995;$count <= 2014;$count++)
                                  {
                               ?>
                                    <? if ($count == $child->yy)
                                       {
                                    ?>
                                           <option value="<?=$count?>" selected="selected"><?=$count?></option>
                                    <?
                                       }
                                       else
                                       {
                                       ?>
                                           <option value="<?=$count?>"><?=$count?></option>
                                  <?    
                                       }
                                  }
                                  ?>
                           </select>
                        </div>
                       <br/>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" name="sample_file" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Likes</label>
                            <textarea name="likes" class="form-control" placeholder="Please enter the likes of your child" required><?=$child->likes?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dislikes</label>
                            <textarea name="dislikes" class="form-control" placeholder="Please enter the dislikes of your child" required><?=$child->dislikes?></textarea>
                        </div>
                        <hr/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>