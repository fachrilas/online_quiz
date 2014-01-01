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
        if($this->input->get('error'))
        {
            $data['error'] = $this->input->get('error');
        }
        $data[VIEW_NAME] = 'login';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    function validate_user()
    {
        $this->load->model('user_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $type = $this->input->post('usertype');
        if($type == END_USER_TYPE || $type == TUTOR_TYPE)
        {
            $user = $this->user_model->validate_user($username,$password);
            if($user != INVALID_USERNAME_PASSWORD)
            {
                if($user->user_type == END_USER_TYPE)
                {
                    $data = array(
                        'username' => $this->input->post('username'),
                        'is_logged_in' => true,
                        'user_type' => END_USER_TYPE,
                        'user_id' => $user->id
                    );
                    $this->session->set_userdata($data);
                    redirect('user/user_home', 'refresh');
                }
                else if($user->user_type == ADMIN_USER_TYPE)
                {
                    $data = array(
                        'username' => $this->input->post('username'),
                        'is_logged_in' => true,
                        'user_type' => ADMIN_USER_TYPE,
                        'user_id' => $user->id
                    );
                    $this->session->set_userdata($data);
                    redirect('user/admin_home', 'refresh');
                }
            }
            else
            {
                redirect('user/login?error=invalidpassword', 'refresh');
            }
        }
        else if($type == CHILDREN_TYPE)
        {
            
            $user = $this->user_model->verifyChildren($username,$password);
            if($user)
            {
                $data = array(
                    'username' => $this->input->post('username'),
                    'is_logged_in' => true,
                    'user_type' => CHILDREN_TYPE,
                    'user_id' => $user->id
                );
                $this->session->set_userdata($data);
                redirect('user/children_home', 'refresh');
            }
            else
            {
                redirect('user/login?error=invalidpassword', 'refresh');
            }
            
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
    
    public function children_home()
    {
        $data[VIEW_NAME] = 'children_home';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/', 'refresh');
    }
    
    public function signup()
    {
        $data[VIEW_NAME] = 'user_signup';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    public function do_register()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $contact = $this->input->post('contact');
        $password = $this->input->post('password');
        $cpassword = $this->input->post('cpassword');
        $purpose = $this->input->post('purpose');
        $strength = $this->input->post('strength');
        $weakness = $this->input->post('weakness');
        $this->load->model('user_model');
        if($password != $cpassword)
        {
            echo ERROR_PASSWORD_NOT_MATCH;
            return;
        }
        else if ($this->user_model->usernameExists($email))
        {
            echo ERROR_USERNAME_ALREADY_EXIST;
            return;
        }
        else
        {
            $data = array();
            $data['username'] = $email;
            $data['email'] = $email;
            $data['name'] = $name;
            $data['contact'] = $contact;
            $data['purpose'] = $purpose;
            $data['strength'] = $strength;
            $data['weakness'] = $weakness;
            $data['is_activated'] = 1;
            $data['user_type'] = END_USER_TYPE;
            $data['password'] = md5($password);
            $this->user_model->registerUser($data);
            echo SUCCESS_CODE;
        }
    }
    
    public function add_child()
    {
        $data[VIEW_NAME] = 'add_child';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    public function do_add_child()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $fullName = $this->input->post('full_name');
        $dd = $this->input->post('dd');
        $mm = $this->input->post('mm');
        $yyyy = $this->input->post('yyyy');
        $likes = $this->input->post('likes');
        $dislikes = $this->input->post('dislikes');
        $this->load->model('Quiz_Model');
        $this->load->model('user_model');
        if(isset($_FILES['sample_file']) && $_FILES['sample_file']['size'] > 0)
        {
            $image1 = 'sample_file';
            $uploadedData = $this->Quiz_Model->do_upload($image1);
            $filepathRelative = 'uploads/'.$uploadedData['file_name'];
            $filepathAbsolute = $uploadedData['full_path'];
        }
        else
        {
            $filepathRelative = "";
            $filepathAbsolute = "";
        }
        $this->user_model->addChild($username,$password,$fullName,$dd,$mm,$yyyy,$likes,$dislikes,$filepathRelative,$filepathAbsolute);
    }
    
    public function view_children()
    {
        $userId = $this->session->userdata('user_id');
        $this->load->model('user_model');
        $data['children'] = $this->user_model->getChildren($userId);
        $data[VIEW_NAME] = 'view_children';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    public function edit_child()
    {
        $userId = $this->session->userdata('user_id');
        $childId = $this->input->get('cid');
        $this->load->model('user_model');
        $data['child'] = $this->user_model->getChild($childId);
        $data[VIEW_NAME] = 'edit_child';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    public function do_edit_child()
    {
        $userId = $this->session->userdata('user_id');
        $childId = $this->input->get('cid');
        $this->load->model('user_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $fullName = $this->input->post('full_name');
        $dd = $this->input->post('dd');
        $mm = $this->input->post('mm');
        $yyyy = $this->input->post('yyyy');
        $likes = $this->input->post('likes');
        $dislikes = $this->input->post('dislikes');
        if(isset($_FILES['sample_file']) && $_FILES['sample_file']['size'] > 0)
        {
            $this->load->model('Quiz_Model');
            $image1 = 'sample_file';
            $uploadedData = $this->Quiz_Model->do_upload($image1);
            $filepathRelative = 'uploads/'.$uploadedData['file_name'];
            $filepathAbsolute = $uploadedData['full_path'];
        }
        else
        {
            $filepathRelative = "";
            $filepathAbsolute = "";
        }
        $this->user_model->updateChild($childId,$username,$password,$fullName,$dd,$mm,$yyyy,$likes,$dislikes,$filepathRelative,$filepathAbsolute);
        redirect("user/view_children", 'refresh');
    }
    
    public function delete_child()
    {
        $userId = $this->session->userdata('user_id');
        $this->load->model('user_model');
        $data['children'] = $this->user_model->getChildren($userId);
        $data[VIEW_NAME] = 'view_children';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
}

?>
