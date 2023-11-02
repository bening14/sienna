<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

	public function index()
	{
		$this->load->model("Crud", "crud");

		$data['artikel'] = $this->crud->get_all_limit('tbl_artikel')->result_array();
		$data['book'] = $this->crud->get_all('tbl_book')->result_array();
		$data['konselor'] = $this->crud->get_all('tbl_konselor')->result_array();
		$data['sesi'] = $this->crud->get_all('tbl_sesi_bibliotherapy')->result_array();

		$this->load->view('front', $data);
	}

	public function book()
	{
		$this->load->model("Crud", "crud");

		$data['book'] = $this->crud->get_all('tbl_book')->result_array();

		$this->load->view('listbook', $data);
	}

	public function artikel()
	{
		$this->load->model("Crud", "crud");

		$data['artikel'] = $this->crud->get_where('tbl_artikel', ['id' => $this->uri->segment('3')])->row_array();
		$data['child'] = $this->crud->get_all_limit('tbl_artikel')->result_array();

		$this->load->view('artikel_mental', $data);
	}

	public function cari_artikel()
	{
		$this->load->model("Crud", "crud");


		$table = $this->input->post('table');
		$column = 'judul';
		$like = $this->input->post('cari');

		$result = $this->crud->get_where_like($table,  $column, $like)->result_array();

		if ($result) {
			$response = ['status' => 'success', 'message' => 'Berhasil Ambil Data!', 'data' => $result];
		} else
			$response = ['status' => 'error', 'message' => 'Data Kosong!'];

		echo json_encode($response);
	}

	public function insert_daftar()
	{
		$this->load->model("Crud", "crud");

		$table = $this->input->post("table");

		$data = $this->input->post();
		unset($data['table']);
		$insert_data = $this->crud->insert($table, $data);

		if ($insert_data > 0) {

			$response = ['status' => 'success', 'message' => 'Berhasil Tambah Data!'];
		} else
			$response = ['status' => 'error', 'message' => 'Gagal Tambah Data!'];

		echo json_encode($response);
	}

	public function asessment()
	{
		$this->load->view('self_asessment');
	}

	public function simpan_kuesioner()
	{
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$q1 = $this->input->post('q1');
		$q2 = $this->input->post('q2');
		$q3 = $this->input->post('q3');
		$q4 = $this->input->post('q4');
		$q5 = $this->input->post('q5');
		$q6 = $this->input->post('q6');
		$q7 = $this->input->post('q7');
		$q8 = $this->input->post('q8');
		$q9 = $this->input->post('q9');
		$q10 = $this->input->post('q10');
		$q11 = $this->input->post('q11');
		$q12 = $this->input->post('q12');
		$q13 = $this->input->post('q13');
		$q14 = $this->input->post('q14');

		$data = array(
			'email' => $email,
			'nama' => $nama,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'q1' => $q1,
			'q2' => $q2,
			'q3' => $q3,
			'q4' => $q4,
			'q5' => $q5,
			'q6' => $q6,
			'q7' => $q7,
			'q8' => $q8,
			'q9' => $q9,
			'q10' => $q10,
			'q11' => $q11,
			'q12' => $q12,
			'q13' => $q13,
			'q14' => $q14
		);

		$insert_data = $this->Crud->insert('tbl_kuisioner', $data);

		if ($insert_data > 0) {

			$response = ['status' => 'success', 'message' => 'Berhasil Tambah Data!'];
		} else
			$response = ['status' => 'error', 'message' => 'Gagal Tambah Data!'];

		echo json_encode($response);
	}

	public function bukudetil()
	{

		$this->load->model("Crud", "crud");

		$data['buku'] = $this->crud->get_where('tbl_book', ['id' => $this->uri->segment('3')])->row_array();
		$data['komentar'] = $this->crud->get_where('tbl_komentar', ['id_tbl_book' => $this->uri->segment('3')])->result_array();

		$this->load->view('bukudetil', $data);
	}

	public function insert_request_buku()
	{
		$this->load->model("Crud", "crud");

		$table = $this->input->post("table");


		$data = $this->input->post();


		unset($data['table']);
		//ambil info judul buku
		$where = array(
			'id' => $data['id_tbl_book']
		);
		$r = $this->crud->get_where('tbl_book', $where)->row_array();

		$data['judul_buku'] = $r['judul_buku'];

		$insert_data = $this->crud->insert($table, $data);


		if ($insert_data > 0) {
			$response = ['status' => 'success', 'message' => 'Berhasil submit Data!'];
		} else
			$response = ['status' => 'error', 'message' => 'Gagal submit Data!'];

		echo json_encode($response);
	}

	public function insert_komentar()
	{
		$this->load->model("Crud", "crud");

		$table = $this->input->post("table");


		$data = $this->input->post();


		unset($data['table']);
		//ambil info judul buku
		$where = array(
			'id' => $data['id_tbl_book']
		);
		$r = $this->crud->get_where('tbl_book', $where)->row_array();

		$data['judul_buku'] = $r['judul_buku'];

		$insert_data = $this->crud->insert($table, $data);


		if ($insert_data > 0) {
			$response = ['status' => 'success', 'message' => 'Berhasil submit Data!'];
		} else
			$response = ['status' => 'error', 'message' => 'Gagal submit Data!'];

		echo json_encode($response);
	}
}
