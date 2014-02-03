<link href="<?php echo base_url().'../assets/css/paypal-thankyou.css' ?>" rel="stylesheet">
<div class="paypal">
<div class="row">
<div class="col-md-12">
    <img class="image-container" src="<? echo base_url().'../assets/img/thankyou.png'?>" >
    
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-2">
            <img class="image-container" src="<?php echo base_url().'../assets/img/MOExLogo.png' ?>" style="width: 100px;height: 100px;"/>
        </div>                
   <div class="col-md-3" style="
        margin-top:5px;text-align: left;margin-top: 39px;
        text-align: left;
        margin-left: -23px;">
                      <i>The beacon of light amidst to excellence</i>
                        </div>
        <div class="col-md-5"></div>
        <div class="col-md-2"><p style="margin-top: 39px;">transaction No.<?=$user->txn_id?></p></div>
        

    </div>
</div>
    <div class="row">
        <div class="col-md-12"><br><br></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Dear <?=$user_data->name?></p>
            <p>Thank you for your subscription.</p>
            <p>Please allow a few moments for the transaction to appear in your account.</p>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-12">
            <table class="col-md-12">
                <tr style="border-bottom: 1px solid black;border-top: 1px solid black;">
                    <td class="col-md-6">
                        Description
                    </td>
                    <td>unit price</td>
                    <td>Qunatity</td>
                    <td>Amount</td>
                </tr>
                 <tr style="border-bottom: 1px solid black;border-top: 1px solid black;">
                    <td class="col-md-6">
                        <?=$user->item_name?> Subscription (invoice #<?=$user->txn_id?>)
                    </td>
                    <td>SGD$<?php
                    if($user->item_name==GOLD_ITEM)
                    {
                        echo GOLD_PRICE;
                    }
                    elseif($user->item_name==BRONZE_ITEM)
                    {
                        echo BRONZE_PRICE;
                    }
                    else
                    {
                        echo SILVER_PRICE;
                    }
                    ?></td>
                    <td>1</td>
                    <td>SGD$<?php
                    if($user->item_name==GOLD_ITEM)
                    {
                        echo GOLD_PRICE;
                    }
                    elseif($user->item_name==BRONZE_ITEM)
                    {
                        echo BRONZE_PRICE;
                    }
                    else
                    {
                        echo SILVER_PRICE;
                    }
                    ?></td>
                </tr>
                <tr>
                    <td class="col-md-6"></td>
                    <td></td>
                    <td>Subtotal</td>
                    <td>SGD$
                    <?php
                    if($user->item_name==GOLD_ITEM)
                    {
                        echo GOLD_PRICE;
                    }
                    elseif($user->item_name==BRONZE_ITEM)
                    {
                        echo BRONZE_PRICE;
                    }
                    else
                    {
                        echo SILVER_PRICE;
                    }
                    ?></td>
                    
                </tr>
                <tr>
                    <td class="col-md-6"></td>
                    <td></td>
                    <td><b>Total</b></td>
                    <td>SGD$
                    <?php
                    if($user->item_name==GOLD_ITEM)
                    {
                        echo GOLD_PRICE;
                    }
                    elseif($user->item_name==BRONZE_ITEM)
                    {
                        echo BRONZE_PRICE;
                    }
                    else
                    {
                        echo SILVER_PRICE;
                    }
                    ?></td>
                <br>
                </tr>
                 <tr>
                    <td class="col-md-6"></td>
                    <td></td>
                    <td><b>Payment</b></td>
                    <td>SGD$
                    <?php
                    if($user->item_name==GOLD_ITEM)
                    {
                        echo GOLD_PRICE;
                    }
                    elseif($user->item_name==BRONZE_ITEM)
                    {
                        echo BRONZE_PRICE;
                    }
                    else
                    {
                        echo SILVER_PRICE;
                    }
                    ?>
                    </td>
                    
                </tr>
                
            </table>
            <br>
            
            <p class="pull-right" style="text-align: right;">Charge will appear on your credit card statment as "PAYPAL MOEX"<br>PAment sent to <a href="mailto:moex@ministryofexcellence.com.sg">moex@ministryofexcellence.com.sg</a></p>
            <br>
            <br>
            <p><b>Isue with this transaction ?</b></p>
            <p>Feel free to contact us at support@ministryofexcellence.com.sg within 7 days.</p>
            <p><center><button class="btn btn-primary" style="width: 52%;height: 50px;border-radius: 12px;" id="button">Get started Now</button></center>
        </p>
        
        </div>
       
    </div>
</div>
<script>
    $('#button').on('click',function () {
window.location.href = '<? echo base_url()?>user/user_home';
})
</script>    