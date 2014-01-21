 <?php  if($this->session->userdata('user_type')==ADMIN_USER_TYPE)
                    {
                    ?>
<div style="margin-top: 15px;">
    
</div>

    <?php
    
include_once 'template/sidebar_admin.php';

                    }
 else {
     show_404();
     
 }
?>
