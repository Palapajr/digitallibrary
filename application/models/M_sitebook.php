<?php
class M_sitebook extends CI_Model
{
    var $table = 'site'; //nama tabel dari database
    var $column_order = array(null,'nama','kategori','link','created_date',null); //Sesuaikan dengan field
    var $column_search = array('nama','kategori'); //field yang diizin untuk pencarian 
    var $order = array('nama' => 'asc'); // default order 
 
    private function _get_datatables_query()
    { 
 
        $this->db->from($this->table);
 
        $i = 0;
 
        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
 
                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
  
        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    } 

    public function simpan($nama, $kategori, $keterangan, $link)
    {
        $simpan = [
            'nama' => $nama,
            'kategori' => $kategori,
            'keterangan' => $keterangan,
            'link' => $link
        ];
        $this->db->insert('site', $simpan);
    }

    public function ambildata($nama)
    {
        return $this->db->get_where('site', ['nama' => $nama]);
    }

    public function update($nama, $kategori, $keterangan, $link){

        $simpan = [
            'nama' => $nama,
            'kategori' => $kategori,
            'keterangan' => $keterangan,
            'link' => $link
        ];

        $this->db->where('nama', $nama);
        $this->db->update('site', $simpan);
    }

    public function hapus($nama)
    {
        return $this->db->delete('site', ['nama' => $nama]);
    }
}