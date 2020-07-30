<?php


class Employee extends CI_Model
{
   
    public function get_doctor(){
        //$this->db->where ('flag',1);
        $this->db->order_by('name','ASC');
        $query=$this->db->get('doctors');
        return $query->result();
    
    }
    public function save_doctor($data){
        $query=$this->db->insert('doctors',$data);
        if ($query){
        return "Successful";
        }
        else{
        return "Failed";
        }
    }
    public function update_doctor($data,$id){

        $this->db->where('id', $id);
        $query=$this->db->update('doctors', $data);
        if ($query){
        return "Successful";
        }
        else{
        return "Failed";
        }
    }
    public function get_availabledoctors($date){
       
        $query=$this->db->query("SELECT doctors.id,doctors.name,doctors.cadre FROM doctors, schedules where doctors.id=schedules.doctor_id and schedules.date like'$date' ");
        if ($query){
        return $query->result();
        }
        else{
        return array();
        }
    }
    public function monthlyDoctors(){
        $dt = new DateTime();
        $dt->sub(new DateInterval('P1D'));
            //yesterday
        $date=$dt->format('Y-m-d');
        //after a month
        $new_date=strtotime("20 days", strtotime($date));
        $dateto = date("Y-m-d", $new_date);
            $query=$this->db->query("SELECT doctors.id,doctors.name,doctors.cadre,schedules.date FROM doctors, schedules where doctors.id=schedules.doctor_id and schedules.date BETWEEN '$date' AND '$dateto' order by schedules.date ASC");
        if ($query){
        return $query->result();
        }
        else{
        return array();
        }
    }
    public function scheduleDoctor($insert){
       
        $query=$this->db->insert_batch('schedules',$insert);
        if ($query){
        return "Successful";
        }
        else{
        return "Failed";
        }
    }
   
    public function get_services(){
        $query=$this->db->get('services');
        if ($query){
        return $query->result();
        }
        else{
        return array();
        }
    }
    public function add_services($data){
        $query=$this->db->insert('services',$data);
        if ($query){
        return 'Successful';
        }
        else{
        return 'Failed';
        }
    }
    public function update_services(){
        $this->db->where('id',$data['id']);
        $query=$this->db->update('services');
        if ($query){
            return 'Successful';
            }
            else{
            return 'Failed';
        }
    }
    public function delete_services(){
        $this->db->where('id',$data['id']);
        $query=$this->db->Delete('services');
        if ($query){
            return 'Successful';
            }
            else{
            return 'Failed';
        }
    }

   }
