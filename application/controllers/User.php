<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user', 'user');
		
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

	public function ambildata()
    {
        if ($this->input->is_ajax_request() == true) {
            $list = $this->sitebook->get_datatables();
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

                $links = "<a href=\"".$field->link."\" target=\"_blank\">".$field->link."</a>";

                $row[] = $no;
                $row[] = $field->nama;
                $row[] = $field->kategori;
                $row[] = $links;
                $row[] = $field->created_date;
                $row[] = $tomboledit . ' ' . $tombolhapus;
                $data[] = $row;
            }
 
            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->user->count_all(),
                "recordsFiltered" => $this->user->count_filtered(),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }

    public function formtambah()
    {
        if ($this->input->is_ajax_request() == true) {
            $msg = [
                'sukses' => $this->load->view('admin/modal/tambahsite', '', true)
            ];
            echo json_encode($msg);
        }
    }

    public function simpandata()
    {
        if ($this->input->is_ajax_request() == true) {
            $nama = $this->input->post('nama', true);
            $kategori = $this->input->post('kategori', true);
            $keterangan = $this->input->post('keterangan', true);
            $link = $this->input->post('link', true);

            // $this->form_validation->set_rules('nis', 'NIS', 'trim|required|is_unique[testing.nis]', ['required' => '%s Tidak boleh kosong', 'is_unique' => '%s sudah ada didalam database']);
            $this->form_validation->set_rules('nama', 'Judul Website', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('kategori', 'Kategori Website', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('keterangan', 'Keterangan Singkat', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('link', 'Link Website', 'trim|required', ['required' => '%s Tidak boleh kosong']);


            if ($this->form_validation->run() == TRUE) {
                $this->user->simpan($nama, $kategori, $keterangan, $link);

                $msg = [
                    'sukses' => 'Data Sitebook Berhasil Disimpan'
                ];
            } else {
                $msg = [
                    'error' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    ' . validation_errors() . '
                </div>'
                ];
            }

            echo json_encode($msg);
        }
    } 

    public function formedit()
    {
        if ($this->input->is_ajax_request() == true) {
            $nama = $this->input->post('nama', true);

            $ambildata = $this->user->ambildata($nama);

            if ($ambildata->num_rows() > 0) {
                $row = $ambildata->row_array();
                $data = [
                    'nama' => $nama,
                    'kategori' => $row['kategori'],
                    'keterangan' => $row['keterangan'],
                    'link' => $row['link']                    
                ];
            }

            $msg = [
                'sukses' => $this->load->view('admin/modal/editsite', $data, true)
            ];

            echo json_encode($msg);
        }
    }

    public function updatedata()
    {
        if ($this->input->is_ajax_request() == true) {
            $nama = $this->input->post('nama', true);
            $kategori = $this->input->post('kategori', true);
            $keterangan = $this->input->post('keterangan', true);
            $link = $this->input->post('link', true);

            $this->user->update($nama, $kategori, $keterangan, $link);

            $msg = [
                'sukses' => 'Data Sitebook Berhasil Di-Update'
            ];
            echo json_encode($msg);
        }
    }
    
    public function hapus()
    {
        if ($this->input->is_ajax_request() == true) {
            $nama = $this->input->post('nama', true);

            $hapus = $this->user->hapus($nama);
            if ($hapus) {
                $msg = [
                    'sukses' => 'Data Sitebook Berhasil Dihapus'
                ];
            }
            echo json_encode($msg);
        }
    }
}
