<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Add topic</h3>
                </div>
                <div class="panel-body">
                   <form role="form" action="<?=base_url().'quiz/do_add_topic'?>" method="POST" enctype="multipart/form-data" name="questionForm">
                        <div class="form-group">
                            <label for="option4">Topic Name</label>
                            <input type="text" name="topic" class="form-control" id="exampleInputPassword1" placeholder="add topic" required>
                          </div>
                        <hr/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>