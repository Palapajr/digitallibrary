<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook extends CI_Controller {

	public function index()
	{
		$parser = [
			'menu' => 'ebook',
			'tittle' => 'Digital Library - Data Jurnal Ebook',
			'isi' => $this->load->view('admin/ebook', '', true)
		];

        $this->parser->parse('layout/main', $parser);

	}
}
