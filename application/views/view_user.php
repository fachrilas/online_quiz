<div class="container">
    <div class="row" style="margin-top: 20px; ">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            
     
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                <h3 class="panel-title">Users Details</h3>
                </div>
                
                <div class="panel-body">
                    <table class="table table-hover">
                        <th>username</th>
                        <th>Email</th>
                         <th>Name</th> 
                        
                        <th>Type</th>
                        
                        <th>Contact</th>
                        
                        <th>Purpose</th>
                        <th>Children</th>
                        <th>View Children</th>
                        <?
                        
                    foreach($user as $users)
                    {
                    ?>
                        <tr><td><?=$users->username;?></td>
                            <td><?=$users->email;?></td>
                            <td><?=$users->name;?></td>
                           <?php
                           if ($users->user_type==ADMIN_USER_TYPE)
                                    {
                                     echo '<td>admin</td>';
                                    }
                                elseif ($users->user_type==END_USER_TYPE) 
                                        {
                                            echo '<td>End User</td>';
                                        }
                                            elseif ($users->user_type==CHILDREN_TYPE) 
                                            {
                                                 echo '<td>End User</td>';
                                            }
                                                else
                                                {
                                                     echo '<td>Unknown</td>';
                                                }
                           ?>
                            <td><?=$users->contact;?></td>
                            <td><?=$users->purpose;?></td>
                            <td><?=$users->children_count;?></td>
                            <td><a href="<?=base_url()?>user/user_view_children?user_id=<?=$users->id?>">View Children</a></td>
                        </tr>
                        
                     <?
                    }
                     ?>
                        
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
        