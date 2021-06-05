<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // $this->load->model('Modelsitebook', 'sitebook');
		
    }

	public function index()
	{
		$parser = [
			'menu' => 'user',
			'tittle' => 'Digital Library - Data User',
			'isi' => $this->load->view('admin/user', '', true)
		];

        $this->parser->parse('layout/main', $parser);

	}
}
