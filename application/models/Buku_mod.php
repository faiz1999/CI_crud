<?php
class Buku_mod extends CI_Model
{
	public function get($id = null)
	{
		$this->db->select('*'); //mysqli-select-db
		$this->db->from('tb_buku');
		if($id != null){
			$this->db->where('id_buku', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function add($data)
	{
		$param = array(
			'nama_buku' => $data['nama_buku'],
			'pengarang' => $data['pengarang'],
			'thn_terbit' => $data['tahun'],
		);
		$this->db->insert('tb_buku', $param);
		redirect('buku');
	}
	public function edit($data)
	{
		$param = array(
			'nama_buku' => $data['nama_buku'],
			'pengarang' => $data['pengarang'],
			'thn_terbit' => $data['tahun'],
		);
		$this->db->set($param);
		$this->db->where('id_buku', $data['id']);
		$this->db->update('tb_buku');
		redirect('buku');
	}
	public function del($id)
	{
		$this->db->where('id_buku', $id);
		$this->db->delete('tb_buku');
	}
}
?>