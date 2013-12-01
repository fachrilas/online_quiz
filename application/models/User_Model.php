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
class User_Model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function validate_user($username,$password)
    {
        $this->db->where('email',$this->input->post('username'));
        $this->db->where('password',md5($this->input->post('password')));
        $result = $this->db->get('user')->result();
        if(count($result) >= 1)
        {
            $result = $result[0];
            if($result->is_activated)
            {
                return $result->user_type;   
            }
            else
            {
                return ACCOUNT_NOT_ACTIVATED;
            } 
        }
        else
        {
            return INVALID_USERNAME_PASSWORD;
        }
    }
}

?>
