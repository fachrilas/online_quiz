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
                    $this->user_model->last_login($username,$data['user_type']);
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
                    $this->user_model->last_login($username,$data['user_type']);
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
                $this->user_model->last_login($username,$data['user_type']);
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
    //*********profile of children
    public function children_profile()
    {
         $userId = $this->session->userdata('user_id');
        $this->load->model('user_model');
        $data['child'] = $this->user_model->getChild($userId);
        
        $data[VIEW_NAME] = 'profile_children';
        $this->load->view(MAIN_TEMPLATE,$data);
        
    }
    
    
    //*************
    //*********edit profile of children
    public function edit_children_profile()
    {
        
        $userId = $this->session->userdata('user_id');
        $this->load->model('user_model');
        $data['child'] = $this->user_model->getChild($userId);
        $data[VIEW_NAME] = 'edit_children_profile';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    
    //*************
    //************update profile update
    
    public function profile_update()
    {

        $this->load->model('user_model');
        $userId = $this->session->userdata('user_id');
        $fullName = $this->input->post('name');
        $mood = $this->input->post('mood');
        
        $this->user_model->UpdateProfile($fullName,$userId,$mood);
        redirect("user/edit_children_profile", 'refresh');
    }
    
    //**********
    
    
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
         redirect("user/user_home",'refresh');
        
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
    
    //***********for all user|method
     public function view_user()
    {
        $userId = $this->session->userdata('user_id');
        $this->load->model('user_model');
        $data['user'] = $this->user_model->getUsers();
        $data[VIEW_NAME] = 'view_user';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    //****************
    //*********method for admin for user children view
    
    public function user_view_children()
    {   $userId = $this->input->get('user_id');
        $this->load->model('user_model');
        $data['children'] = $this->user_model->getChildren($userId);
        $data[VIEW_NAME] = 'view_children';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    //********

    //*********method for forgetpass
    
    public function forgetPass()
    {  
        $data[VIEW_NAME] = 'forget_pass';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    //********

    
    //*********method for pass get
    
    public function PassGet()
    {   
        $this->load->model('user_model');
        $email=  $this->input->post('email');
        if($email!='')
        {
        if ($this->user_model->usernameExists($email))
        {
            $to = $email;
            $random=rand(5, 15);
            $token=  md5($email.KEY.$random);    
            $this->user_model->UserUpdateToken($email,$token);
            $subject = 'Forget password';
            $message = "To reset your password, please <a href='http://www.meox.com/index.php/user/user_change_pass/$token'>Click here</a><br /><br />MEOX,<br /> The Team";
            $headers  = 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

            $headers .= "From: info@meox.com" . "\r\n" .
            "Reply-To:info@meox.com " . "\r\n" ;
            mail($to,$subject,$message,$headers);
            
            $data['message']=EMAIL_SENT;
            $data[VIEW_NAME] = 'email_info';
            $this->load->view(MAIN_TEMPLATE,$data);
        
         }
        else
        {
             $data['message']=EMAIL_NOT_EXISTS;
             $data[VIEW_NAME] = 'email_info';
             $this->load->view(MAIN_TEMPLATE,$data);
       
        }
        }
        
       
    }
    
    //********end of PassGet 
    //************method for user_change _pass
    
    public function user_change_pass($token)
    {   
        $this->load->model('user_model');
        $result=$this->user_model->validate_token($token);
        if(count($result)>0)
        {
         $data['token']=$token;   
         $data[VIEW_NAME] = 'password_reset';
         $this->load->view(MAIN_TEMPLATE,$data);   
        }
        else
        {    
             
             $data['message']=EMAIL_NOT_EXISTS;
             $data[VIEW_NAME] = 'email_info';
             $this->load->view(MAIN_TEMPLATE,$data);
        }
        
        
    }
    
    //***************
    
    //************method for pass update
    
    public function password_update()
    {   
        $this->load->model('user_model');
        $token=$this->input->post('token');
        $new_pass=$this->input->post('new_password');
        $confirm_pass=$this->input->post('confirm_password');
        
        if($new_pass==$confirm_pass)
        {
            $result=$this->user_model->validate_token($token);
            $email=$result[0]->email;
            $new_pass=  md5($new_pass);
            $this->user_model->update_pass($email,$new_pass);
            $data['message']=PASS_UPDATED;
            $data[VIEW_NAME] = 'email_info';
            $this->load->view(MAIN_TEMPLATE,$data);
        }
        else {
                echo "password not match!";
                }
        }
    
    //***************
     
    public function assign_quiz()
    {
        $userId = $this->session->userdata('user_id');
        $this->load->model('user_model');
        $this->load->model('quiz_model');
        $data['children'] = $this->user_model->getChildren($userId);
        $data['levels'] = $this->quiz_model->getAllLevels();
        $data[VIEW_NAME] = 'assign_quiz_view_children';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    
    public function do_assign_quiz()
    {
        $userId = $this->session->userdata('user_id');
        $this->load->model('user_model');
        $data['child_username']=  $this->input->post('child');
        $data['level']=  $this->input->post('level');
        $this->user_model->assign_quiz($data);
        redirect('user/user_home', 'refresh');
        
    }
    
    public function view_assign_quiz()
    {
        
        
    }
    
    
    
    }
    
    
    

?>
