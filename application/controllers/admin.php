<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Faizan
 */
class Admin  extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function add_question()
    {
        $this->load->model('Quiz_Model');
        $data[VIEW_NAME] = 'add_question';
        $data['levels'] = $this->Quiz_Model->getAllLevels();
        $this->load->view(MAIN_TEMPLATE,$data);
    }
}

?>
