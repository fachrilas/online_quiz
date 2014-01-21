<link href="<?php echo base_url().'../assets/css/preview.css' ?>" rel="stylesheet">

    <div class="preview" style="background-image: url('<? echo base_url().'../assets/img/Quizboard-ReviewResults011.png'?>');background-position:fixed;">
        
      <table class="endQuiz">
            
            <tr >
                <td><?=$obtained?></td>  
            </tr>
            <tr>
                <td><?=$total?></td>
            </tr>
            <tr>
                <td>    
                    <a href="javascript:void(0);"><img src="<? echo base_url().'../assets/img/back.png'?>" id="back" onclick="mybackFunction()" class="" style="width: 14%;
                        margin-top: 80px;
                        margin-left: -12%;" /> </a>
                    
                    <a href="javascript:void(0);"><img src="<? echo base_url().'../assets/img/reviewResult-btn.png'?>" id="next" class="pull-right" style="width: 23%;
                        margin-right: 63%;
                        margin-top: 86px;" /> </a>
                </td>
            </tr>
      </table>
        
        
    </div>


<script>
$( "#back" ).click(function() {
 //alert('hello');
 history.go(-1);

});
</script>