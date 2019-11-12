<?php
 
 class Berita extends CI_Controller{
 	public function index()
 	{
 		$this->load->model('M_berita');
		 $data['berita'] = $this->M_berita->getAllberita();
		 if( $this->input->post('keyword')) {
			 $data['berita'] = $this->M_berita->cariDataberita();
		 }
 		$this->load->view('templates/header');
 		$this->load->view('templates/sidebar');
 		$this->load->view('admin/v_berita', $data);
		$this->load->view('templates/footer');
		

 	}
 	
 	public function tambah_berita()
 	{
		$data['judul'] = 'Form Tambah Data berita';
		
		$this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
		$this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
		if ( $this->form_validation->run() == FALSE ){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			  $this->load->view('admin/tambah_berita');
			$this->load->view('templates/footer');
		} else {
			$this->M_berita->tambahDataberita();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('admin/berita');
		}
	 }
	 
	 public function hapus_berita($id)
	 {

		$this->M_berita->hapusDataberita($id);
		$this->session->set_flashdata('flash', "Dihapus");
		redirect('admin/berita');

	 }

 	public function ubah_berita($id)
 	{
		$data['judul'] = 'Form ubah Data Berita';
		$data['berita'] = $this->M_berita->getBeritabyId($id);
		
		$this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
		$this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
		if ( $this->form_validation->run() == FALSE ){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/ubah_berita',$data);
			$this->load->view('templates/footer');
		} else {
			$this->M_berita->ubahDataberita();
			$this->session->set_flashdata('flash','Diubah');
			redirect('admin/berita');
		}
	 }

 }