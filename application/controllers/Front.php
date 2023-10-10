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

		$this->load->view('front', $data);
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
}
