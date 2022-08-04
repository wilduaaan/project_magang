<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_setting_ukuran extends CI_Model {

	public function get_by_id() {
	
		$query = $this->db->query('select a.id_setting_ukuran as set_data1, b.ukuran_foto_slider as set_data2,c.ukuran_foto_tentang as set_data3,d.ukuran_foto_produk as set_data4, e.ukuran_foto_galeri as set_data5, f.footer as set_data6 
			from setting_ukuran a
			left outer join setting_ukuran b on b.id_setting_ukuran="1" 
			left outer join setting_ukuran c on c.id_setting_ukuran="1" 
			left outer join setting_ukuran d on d.id_setting_ukuran="1" 
			left outer join setting_ukuran e on e.id_setting_ukuran="1" 
			left outer join setting_ukuran f on f.id_setting_ukuran="1"
			where a.id_setting_ukuran="1"
			');
		return $query->row();
	}

	public function update_ukuran($data1,$data2, $data3, $data4, $data5) {
		$this->db->update('setting_ukuran', $data1, $data2, $data3, $data4, $data5);
		return $this->db->affected_rows();
	}
	

}