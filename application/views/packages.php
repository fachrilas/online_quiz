<link href="<?php echo base_url().'../assets/css/packages.css' ?>" rel="stylesheet">
<br>
<div class="row">
    <div class="col-md-4">
        <div class="package" style="background-image: url('<? echo base_url().'../assets/img/PricePlans_monthly_meox.png'?>');">
            <h2>Monthly<br>Subscription</h2>
            <p><b>$14.95</b><br><i>Per Month</i></p><br><br><br>
            <form name="_xclick" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="<?=BUSINESS_URL?>">
    <input type="hidden" name="currency_code" value="<?=CURRENCY_CODE?>">
    <input type="hidden" name="custom" value="<?=$this->session->userdata('user_id')?>" />
    <input type="hidden" name="notify_url" value="<?=PAYPAL_NOTIFY_URL?>" />
    <input type="hidden" name="item_name" value="<?=GOLD_ITEM?>">
    <input type="hidden" name="return" value="<?=RETURN_URL ?>" />
    <input type="hidden" name="amount" value="<?=GOLD_PRICE?>">
    <input type="hidden" name="cancel_return" value="<?=CANCEL_RETURN?>">
<?php
if($this->session->userdata('is_logged_in'))
{
?>
    <input type="image" class="button" src="<?=base_url()?>../assets/img/buy_now_m.png" width="100px" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
    </form>
            <? }else { ?>
          
            <img class="button" src="<?=base_url()?>../assets/img/buy_now_m.png" data-toggle="modal" data-target="#myModal"/>
        <? } ?>
        </div>
</div>
<div class="col-md-4">
     <div class="package" style="background-image: url('<? echo base_url().'../assets/img/PricePlans_half_yearly_meox.png'?>');">
    <h2>Half Yearly<br>Subscription</h2>
    <p><b>$10.95</b><br><i>Per Month</i></p><span>You Save 24$</span><br><br>
   <form name="_xclick" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="<?=BUSINESS_URL?>">
    <input type="hidden" name="currency_code" value="<?=CURRENCY_CODE?>">
    <input type="hidden" name="custom" value="<?=$this->session->userdata('user_id')?>" />
    <input type="hidden" name="notify_url" value="<?=PAYPAL_NOTIFY_URL?>" />
    <input type="hidden" name="item_name" value="<?=BRONZE_ITEM?>">
    <input type="hidden" name="return" value="<?=RETURN_URL ?>" />
    <input type="hidden" name="amount" value="<?=BRONZE_PRICE?>">
    <input type="hidden" name="cancel_return" value="<?=CANCEL_RETURN?>">
<?php
if($this->session->userdata('is_logged_in'))
{
?>
    <input type="image" class="button" src="<?=base_url()?>../assets/img/buy_now_h_y.png" width="100px" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
    </form>
            <? }else { ?>
          
            <img class="button" src="<?=base_url()?>../assets/img/buy_now_h_y.png" data-toggle="modal" data-target="#myModal"/>
        <? } ?>
        </div>
</div>
<div class="col-md-4">
     <div class="package" style="background-image: url('<? echo base_url().'../assets/img/PricePlans_yearly_meox.png'?>');">
            <h2>Yearly<br>Subscription</h2>
            <p><b>$6.95</b><br><i>Per Month</i></p><span>You Save 96$</span><br><br>
            <form name="_xclick" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="<?=BUSINESS_URL?>">
    <input type="hidden" name="currency_code" value="<?=CURRENCY_CODE?>">
    <input type="hidden" name="custom" value="<?=$this->session->userdata('user_id')?>" />
    <input type="hidden" name="notify_url" value="<?=PAYPAL_NOTIFY_URL?>" />
    <input type="hidden" name="item_name" value="<?=SILVER_ITEM?>">
    <input type="hidden" name="return" value="<?=RETURN_URL ?>" />
    <input type="hidden" name="amount" value="<?=SILVER_PRICE?>">
    <input type="hidden" name="cancel_return" value="<?=CANCEL_RETURN?>">
<?php
if($this->session->userdata('is_logged_in'))
{
?>
    <input type="image" class="button" src="<?=base_url()?>../assets/img/buy_y.png" width="100px" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
    </form>
            <? }else { ?>
          
            <img class="button" src="<?=base_url()?>../assets/img/buy_y.png" data-toggle="modal" data-target="#myModal"/>
        <? } ?>
        </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Notification</h4>
      </div>
      <div class="modal-body">
        you should have to login to buy Our packages .!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->