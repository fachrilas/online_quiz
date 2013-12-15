<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Quiz Details</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <th>Username</th>
                        <th>Name</th>
                        <th>Likes</th>
                        <th>Dislikes</th>
                        <th>Operations</th>
                   
                    <?
                    foreach($children as $child)
                    {
                    ?>
                        <tr>
                            <td><?=$child->username;?></td>
                            <td><?=$child->name;?></td>
                            <td><?=$child->likes;?></td>
                            <td><?=$child->dislikes;?></td>
                            <td> 
                                <a href="<?=base_url()?>user/edit_child?cid=<?=$child->id?>">Edit</a> | 
                                <a href="<?=base_url()?>user/delete_child?cid=<?=$child->id?>">Delete</a>
                            </td>
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