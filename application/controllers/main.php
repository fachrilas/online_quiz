<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller 
{    

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('share');
    }
	
    public function index()
    {
        $data['main_content'] = 'main';
        
        $this->load->view('template/template',$data);
    }
    
    public function about_us()
    {
        $data['main_content'] = 'main';
        $this->load->view('template/template',$data);
    }
    
    public function packages()
    {
        $data['main_content'] = 'packages';
        $this->load->view('template/template',$data);
    }
    
    public function FAQ()
    {
        $data['main_content'] = 'FAQ';
       
        $this->load->view('template/template',$data);
    }
    
    public function contact()
    {
        $data['main_content'] = 'contact';
       
        $this->load->view('template/template',$data);
    }
    
    public function know_all()
    {
        $data['main_content'] = 'know_it_all';
        $this->load->view('template/template',$data);
    }
    
    public function my_account()
    {
        if($this->session->userdata('user_type') == ADMIN_USER_TYPE)
        {
            redirect('user/admin_home','refresh');
        }
        else if($this->session->userdata('user_type') == END_USER_TYPE)
        {
            redirect('user/user_home', 'refresh');
        }
        else if ($this->session->userdata('user_type') == CHILDREN_TYPE)
        {
            redirect('user/children_profile', 'refresh');
        }
        //var_dump($this->session->userdata);
    }
}

?>
