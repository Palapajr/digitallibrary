<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		check_not_login();
		$parser = [
			'menu' => 'dashboard',
			'tittle' => 'Digital Library - Dashboard',
			'isi' => $this->load->view('admin/dashboard', '', true)
		];

        $this->parser->parse('layout/main', $parser);

	}
}
