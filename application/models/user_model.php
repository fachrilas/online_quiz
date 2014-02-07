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
        $this->db->where('username',$this->input->post('username'));
        $this->db->where('password',md5($this->input->post('password')));
        $result = $this->db->get(TBL_USERS)->result();
        if(count($result) >= 1)
        {
            return $result[0];
        }
        else
        {
            return INVALID_USERNAME_PASSWORD;
        }
    }
    
    public function verifyChildren($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password', md5($password));
        $result = $this->db->get(TBL_CHILDREN)->result();
        if(count($result) >= 1)
        {
            return $result[0];
        }
        else
        {
            return false;
        }
    }
    
    public function registerUser($data)
    {
        $this->db->insert(TBL_USERS,$data);
    }
    
    public function usernameExists($username)
    {
        $result = $this->db->where('username',$username)->get(TBL_USERS)->result();
        if(count($result) > 0)
        {
            return true;
        }
        return false;
    }
    
    public function addChild($username,$password,$fullName,$dd,$mm,$yyyy,$level)
    {
        $data = array();
        $data['username'] = $username;
        $data['password'] = md5($password);
        $data['name'] = $fullName;
        $data['dd'] = $dd;
        $data['mm'] = $mm;
        $data['yy'] = $yyyy;
        $data['level'] = $level;
        $data['parent_id'] = $this->session->userdata('user_id');
        $this->db->insert(TBL_CHILDREN,$data);
    }
    
    public function getChildren($userId)
    {
        $this->db->where('parent_id',$userId);
        return $this->db->get(TBL_CHILDREN)->result();
    }
    
    public function getChild($childrenId)
    {
        $this->db->where('id',$childrenId);
        $result = $this->db->get(TBL_CHILDREN)->result();
        if($result)
        {
            return $result[0];
        }
        else
        {
            return false;
        }
    }
    //*********add method for last_login
    public function last_login($children,$type)
    {
        $this->load->helper('date');
        $data['last_login']= date('Y-m-d H:i:s');;
        $this->db->where('username',$children);
        
        if($type==CHILDREN_TYPE)
             $this->db->update(TBL_CHILDREN,$data);
             else
                 $this->db->update(TBL_USERS,$data);
            
        
    }
    
    
    //**********
    public function updateChild($childId,$username,$password,$fullName,$dd,$mm,$yyyy,$likes,$dislikes,$filepathRelative,$filepathAbsolute)
    {
        $child = $this->getChild($childId);
        if($password == "")
        {
            $data['password'] = $child->password;
        }
        else
        {
            $data['password'] = md5($password);
        }
        
        if($filepathRelative == "" || $filepathAbsolute == "")
        {
            $data['profile_pic_absolute'] = $child->profile_pic_absolute; 
            $data['profile_pic_relative'] = $child->profile_pic_relative; 
        }
        else
        {
            $data['profile_pic_absolute'] = $filepathAbsolute; 
            $data['profile_pic_relative'] = $filepathRelative;
            unlink($child->profile_pic_absolute);
        }
        
        $data['username'] = $username;
        $data['name'] = $fullName;
        $data['dd'] = $dd;
        $data['mm'] = $mm;
        $data['yy'] = $yyyy;
        $data['likes'] = $likes;
        $data['dislikes'] = $dislikes;
        
        $this->db->where('id',$childId);
        $this->db->update(TBL_CHILDREN,$data);
        
    }
    //**************method for all uers 
    public function getUsers()
    {
        $returnArray = array();
        $users = $this->db->get(TBL_USERS)->result();
        foreach($users as $user)
        {
            $children = $this->getChildren($user->id);
            $user->children_count = count($children);
        }
        return $users;
    }
    
    
    //************end of user view mothod
    
    //**************method for foget password 
    public function getuserRecord($email)
    {
       $this->db->where('email',$email);
       $result = $this->db->get(TBL_USERS)->result();
       return $result;
    }
    public function getuserRecordbyid($id)
    {
       $this->db->where('id',$id);
       $result = $this->db->get(TBL_USERS)->result();
       return $result[0];
    }
    
    
    //************end of user view mothod
    ////**************method for insert assign quiz 
    public function assign_quiz($data)
    {
        $this->db->insert(TBL_ASSIGNQUIZ,$data);
    }
    
    
    //************end of user view mothod
     //**************method for update token for user password
    public function UserUpdateToken($email,$token)
    {
       $data['token']=$token; 
       $this->db->where('email',$email);
       $this->db->update(TBL_USERS,$data);
       
    }
    
    
    //************end of user view mothod
    
     //************method for user_validate_token
    
    public function validate_token($token)
    {   
        $result = $this->db->where('token',$token)->get(TBL_USERS)->result();
        return $result;
    }
    
    //***************
    
     //************method for user_validate_token
    
    public function update_pass($email,$pass)
    {   
       $data['password']=$pass; 
       $this->db->where('email',$email);
       $this->db->update(TBL_USERS,$data);
    }
    
    //***************
    
    //************method for UpdateProfile
    public function UpdateProfile($fullName,$userId,$mood)
    {
        $data['mood']=$mood;
        $data['name']=$fullName;
        $this->db->where('id',$userId);
        $this->db->update(TBL_CHILDREN,$data);
        
        
    }
    //***********
    
     //************method for UpdateProfile
    public function GetAssignQuiz($userId,$opt)
    {
        if($opt==TAKEN_NOT)
        {
        $this->db->where('operation','not-taken');
        }
        
        $result=$this->db->where('child_username',$userId)->get(TBL_ASSIGNQUIZ)->result();
        return $result;
        
        
    }
    //***********
    
     //************method for insert quiz record
    public function InsertQuizRecord($userId,$data,$level,$t)
    {
        $record['child_id']=$userId;
        $record['data']=$data;
        $record['level']=$level;
        $record['time_of_completion']=$t;
         $this->db->insert(TBL_QUESTIONRECORD,$record);
    }
    //***********
    public function getresults($userId)
    {
        $this->db->where('child_id',$userId);
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $r=$this->db->get(TBL_QUESTIONRECORD)->result();
        return $r;
    }
    public function UpdateQuizStatus($quiz_id,$score,$obtained)
    {
        $data['operation']=TAKEN_YES;
        $data['total']=$score;
        $data['obtained']=$obtained;
        $p=$obtained/$score;
        $p=($p)*100;
        $data['percentage']=$p;
        $this->db->where('id',$quiz_id);
        $this->db->update(TBL_ASSIGNQUIZ,$data);
        
        
    }
    public function InsertComment($userId,$comment,$report_id)
    {
        $data['comment']=$comment;
        $data['comment_by']=$userId;
        $data['report_id']=$report_id;
        $this->db->insert(TBL_COMMENT,$data);
    }
    
    public function GetComment($username)
    {
        $this->db->where('report_id',$username);
        $this->db->order_by('id','desc');
        $result=$this->db->get(TBL_COMMENT)->result();
        return $result[0];
    }
    public function paypal($data)
    {
        $datas['data']=$data;
        $this->db->insert(TBL_PAYPAL,$datas);
        
    }
    public function transaction($data)
    {
        
        $this->db->insert(TBL_TRANSACTION,$data);
        
    }
    public function add_membership($data)
    {
        $this->db->insert(TBL_MEMBER,$data);
    }
    public function checkMemebrshipStatus()
    {
        $d= date('Y-m-d');
        $this->db->where('expiration_date <=',$d);
        $result=$this->db->get(TBL_MEMBER)->result();
        foreach ($result as $expire)
        {
            $this->db->where('id',$expire->id);
            $data['is_active']='0';
            $this->db->update(TBL_MEMBER,$data);
        }

    }
    public function check_member_active($id)
    {
        $this->db->order_by("id", "desc"); 
        $this->db->where('user_id',$id);
        $this->db->where('is_active','1');
        $this->db->limit(1);
        $r=$this->db->get(TBL_MEMBER)->result();
        if(count($r)>0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
    public function member_detail($id)
    {
        $this->db->order_by("id", "desc"); 
        $this->db->where('user_id',$id);
        $this->db->limit(1);
        $r=$this->db->get(TBL_TRANSACTION)->result();
        return $r[0];
    }
    
    
}

?>
