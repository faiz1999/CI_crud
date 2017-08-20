<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Buku extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('buku_mod', 'buku');
	}
	public function index()
	{
		$query = $this->buku->get();
		$data['header'] = 'Tampil Data Buku'; //bisa di include ke tag title
		$data['buku'] = $query->result();
		/*
		$data = array(
				'header' => "judul title";
				'buku' => $query->result();
			);
		*/
		$this->load->view('_header', $data);
		$this->load->view('vbuku', $data);
		$this->load->view('_footer');
	}
 	public function add()
 	{
 		$data['header'] = 'Tampil Data Buku';
 		$this->load->view('_header', $data);
 		$this->load->view('buku_tambah');
 		$this->load->view('_footer');
 	}
 	public function edit($id = null)
 	{
 		$query = $this->buku->get($id);
 		$data = array(
 			'header' => 'Data buku Editor',
 			'buku' => $query->row()
 		);
 		$this->load->view('_header', $data);
 		$this->load->view('edit_buku');
 		$this->load->view('_footer');
 	}
 	public function process()
 	{
 		if (isset($_POST['add'])) {
 			$inputan = $this->input->post(null, TRUE);
 			$this->buku->add($inputan);	
 		}
 		elseif (isset($_POST['edit'])) {
 			$inputan = $this->input->post(null, TRUE);
 			$this->buku->edit($inputan);
 		}
 	}
 	public function del($id)
 	{
 		$this->buku->del($id);
 		redirect('buku');
 	}
}
?>