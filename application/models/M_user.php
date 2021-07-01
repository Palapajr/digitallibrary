<?php
class M_user extends CI_Model
{
    var $table = 'user'; //nama tabel dari database
    var $column_order = array(null,'nama','jk','level','foto','username','password','is_active','create_at'); //Sesuaikan dengan field
    var $column_search = array('nama','level'); //field yang diizin untuk pencarian 
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

    public function ambildata($nama)
    {
        return $this->db->get_where('user', ['nama' => $nama]);
    }

    public function update($nama, $jk, $level, $foto, $username, $password, $is_active)
    {
        $simpan = [
            'nama' => $nama,
            'jk' => $jk,
            'level' => $level,
            'foto' => $foto,
            'username' => $username,
            'password' => $password,
            'is_active' => $is_active
        ];
        $nama_lama = $this->input->post('nama_lama'); //gunakan jika awalan ingin di update juga
        $this->db->where('nama', $nama_lama);
        $this->db->update('user', $simpan);
    }

    public function hapus($nama)
    {
        return $this->db->delete('user', ['nama' => $nama]);
    }

    public function tampil_sum()
    {
        $query = $this->db->get('user');
		return $query->num_rows();
    }

}