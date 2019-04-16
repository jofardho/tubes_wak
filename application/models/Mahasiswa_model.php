<?php
 // write your name and student id here
class Mahasiswa_model extends CI_model
{

	private $mahasiswa='mahasiswa';

	public function getAllMahasiswa()
	{
		//use query builder to get data table "mahasiswa"
		$data = $this->db->get('tiket');
		return $data->result_array();
	}

	public function rules()
	{
		return [
			['field'=>'nama_kereta','label'=>'nama_kereta','rules'=>'required'],

			['field'=>'berangkat','label'=>'berangkat','rules'=>'required'],

			['field'=>'datang','label'=>'datang','rules'=>'required'],

			['field'=>'durasi','label'=>'durasi','rules'=>'required'],

			['field'=>'harga','label'=>'harga','rules'=>'required'],

			['field'=>'keterangan','label'=>'keterangan','rules'=>'required']			

		];
	}

	public function tambahDataMahasiswa()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert($this->mahasiswa, $data);

	}

	public function hapusDataMahasiswa($id)
	{
		//use query builder to delete data based on id 
		return $this->db->get($id);
	}

	public function getMahasiswaById($id)
	{
		//get data mahasiswa based on id 
		return $this->db->get_where($this->mahasiswa,["id"=>$id])->row();

	}

	public function ubahDataMahasiswa()
	{

		$data = [
			"id" => $this->input->post('id',true),
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];


		 //$this->db->where(array('id'=>$id));
        //$this->db->update('mahasiswa',$data);
		//$this->db->update($this->mahasiswa, $data,array('id'=> $post['id']));
		$this->db->update($this->mahasiswa, $data, array('id'=>$data['id']));

		//return $this->db->get_where($this->mahasiswa,["id"=>$id])->row();
		//use query builder class to update data mahasiswa based on id
	}

	public function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);
		
		
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		//$this->db->select('*');
		//$this->db->from('mahasiswa');
		//$this->db->like('nama',$keyword);
		//$this->db->or_like('nim',$keyword);
		//$this->db->or_like('email',$keyword);
		//$this->db->or_like('jurusan',$keyword);
		//$data['post'] = $this->db->get('mahasiswa')->result();
		
		//$data['get'] = $this->db->get('mahasiswa')->result();
		//$data['mahasiswa'] = $this->db->get('mahasiswa')->result();
     	//return $this->db->$keyword;
		
		$this->db->select('*');
  		$this->db->from('mahasiswa');
  		if (!empty($keyword)) {
   			$this->db->like('nama', $keyword);
   			$this->db->or_like('nim', $keyword);
   			$this->db->or_like('email', $keyword);
   			$this->db->or_like('jurusan', $keyword);
  		}			
 			 $this->db->order_by('nama');
 			 $this->db->order_by('nim');
 			 $this->db->order_by('email');
 			 $this->db->order_by('jurusan');
  			 $getData = $this->db->get('');
				return $getData->result_array();
		//return data mahasiswa that has been searched
	}
}
