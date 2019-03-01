<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pesanmakan extends CI_Model {

	public function v_menulist(){
		$this->db->select('*');
    $this->db->from('menu_makanan');

    $query = $this->db->get();
    return $query->result();
	}

	public function v_listpesanan(){
    $sql = "SELECT a.makanan as menu_mkn, b.qty AS pcs, a.harga*b.qty AS total FROM menu_makanan a JOIN pemesanan b USING (id_makanan)";
    $query = $this->db->query($sql);
    return $query->result();	
	}

	public function i_listpesanan($id, $qty, $nama){
    $data = array(
      'id_makanan' => $id,
      'nm_pemesan' => $nama,
      'qty' => $qty
    );

    $this->db->insert('pemesanan', $data);
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */