<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_sitebook', 'sitebook');
        
    }

	public function index()
	{
        $this->load->view('home');
	}

	public function sitebook()
	{
		$sum['totalsitebook'] = $this->sitebook->tampil_sum();
        $this->load->view('sitebook', $sum);
	}

	public function ebook()
	{
        $this->load->view('ebook');
	}
}
 