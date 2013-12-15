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
    
    public function addChild($username,$password,$fullName,$dd,$mm,$yyyy,$likes,$dislikes,$filepathRelative,$filepathAbsolute)
    {
        $data = array();
        $data['username'] = $username;
        $data['password'] = md5($password);
        $data['name'] = $fullName;
        $data['dd'] = $dd;
        $data['mm'] = $mm;
        $data['yy'] = $yyyy;
        $data['likes'] = $likes;
        $data['dislikes'] = $dislikes;
        $data['profile_pic_relative'] = $filepathRelative;
        $data['profile_pic_absolute'] = $filepathAbsolute;
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
}

?>
