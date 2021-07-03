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

	public function indexregistrasi(Type $var = null)
	{
		$this->load->view('registrasi');
	}

	public function logout()
	{
		$array = ['id_user', 'level'];
		$this->session->unset_userdata($array);
		redirect('auth');
		
	}
}
