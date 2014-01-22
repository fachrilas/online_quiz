<link href="<?php echo base_url().'../assets/css/preview.css' ?>" rel="stylesheet">
<style>
    p{
margin-left: 26px;
margin-top: -15px;
margin-bottom: -19px;
    } 
</style>
<?php if($band==BAND1) { ?>
    <div class="preview" style="background-image: url('<? echo base_url().'../assets/img/band1.png'?>');">
<?php } elseif($band==BAND2)  { ?>       
    <div class="preview" style="background-image: url('<? echo base_url().'../assets/img/band2.png'?>');">
<?php } elseif($band==BAND3)  { ?>
            <div class="preview" style="background-image: url('<? echo base_url().'../assets/img/band3.png'?>');">
<?php } else{ ?>     
                    <div class="preview" style="background-image: url('<? echo base_url().'../assets/img/band4.png'?>');">
<?php } ?>     
      <table class="endQuiz">
            
            <tr >
                <td><p><?php echo $obtained;?></p><hr 
style="
width: 82px;
float: left;
background-color: #000;
height: 5px;"
></td>  
                    
            </tr>
            <tr>
                <td><p><?=$total?></p></td>
            </tr>
            <tr>
                <td>    
                    <a href="<?php echo base_url();?>user/children_profile"><img src="<? echo base_url().'../assets/img/back.png'?>" id="back" onclick="mybackFunction()" class="" style="width: 14%;
                        margin-top: 80px;
                        margin-left: -12%;" /> </a>
                    
                    <a href="<?php echo base_url();?>user/review_results_proceed/<?=$userid?>/1"><img src="<? echo base_url().'../assets/img/reviewResult-btn.png'?>" id="next" class="pull-right" style="width: 23%;
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