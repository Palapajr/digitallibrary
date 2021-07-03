<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_login', 'auth');
    }

	public function index()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function process(){

		$post = $this->input->post(null, FALSE);
		if (isset($post['login'])) {
			$query = $this->auth->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$array = [
					'id_user' => $row->id_user,
					'level' => $row->level
				];
				$this->session->set_userdata($array);
				echo 	"<script>
							alert('Welcome');
							window.location='".site_url('dashboard')."';
						</script>";
			}else{
				echo 	"<script>
							alert('Galat');
							window.location='".site_url('auth')."';
						</script>";
			}	
		}
	}

	public function registration(){ 
        $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){ 
            $this->form_validation->set_rules('first_name', 'First Name', 'required'); 
            $this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 
 
            $userData = array( 
                'first_name' => strip_tags($this->input->post('first_name')), 
                'last_name' => strip_tags($this->input->post('last_name')), 
                'email' => strip_tags($this->input->post('email')), 
                'password' => sha1($this->input->post('password')), 
                'gender' => $this->input->post('gender'), 
                'phone' => strip_tags($this->input->post('phone')) 
            ); 
 
            if($this->form_validation->run() == true){ 
                $insert = $this->auth->insert($userData); 
                if($insert){ 
                    $this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.'); 
                    redirect('user/login'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
         
        // Posted data 
        $data['user'] = $userData; 
	}

	public function logout()
	{
		$array = ['id_user', 'level'];
		$this->session->unset_userdata($array);
		redirect('auth');
		
	}
}
