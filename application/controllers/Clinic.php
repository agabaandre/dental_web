<?php defined("BASEPATH") or exit("No direct script access allowed");

require APPPATH . 'libraries/REST_Controller.php';

class Clinic extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Auth", "authHandler");
        $this->load->model("Request", "requestHandler");
        $this->load->model("Employee", "employeeHandler");
        $this->key = urldecode($this->uri->segment(3));
    }

    public function index_get()
    {
         $this->load->view('login'); 
    }
   

    public function login_post()
    {
        $data = $this->input->post();
        $userInfo = $this->authHandler->authenticate($data);
    
        if($userInfo) {
        $session->set($userInfo);
        $this->load->view('main','dashbaord');
        } else {
           $data['message']='Authentication Failed';
            $this->load->view('login',$data['mesasge']);
        }
        
    }
  
    public function requests()
    {
        $data['title']="Request";
        $data['view']="requests";
        $data['heading']="View Requests";
        $data['requests'] = $this->requestHandler->get_requests();
        $this->load->view('main', $data);
    }

    public function cancelRequest()
    {
        $requestId = $this->input->post('request_id');
        $data['title']="Request";
        $data['view']="requests";
        $data['heading']="View Requests";
        $requestData=$this->requestHandler->cancelRequest($requestId);
        if ($requestData){
        $data['message']='Cancelled';
        $data['requests'] = $this->requestHandler->get_requests();
        $this->load->view('main', $data);
        }
        else {
        $data['message']="Failed!";
        $data['requests'] = $this->requestHandler->get_requests();
        $this->load->view('main', $data);

        }
    }
    
    public function searchRequest()
    {
        $searchterm = $this->input->post('searchterm');
        $data['title']="Request";
        $data['view']="requests";
        $data['heading']="View Requests";
        $data['requests'] = $this->requestHandler->get_request($searchterm);
        $this->load->view('main', $data);
    }
    public function doctors(){
        $data['title'] = "Doctors";
        $data['view'] = "doctors";
        $data['heading'] = "View Doctors";
        $data['doctors'] = $this->employeeHandler->get_doctor();
        $this->load->view('main', $data);
    }

    public function services(){
        $data['title'] = "Services";
        $data['view'] = "services";
        $data['heading'] = "Services";
        $data['services'] = $this->employeeHandler->get_services();
        $this->load->view('main', $data);
    }
    public function availableDoctors(){
        
        $doctorData = $this->employeeHandler->get_availabledoctors($date);
    return $doctorData;
    }
    public function newRequest()
    {
        $data['title'] = "Send Request";
        $data['view'] = "requests";
        $data['heading'] = "Request Dental Services";
        $this->load->view('main',$data);
    }
    public function saverequest()
    {
        $data['title'] = "Send Request";
        $data['view'] = "requests";
        $data['heading'] = "Request Dental Services";
        $postData = $this->input->post();
        $today=date('Y-m-d');
        if($this->input->post('request_date') < $today){
        $data['message']='Past date';
        $this->load->view('main',$data);
        }
        elseif (empty($this->input->post('name'))) {
        $data['message']='Provide name';
        $this->load->view('main',$data);
         }
        elseif (empty($this->input->post('mobile'))) {
        $data['message']='Provide Contact';
        $this->load->view('main',$data);
        }
        else {
        $result = $this->requestHandler->saveRequest($postData);
        if($result) {
         $data['message']='Sent';
         $this->load->view('main',$data);
        } 
        else {
        $data['message']='Failed';
        $this->load->view('main',$data);
        
        }
        }
    }
    public function newdoctor()
    {
        $postData= $this->input->post();
       // print_r($postData);
        $data['title'] = "Add Doctor";
        $data['view'] = "add_doctor";
        $data['heading'] = "New Doctor";
    
        if(empty($this->input->post('mobile'))){
            $data['message']='Provide Contact';
            $this->load->view('main',$data);
        }
        elseif (empty($postData->name)) {
            $data['message']='Provide Name';
            $this->load->view('main',$data);
        }
    
        else {
        $result = $this->requestHandler->add_doctor($postData);
        if($result) {
            $data['message']='Saved';
            $this->load->view('main',$data);
          } 
        else {
            $data['message']='Failed';
            $this->load->view('main',$data);
        }
      }
        
    }
    public function messages(){
        $data['title'] = "Messages";
        $data['view'] = "requests";
        $data['heading'] = "Chat";
        $username = $_SESSION['username'];
        $data['messages'] = $this->requestHandler->getMessages($username);
        if ($data){
        $this->load->view('main',$data);
        }
        else{
        $data['message'] = "No Messages";
        $this->load->view('main',$data);
       }
       }
    public function replymessages(){
        $postData= $this->security->xss_clean($this->input->input->post());
        
        $replyStatus = $this->requestHandler->replyMessages($postData);
        $data['messages'] = $this->requestHandler->getMessages($postData);
        return $this->messages();
       
    }
    
    public function changePassword_post(){
        $postData= $this->security->xss_clean($this->input->post());
        $changepwd = $this->requestHandler->changepwd($posData);
        if ($changepwd){
        $data['message']="Changed";
        $this->load->view("main",$data);
        }
        else{
        $data['message']="Changed";
        $this->load->view("main",$data);
        }
        }


}
    


