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
         $this->load->helper('share');
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
        echo $type;
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
                redirect('user/children_profile', 'refresh');
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
        $data[VIEW_NAME] = 'signup';
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
            $message = "To reset your password, please <a href='http://www.ministryofexcellence.com.sg/index.php/user/user_change_pass/$token'>Click here</a><br /><br />MEOX,<br /> The Team";
            $headers  = 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

            $headers .= "From: donotreply@ministryofexcellence.com.sg" . "\r\n" . "\r\n" ;
            mail($to,$subject,$message,$headers);
            
            $data['message']= EMAIL_SENT;
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
        $quiz_details=array();
        for ($i=0;$i<count($data['levels']);$i++)
        {
            $quiz_details[$i] =  $this->quiz_model->getQuizDetails($data['levels'][$i]->id);
        }
        
        $data[VIEW_NAME] = 'assign_quiz_view_children';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    
    public function do_assign_quiz()
    {
        $userId = $this->session->userdata('user_id');
        $this->load->model('user_model');
        $data['child_username']=  $this->input->post('child');
        $data['level']=  $this->input->post('level');
        $data['level_name']=  $this->input->post('level_name');
        $data['operation']= TAKEN_NOT;
        $this->user_model->assign_quiz($data);
        redirect('user/user_home', 'refresh');
        
    }
    
    public function view_assign_quiz()
    {
        $userId = $this->session->userdata('user_id');
        $username=  $this->session->userdata('username');
        $this->load->model('user_model');
        $opt=TAKEN_YES;
        $data['assign_quiz']=$this->user_model->GetAssignQuiz($username,$opt);
        $result=  $this->user_model->getChildren($userId);
        $data['child']=$result[0];
        $data[VIEW_NAME]='assign_level';
        $this->load->view(MAIN_TEMPLATE,$data);
        
        
    }
    
    public function start_quiz($count)
    {   
        
        $userId = $this->session->userdata('username');
        $this->load->model('user_model');
        $opt=TAKEN_NOT;
        $data['assign_quiz']=$this->user_model->GetAssignQuiz($userId,$opt);
        $level=$data['assign_quiz'][0]->level;
        $this->session->set_userdata('quiz_id',$data['assign_quiz'][0]->id);
        if($data['assign_quiz'][0]->operation==TAKEN_YES)
        {
            echo "quiz already taken";
            die();
        }
        $this->load->model('quiz_model');
        $data['quiz_details'] = $this->quiz_model->getQuizDetails($level);
       
        if((count($data['quiz_details'])-$count>0) and $count>=0)
        {
        $questionID =$data['quiz_details'][$count]['id'];
        $data['count']=count($data['quiz_details'])-$count;
        $data['next']=$count+1;
        
            if($count>0)
            {
        $qid =$data['quiz_details'][$count-1]['id'];
         $score=$data['quiz_details'][$count-1]['score'];
        $answer=$this->input->post('answer');
        $type=  $this->input->post('type');
        $remarks=$this->quiz_model->VerifyQuestion($qid,$type,$answer);
        
        if($remarks==TRUE)
            {
                $obtained=$score;
            }
        else
            {
                $obtained=0;
            }
        $this->save_quiz($qid, $userId,$count,$answer,$remarks,$obtained,$score);
            }
        $data['questionDetails'] = $this->quiz_model->getQuestionDetails($questionID);
        $data[VIEW_NAME] = 'start_quiz';
        $this->load->view(MAIN_TEMPLATE,$data);
        }
        else{
            if($count<0)
            {echo "Requested Question not found-404 Error";}
            else
            {
                
                $this->submit_quiz($count,$level);
            }
        }
    }
    
    
        public function save_quiz($qid,$userid,$count,$answer,$remarks,$obtained,$score)
        {
            $qids=  $this->session->all_userdata();
            $qids['name'][$count] = array(
                            'q_id' => $qid,
                            'user_id' => $userid,
                            'stage' =>$count,
                            'answer'=>$answer,
                            'remarks'=>$remarks,
                            'score'=>$score,
                            'obtained'=>$obtained
                        );

            $this->session->set_userdata('name',$qids['name']);
            $qids=  $this->session->all_userdata();

        }
        
        public function submit_quiz($count,$level)
        {
            $qids=  $this->session->all_userdata();
            $score=0;
            $obtained=0;
            $band=BAND4;
            for ($i=1;$i<=count($qids['name']);$i++)
            {
                $score=$score+$qids['name'][$i]['score'];
                $obtained=$obtained+$qids['name'][$i]['obtained'];
                
            }
            $userId = $this->session->userdata('user_id');
            $quiz_id=  $this->session->userdata('quiz_id');
            $obtained_p=($obtained/$score)*100;
            if($obtained_p>84)
            {
                $band=BAND1;
            }
            elseif ($obtained_p<=84&&$obtained_p>=70) 
            {
                $band=BAND2;
            }
            elseif ($obtained_p<=69&&$obtained_p>=50)
            {
                $band=BAND3;
            }
            else
            {
                $band=BAND4;
            }
            $timeElapsed = $_COOKIE['mytimeout'];
            $count=$timeElapsed;
            $hours = ($count/3600);
            $minutes = ($count%3600/60);
            $seconds = $count%60;
            $t=  floor($hours)."h-".  floor($minutes)."m-".  floor($seconds)."s";
            $data=json_encode($qids['name']);
            $this->load->model('user_model');
            setcookie('mytimeout', null, -1, '/');
            setcookie('timepassed', null, -1, '/');
            $this->user_model->InsertQuizRecord($userId, $data,$level,$t);
            $this->user_model->UpdateQuizStatus($quiz_id,$score,$obtained);
            $datas['userid']=$userId;
            $datas['band']=$band;
            $datas['total']=$score;
            $datas['obtained']=$obtained;
            $datas[VIEW_NAME] = 'end_quiz';
            $this->load->view(MAIN_TEMPLATE,$datas);
        }
        
        public function review_results()
        {   
            $userId = $this->session->userdata('user_id');
            $data['username'] = $this->session->userdata('username');
            $this->load->model('user_model');
            $data['children'] = $this->user_model->getChildren($userId);
            $data[VIEW_NAME] = 'review_results';
            $this->load->view(MAIN_TEMPLATE,$data);
        }
        public function review_results_proceed($userid,$c)
        {
        
            $this->load->model('user_model');
            $r=$this->user_model->getresults($userid);
            $rr=($r[0]->data);
            $rrr=json_decode($rr,true);
            $count=count($rrr);
            if($c<=$count)
            {
                $data['username']= $rrr[$c]['user_id'];
                $data['q_id']=$rrr[$c]['q_id'];
                $data['stage']=$rrr[$c]['stage'];
                $data['remarks']=$rrr[$c]['remarks'];
                $data['answer']=$rrr[$c]['answer'];
                $data['count']=$count;
                $data['next']=$c+1;
                $this->load->model('quiz_model');
                $data['questionDetails'] = $this->quiz_model->getQuestionDetails($data['q_id']);
                $data['user_id'] = $userid;
                $data[VIEW_NAME] = 'review_results_proceed';
                $this->load->view(MAIN_TEMPLATE,$data);
            }
            else
            {
                $user_type=  $this->session->userdata('user_type');
                if($user_type==END_USER_TYPE)
                {
                redirect('user/user_home', 'refresh');
                }
                elseif($user_type==CHILDREN_TYPE)
                {
                    redirect('user/children_profile', 'refresh');
                }
                else
                {

                }
            }
        }
        
        public function view_report($userId)
        {
             $this->load->model('user_model');
             $data['child']=  $this->user_model->getChild($userId);
             $opt=TAKEN_YES;
             $data['assign_quiz'] = $this->user_model->GetAssignQuiz($data['child']->username,$opt);
             if($data['assign_quiz'])
             {
             $data['id'] = $data['assign_quiz'][0]->child_username;
             $data['comment'] =  $this->user_model->GetComment($data['id']);
             }
                else {
                    $data['comment']=''; }
             $data[VIEW_NAME] = 'view_report';
             $this->load->view(MAIN_TEMPLATE,$data);
        }
        public function comment()
        {
            $userId = $this->session->userdata('user_id');
            $comment = $this->input->post('comment');
            $report_id=  $this->input->post('r_id');
            $this->load->model('user_model');
            $this->user_model->InsertComment($userId,$comment,$report_id);
            redirect('user/view_report/'.$userId, 'refresh');

        }
        
         public function contact()
         {   
            $this->load->model('user_model');
            $email=  $this->input->post('email');
            $message = $this->input->post('message');
            $phone =  $this->input->post('phone');
            if($email!='')
            {
                $to = 'info@ministryofexcellence.com.sg';  
                $subject = 'Contact via form';
                $message = $message;
                $message.='phone number : '.$phone;
                $headers  = 'MIME-Version: 1.0' . "\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
                $headers .= "From: " .$email. "\r\n" . "\r\n" ;
                mail($to,$subject,$message,$headers);
                $data['message']= MESSAGE_SENT;
                $data[VIEW_NAME] = 'email_info';
                $this->load->view(MAIN_TEMPLATE,$data);

            }
            else
            {
                 echo "form not filled properly";

            }



    }
    
        
    }
    
    
    

?>
