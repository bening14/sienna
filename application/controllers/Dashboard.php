<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Silahkan login terlebih dahulu!</div>');
            redirect('auth');
        }
        $this->load->model("Crud", "crud");
    }

    public function index()
    {
        $this->load->view('dashboard');
    }

    public function user()
    {
        $this->load->view('dashboard/user');
    }

    public function ajax_table_user()
    {
        $table = 'mst_user'; //nama tabel dari database
        $column_order = array('id', 'nama', 'no_hp', 'email', 'level', 'is_active', 'date_created'); //field yang ada di table user
        $column_search = array('id', 'nama', 'no_hp', 'email', 'level', 'is_active', 'date_created'); //field yang diizin untuk pencarian 
        $select = 'id, nama, no_hp, email, level, is_active, date_created';
        $order = array('id' => 'asc'); // default order 
        $list = $this->crud->get_datatables($table, $select, $column_order, $column_search, $order);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row['data']['no'] = $no;
            $row['data']['id'] = $key->id;
            $row['data']['nama'] = $key->nama;
            $row['data']['no_hp'] = $key->no_hp;
            $row['data']['email'] = $key->email;
            $row['data']['level'] = $key->level;
            $row['data']['is_active'] = $key->is_active;
            $row['data']['date_created'] = date('d-M-Y', strtotime($key->date_created));

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->crud->count_all($table),
            "recordsFiltered" => $this->crud->count_filtered($table, $select, $column_order, $column_search, $order),
            "data" => $data,
            "query" => $this->db->last_query()
        );
        //output to json format
        echo json_encode($output);
    }

    public function insert_data_user()
    {
        $table = $this->input->post("table");

        $data = $this->input->post();
        unset($data['table']);


        if ($data['kategori'] == 'tambah') {

            $data['password'] = password_hash($this->input->post('password_mentah'), PASSWORD_DEFAULT);
            $data['is_active'] = '1';

            unset($data['kategori']);
            unset($data['password_mentah']);
            $insert_data = $this->crud->insert($table, $data);

            // echo $this->db_last_query();
            // die;
        } else {
            $where = array(
                'id' => $data['id']
            );
            $data['password'] = password_hash($this->input->post('password_mentah'), PASSWORD_DEFAULT);

            unset($data['id']);
            unset($data['kategori']);
            unset($data['password_mentah']);

            $insert_data = $this->crud->update($table, $data, $where);
        }


        if ($insert_data > 0) {

            $response = ['status' => 'success', 'message' => 'Berhasil Tambah Data!'];
        } else
            $response = ['status' => 'error', 'message' => 'Gagal Tambah Data!'];

        echo json_encode($response);
    }

    public function delete_data()
    {
        $table = $this->input->post('table');
        if ($this->crud->delete($table, ['id' => $this->input->post('id')])) {
            $response = ['status' => 'success', 'message' => 'Success Delete Data!'];
        } else
            $response = ['status' => 'failed', 'message' => 'Error Delete Data!'];

        echo json_encode($response);
    }
}
