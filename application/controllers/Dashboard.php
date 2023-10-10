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

    public function ebook()
    {
        $this->load->view('ebook');
    }

    public function ajax_table_book()
    {
        $table = 'tbl_book'; //nama tabel dari database
        $column_order = array('id', 'judul_buku', 'penulis', 'cover', 'deskripsi', 'date_created'); //field yang ada di table user
        $column_search = array('id', 'judul_buku', 'penulis', 'cover', 'deskripsi', 'date_created'); //field yang diizin untuk pencarian 
        $select = 'id, judul_buku, penulis, cover, deskripsi, date_created';
        $order = array('id' => 'asc'); // default order 
        $list = $this->crud->get_datatables($table, $select, $column_order, $column_search, $order);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row['data']['no'] = $no;
            $row['data']['id'] = $key->id;
            $row['data']['judul_buku'] = $key->judul_buku;
            $row['data']['penulis'] = $key->penulis;
            $row['data']['cover'] = $key->cover;
            $row['data']['deskripsi'] = $key->deskripsi;
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

    public function insert_data_buku()
    {
        $table = $this->input->post("table");

        $config['upload_path']          = "assets/ebook/";
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG';
        $config['max_size']             = 1024;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        $data = $this->input->post();
        unset($data['table']);
        // unset($data['password']);

        if (count($_FILES) > 0) {
            if (!$this->upload->do_upload('file')) {
                $response = array('status' => 'failed', 'message' => $this->upload->display_errors());
                echo json_encode($response);
                die;
            }
            $data_upload = $this->upload->data();
            $data['cover'] = $data_upload['file_name'];
        } else {
            $data['cover'] = 'default.png';
        }

        //cek dulu apakah Produk sudah ada ?
        $where = array(
            'judul_buku' => $data['judul_buku']
        );
        $a = $this->crud->get_where('tbl_book', $where)->num_rows();

        if ($a > 0) {
            $response = ['status' => 'double', 'message' => 'Judul E-Book sudah ada di database!'];
            echo json_encode($response);
            die;
        }

        $insert_data = $this->crud->insert($table, $data);


        if ($insert_data > 0) {
            $response = ['status' => 'success', 'message' => 'Berhasil Tambah Data!'];
        } else
            $response = ['status' => 'error', 'message' => 'Gagal Tambah Data!'];

        echo json_encode($response);
    }

    public function edit_data_buku()
    {
        $table = $this->input->post("table");
        $data = $this->input->post();
        unset($data['table']);

        $where = array(
            'id' => $data['id']
        );
        unset($data['id']);

        $update = $this->crud->update($table, $data, $where);


        if ($update > 0) {
            $response = ['status' => 'success', 'message' => 'Berhasil Tambah Data!'];
        } else
            $response = ['status' => 'error', 'message' => 'Gagal Tambah Data!'];

        echo json_encode($response);
    }

    public function ubah_cover_buku()
    {

        $table = $this->input->post("table");
        $id = $this->input->post("id");

        $config['upload_path']          = "assets/ebook/";
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG';
        $config['max_size']             = 1024;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        $data = $this->input->post();
        unset($data['table']);
        unset($data['id']);

        if (count($_FILES) > 0) {
            if (!$this->upload->do_upload('file')) {
                $response = array('status' => 'failed', 'message' => $this->upload->display_errors());
                echo json_encode($response);
                die;
            }
            $data_upload = $this->upload->data();
            $data['cover'] = $data_upload['file_name'];
        } else {
            $data['cover'] = 'default.png';
        }

        $where = array(
            'id' => $id
        );

        $update = $this->crud->update($table, $data, $where);


        if ($update > 0) {
            $response = ['status' => 'success', 'message' => 'Berhasil Ubah Data!'];
        } else
            $response = ['status' => 'error', 'message' => 'Gagal Ubah Data!'];

        echo json_encode($response);
    }

    public function konselor()
    {
        $this->load->view('konselor');
    }

    public function ajax_table_konselor()
    {
        $table = 'tbl_konselor'; //nama tabel dari database
        $column_order = array('id', 'nama', 'profesi', 'gambar', 'date_created'); //field yang ada di table user
        $column_search = array('id', 'nama', 'profesi', 'gambar', 'date_created'); //field yang diizin untuk pencarian 
        $select = 'id, nama, profesi, gambar, date_created';
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
            $row['data']['profesi'] = $key->profesi;
            $row['data']['gambar'] = $key->gambar;
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

    public function insert_data_konselor()
    {
        $table = $this->input->post("table");

        $config['upload_path']          = "assets/konselor/";
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG';
        $config['max_size']             = 1024;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        $data = $this->input->post();
        unset($data['table']);
        // unset($data['password']);

        if (count($_FILES) > 0) {
            if (!$this->upload->do_upload('file')) {
                $response = array('status' => 'failed', 'message' => $this->upload->display_errors());
                echo json_encode($response);
                die;
            }
            $data_upload = $this->upload->data();
            $data['gambar'] = $data_upload['file_name'];
        } else {
            $data['gambar'] = 'default.png';
        }

        $insert_data = $this->crud->insert($table, $data);


        if ($insert_data > 0) {
            $response = ['status' => 'success', 'message' => 'Berhasil Tambah Data!'];
        } else
            $response = ['status' => 'error', 'message' => 'Gagal Tambah Data!'];

        echo json_encode($response);
    }

    public function edit_data_konselor()
    {
        $table = $this->input->post("table");
        $data = $this->input->post();
        unset($data['table']);

        $where = array(
            'id' => $data['id']
        );
        unset($data['id']);

        $update = $this->crud->update($table, $data, $where);


        if ($update > 0) {
            $response = ['status' => 'success', 'message' => 'Berhasil Edit Data!'];
        } else
            $response = ['status' => 'error', 'message' => 'Gagal Edit Data!'];

        echo json_encode($response);
    }

    public function ubah_gambar_konselor()
    {

        $table = $this->input->post("table");
        $id = $this->input->post("id");

        $config['upload_path']          = "assets/konselor/";
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG';
        $config['max_size']             = 1024;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        $data = $this->input->post();
        unset($data['table']);
        unset($data['id']);

        if (count($_FILES) > 0) {
            if (!$this->upload->do_upload('file')) {
                $response = array('status' => 'failed', 'message' => $this->upload->display_errors());
                echo json_encode($response);
                die;
            }
            $data_upload = $this->upload->data();
            $data['gambar'] = $data_upload['file_name'];
        } else {
            $data['gambar'] = 'default.png';
        }

        $where = array(
            'id' => $id
        );

        $update = $this->crud->update($table, $data, $where);


        if ($update > 0) {
            $response = ['status' => 'success', 'message' => 'Berhasil Ubah Data!'];
        } else
            $response = ['status' => 'error', 'message' => 'Gagal Ubah Data!'];

        echo json_encode($response);
    }

    public function artikel()
    {
        $this->load->view('artikel');
    }

    public function ajax_table_artikel()
    {
        $table = 'tbl_artikel'; //nama tabel dari database
        $column_order = array('id', 'judul', 'cover', 'posting_oleh', 'uraian', 'date_created'); //field yang ada di table user
        $column_search = array('id', 'judul', 'cover', 'posting_oleh', 'uraian', 'date_created'); //field yang diizin untuk pencarian 
        $select = 'id, judul, cover, posting_oleh, uraian, date_created';
        $order = array('id' => 'asc'); // default order 
        $list = $this->crud->get_datatables($table, $select, $column_order, $column_search, $order);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row['data']['no'] = $no;
            $row['data']['id'] = $key->id;
            $row['data']['judul'] = $key->judul;
            $row['data']['cover'] = $key->cover;
            $row['data']['posting_oleh'] = $key->posting_oleh;
            $row['data']['uraian'] = substr($key->uraian, 0, 240);
            $row['data']['date_created'] = date('d-M-Y H:i:s', strtotime($key->date_created));

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

    public function insert_data_artikel()
    {
        $table = $this->input->post("table");

        $config['upload_path']          = "assets/artikel/";
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG';
        $config['max_size']             = 1024;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        $data = $this->input->post();
        unset($data['table']);

        if (count($_FILES) > 0) {
            if (!$this->upload->do_upload('file')) {
                $response = array('status' => 'failed', 'message' => $this->upload->display_errors());
                echo json_encode($response);
                die;
            }
            $data_upload = $this->upload->data();
            $data['cover'] = $data_upload['file_name'];
        } else {
            $data['cover'] = 'default.jpg';
        }

        $insert_data = $this->crud->insert($table, $data);


        if ($insert_data > 0) {
            $response = ['status' => 'success', 'message' => 'Berhasil Tambah Data!'];
        } else
            $response = ['status' => 'error', 'message' => 'Gagal Tambah Data!'];

        echo json_encode($response);
    }

    public function ubah_cover_artikel()
    {

        $table = $this->input->post("table");
        $id = $this->input->post("id");

        $config['upload_path']          = "assets/artikel/";
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG|JPEG';
        $config['max_size']             = 1024;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        $data = $this->input->post();
        unset($data['table']);
        unset($data['id']);

        if (count($_FILES) > 0) {
            if (!$this->upload->do_upload('file')) {
                $response = array('status' => 'failed', 'message' => $this->upload->display_errors());
                echo json_encode($response);
                die;
            }
            $data_upload = $this->upload->data();
            $data['cover'] = $data_upload['file_name'];
        } else {
            $data['cover'] = 'default.png';
        }

        $where = array(
            'id' => $id
        );

        $update = $this->crud->update($table, $data, $where);


        if ($update > 0) {
            $response = ['status' => 'success', 'message' => 'Berhasil Ubah Data!'];
        } else
            $response = ['status' => 'error', 'message' => 'Gagal Ubah Data!'];

        echo json_encode($response);
    }
}
