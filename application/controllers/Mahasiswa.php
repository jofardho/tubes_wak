<?php
 // write your name and student id here
class Mahasiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		//load library form validation
		$this->load->model('Mahasiswa_model');
		$this->load->helper('url');
	    $this->load->library('form_validation');
		
	}


	public function index()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$mahasiswa = $this->Mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        if ($validation->run()) {
            $mahasiswa->tambahDataMahasiswa();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('Mahasiswa');
        }
        $this->load->view("mahasiswa/tambah");

		//from library form_validation, set rules for nama, nim, email = required
		//conditon in form_validation, if user input form = false, then load page "tambah" again
		//else, when successed {
		//call method "tambahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "added success"
		//back to controller mahasiswa }
	}

	public function hapus($id)
	{
		//call method hapusDataMahasiswa with parameter id from mahasiswa_model
		//use flashdata to show alert "dihapus"
		//back to controller mahasiswa
		//$hapus = array('id' => $id);
		$this->db->delete('mahasiswa', array('id' => $id));
 		redirect('mahasiswa/index');

	}

	public function ubah($id)
	{
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
  			if (!isset($id)) redirect('mahasiswa/ubah'); 
 		 //from library form_validation, set rules for nama, nim, email = required
  		$mahasiswa = $this->Mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());
  		//conditon in form_validation, if user input form = false, then load page "ubah" again
        $data["mahasiswa"] = $mahasiswa->getMahasiswaById($id);
	        if ($validation->run()) {
            $mahasiswa->ubahDataMahasiswa();
            $this->session->set_flashdata('message','DiUbah');
            redirect('Mahasiswa');
        }

    	    $this->load->view("mahasiswa/ubah", $data);



		






		//from library form_validation, set rules for nama, nim, email = required



		//conditon in form_validation, if user input form = false, then load page "ubah" again





		//else, when successed {
		//call method "ubahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "data changed successfully"
		//back to controller mahasiswa }
	}
}
