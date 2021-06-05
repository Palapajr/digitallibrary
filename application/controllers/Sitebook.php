<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitebook extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_sitebook', 'sitebook');
        

    }

	public function index()
	{
		$parser = [
			'menu' => 'sitebook',
			'tittle' => 'Digital Library - Data Site Book',
			'isi' => $this->load->view('admin/sitebook', '', true)
		];

        $this->parser->parse('layout/main', $parser);
	}

    public function ambildata()
    {
        if ($this->input->is_ajax_request() == true) {
            $list = $this->member->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                
                $no++;
                $row = array();

                //  tombol 
                $tomboledit = "<button type=\"button\" class=\"btn btn-sm btn-outline-info\" title=\"Edit Data\" onclick=\"edit('" . $field->nama . "')\">
                <i class=\"fa fa-tags\"></i>
            </button>";

                $tombolhapus = "<button type=\"button\" class=\"btn btn-sm btn-outline-danger\" title=\"Hapus Data\" onclick=\"hapus('" . $field->nama . "')\">
                <i class=\"fa fa-trash\"></i>
            </button>";
               
                $row[] = $no;
                $row[] = $field->nama;
                $row[] = $field->kategori;
                $row[] = $field->link;
                $row[] = $field->created_date;
                $row[] = $tomboledit . ' ' . $tombolhapus;
                $data[] = $row;
            }
 
            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->sitebook->count_all(),
                "recordsFiltered" => $this->sitebook->count_filtered(),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }

	// public function ambildata()
	// {
	// 	if ($this->input->is_ajax_request() == true) {

    //         $list = $this->M_sitebook->get_datatables();
    //         $data = array();
    //         $no = $_POST['start'];
    //         foreach ($list as $field) {
                
    //             $no++;
    //             $row = array();

    //             //tombol 
    //             $tomboledit = "<button type=\"button\" class=\"btn btn-sm btn-outline-info\" title=\"Edit Data\" onclick=\"edit('" . $field->nama . "')\">
    //             <i class=\"fa fa-tags\"></i>
    //         </button>";

    //             $tombolhapus = "<button type=\"button\" class=\"btn btn-sm btn-outline-danger\" title=\"Hapus Data\" onclick=\"hapus('" . $field->nama . "')\">
    //             <i class=\"fa fa-trash\"></i>
    //         </button>";

    //             $row[] = $no;
    //             $row[] = $field->nama;
    //             $row[] = $field->kategori;
    //             $row[] = $field->keterangan;
    //             $row[] = $field->link;
    //             $row[] = $field->created_date;
    //             $row[] = $tomboledit . ' ' . $tombolhapus;
    //             $data[] = $row;
    //         }

    //         $output = array(
    //             "draw" => $_POST['draw'],
    //             "recordsTotal" => $this->M_sitebook->count_all(),
    //             "recordsFiltered" => $this->M_sitebook->count_filtered(),
    //             "data" => $data,
    //         );
    //         //output dalam format JSON
    //         echo json_encode($output);
    //     } else {
    //         exit('Maaf data tidak bisa ditampilkan');
    //     }


	// }


}
