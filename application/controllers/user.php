<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Faizan
 */
class User extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function login()
    {
        $data[VIEW_NAME] = 'login';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    function validate_user()
    {
        $this->load->model('User_Model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $userType = $this->User_Model->validate_user($username,$password);
        if($userType != ACCOUNT_NOT_ACTIVATED)
        {
            if($userType != INVALID_USERNAME_PASSWORD)
            {
                
                
                if($userType == END_USER_TYPE)
                {
                    $data = array(
                        'username' => $this->input->post('username'),
                        'is_logged_in' => true,
                        'admin' => false,
                    );
                    $this->session->set_userdata($data);
                    redirect('user/user_home', 'refresh');
                }
                else if($userType == ADMIN_USER_TYPE)
                {
                    $data = array(
                        'username' => $this->input->post('username'),
                        'is_logged_in' => true,
                        'admin' => false,
                    );
                    $this->session->set_userdata($data);
                    redirect('user/admin_home', 'refresh');
                }
            }
            else
            {
                
            }
        }
        else
        {
            
        }
    }
    
    public function admin_home()
    {
        $data[VIEW_NAME] = 'admin_home';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    public function user_home()
    {
        $data[VIEW_NAME] = 'user_home';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
}

?>
