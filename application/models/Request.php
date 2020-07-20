<?php
class Request extends CI_Model
{
    public function get_requests()
    {            $this->db->order_by('status', 'ASC');
                 $this->db->limit(20);
        $query = $this->db->get("request");
        if ($query){
            return $query->result();
        }
        else{
            return array();
        }
    }
    public function get_request($key)
    {
        if(!empty($key)) {
            $query = $this->db->query("SELECT * from request where name like '%%$key%' or email like '%%$key%' or request_date like'%%$key%' or requested_date like'%%$key' or id like'$key' order by status ASC LIMIT 20 ");
            return $query->result();
        } else {
            return array();
        }
    }
    public function get_clinic()
    {
            $query = $this->db->get('clinic');
            return $query->result();
    }
    public function get_userrequest($key)
    {
        if(!empty($key)) {
            $query = $this->db->query("SELECT * from request where mobile like '$key' ");
            return $query->result();
        } else {
            return array();
        }
    }
    public function getMessages($data=NULL){
                 if(!empty($data->username)){
                 $this->db->where("mobile","$data->username");  
                 }
                 $this->db->where("message_id",NULL);
        $query = $this->db->get("messages");
        $mstring=array();
        if ($query){
            $messageheads=$query->result();
            foreach($messageheads as $messagehead){
            //get replies.
            $head = $messagehead->id;
            $reply['message']=$messagehead;
            $mreplies=$this->db->query("SELECT * from messages where messages.message_id=$head");
            $reply['reply'] = $mreplies->result();
            array_push($mstring,$reply);
            }
        return $mstring;
        }
        else{
        return array();
        }
    }
    public function replyMessages($data){
        $datas=array(
            'request_id' => $data['request_id'],
            'body' => $data['message_body'],
            'message_id' => $data['message_id'],
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'role' => $data['usertype']
        );
            $query=$this->db->insert("messages",$datas);
            $rows=$this->db->affected_rows();
    if ($rows>0){
     return array('dbstatus'=>'Success');
    }
    else{
    return array('dbstatus'=>'Failed');
    }
    }
    public function saveRequest($data,$final)
        { 
       
        $datas=array(
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'clinic' => $data['clinic'],
            'doctor' => $data['doctor'],
            'address'=>$data['address'], 
            'request_date' => date('Y-m-d'),
            'requested_date' =>$data['requested_date'],
            'services' => $final,
            'remarks' => $data['remarks']
            );
           $query= $this->db->insert('request',$datas);
           if($query){
            $insert_id = $this->db->insert_id();
            $rows=$this->db->affected_rows();
            $this->followup($data,$insert_id,$final);
            $this->make_appointment($data,$insert_id,$final);
            // add users
            if ($this->new_user($data)=='Successful'){
                $this->db->where('username',$data['mobile']);
                $query=$this->db->get('users');
             return $query->result();
             }
            else{
                $this->db->where('username',$data['mobile']);
                $query=$this->db->get('users');
            return $query->result();
            }
           }
           else{
           return 'Failed';
           }
        
        
        }
    public function make_appointment($data,$insert_id,$final){
        $data=array(
            'start_date'=>$data['requested_date'],
            'end_date' => $data['requested_date'],
            'Time' => NULL,
            'allDay' => 'true',
            'request_id'=>$insert_id,
            'doctor' =>$data['doctor']

        );
        $this->db->insert('appointments',$data);

    }
    public function add_doctor($data){
        $datas =array(
            "work_id"=>$data['work_id'],
            "name"=>$data['name'],
            "email"=>$data['email'],
            "mobile"=>$mobile=$data['mobile'],
            "cadre"=>$data['cadre']
        );
        $users=$this->db->query("SELECT mobile from doctors where mobile='$mobile'");
        $rows=$users->num_rows();
        if($rows>0){
        return array('dbstatus'=>'Duplicate Mobile Number');
        }
        else{
        $query=$this->db->insert('doctors',$datas);
        if ($query){
        //create user account
        if ($this->new_user($data)){
           $this->db->where('username',$data['mobile']);
           $query=$this->db->get('users');
        }
        return $query->result();
        }
        else{
        return array();
        }
        }
   }
    //comfirm
    public function followup($data,$request_id,$final){
        
        $data=array(
            'request_id' => $request_id,
            'name' => $data['name'],
            'mobile'=>$data['mobile'],
            'entry_id' => $data['mobile'].$final.date('Y-m-d'),
            'body' => 'I need your assistance on '.$final,
            'role' => 'Patient'
        );
       $notify = $this->db->insert('messages',$data);
       if($notify){
           return 'Successful';
       }
    }
    //create user acccount comfirm
    public function new_user($data){
        $password=md5("login");
        $data=array(
            'username' => $number=$data['mobile'],
            'name' => $data['name'],
            'password' => $password,
            'usertype' => 'Patient'
        );
        //check if user already exists{
      $users=$this->db->query("SELECT username from users where username='$number'");
      $rows=$users->num_rows();
     if($rows>0){
        return 'Duplicate Mobile Number';
     }
     else{
       $notify = $this->db->insert('users',$data);
       if($notify){
           return 'Successful';
       }
    }
  }
    public function changePwd($data){
		$oldpwd=$data->oldpwd;
		$newpwd=md5($data['newpwd']);
		$realoldpwd=md5($oldpwd);
		$username=$data->username;
        $query=$this->db->query("SELECT password from users where username='$username'");
        $results=$query->result();
        $rows=$query->num_rows();
        if($rows>0){
		foreach($results as $result){
			$dboldpwd=$result->password;
		}
		if($realoldpwd==$dboldpwd){
		$sql=$this->db->query("UPDATE `users` SET `password` = '$newpwd' WHERE `users`.`username` = '$username'");
	     if($sql){
		 return array('dbstatus'=>'Success');	 
		 }
		 else{
		return array('dbstatus'=>'Failed');
		 }
		}
		else{
		return array('dbstatus'=>'Failed');
		}
      }
      else{
        return array('dbstatus'=>'Failed');
      }
  }
   public function cancelRequest($id){
  //cancelled status =3 
    $sql=$this->db->query("UPDATE request SET status = '3' WHERE request.id = '$id'");
    $date=date('Y-m-d');
    $this->db->query("DELETE from messages where  request_id ='$id' and followupdate like'$date%'");
    if($sql){
    return array('dbstatus'=>'Cancelled');	 
    }
    else{
    return array('dbstatus'=>'Failed');
    }

   }
}