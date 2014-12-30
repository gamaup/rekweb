<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Datamaster extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin', '', TRUE);
        $config['upload_path'] = "./assets/uploads";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $this->load->library('upload', $config);
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            $data = array(
                'pagetitle' => 'Datamaster | Direktori Makanan',
                'pos_parent' => 'datamaster',
                'pos_child' => 'list_makanan',
                'title' => 'Datamaster',
                'subtitle' => 'List Makanan',
                'action' => "<a class='button button-blue' href='".base_url()."admin/datamaster/add'><i class='fa fa-plus'></i> Tambah Makanan</a>",
                'breadcrumb' => array('Datamaster'),
                'content' => 'admin/content/datamaster',
                'datamaster' => $this->admin->getAll(),
                'direktori' => $this->admin->getDir()
            );
            $this->load->view('admin/template/page', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function add() {
        if ($this->session->userdata('logged_in')) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters("class='form-error' title='", "'");
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
            $this->form_validation->set_rules('photo-name', 'Foto', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'pagetitle' => 'Datamaster | Direktori Makanan',
                    'pos_parent' => 'datamaster',
                    'pos_child' => 'tambah_makanan',
                    'title' => 'Datamaster',
                    'subtitle' => 'Tambah Makanan',
                    'action' => "<a class='button button-red' href='".base_url()."admin/datamaster'><i class='fa fa-times'></i> Close</a>",
                    'breadcrumb' => array('<a href="'.base_url().'admin/datamaster">Data Master</a>', 'Tambah Makanan'),
                    'content' => 'admin/content/datamaster_add'
                );
                $this->load->view('admin/template/page', $data);
            } else {
                if (!$this->upload->do_upload("photo")) {
                    $data = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $foto = $data['upload_data']['file_name'];
                }
                $data = array(
                    'nama_mkn' => $this->input->post('nama'),
                    'desc' => $this->input->post('desc'),
                    'foto' => $foto,
                    'asal' => $this->input->post('asal'),
                    'waktu' => $this->input->post('waktu'),
                    'jenis' => $this->input->post('jenis'),
                    'cara' => $this->input->post('cara'),
                    'ukuran' => $ukuran = $this->input->post('ukuran'),
                    'author' => $this->session->userdata('logged_in')['id_user'],
                    'status' => '0'
                );
                $this->admin->addFood($data);
                $this->session->set_flashdata("pesan", "<div class='alert alert-notice'>
                <p><b>Sukses!</b> Makanan berhasil ditambahkan ke database.<i class='fa fa-times'></i></p>
            </div>");
                redirect('admin/datamaster', 'refresh');
            }
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function delete($id = '') {
        if ($this->session->userdata('logged_in')) {
            $this->admin->delete($id);

            $this->session->set_flashdata("pesan", "<div class='alert alert-notice'>
                <p><b>Sukses!</b> Makanan berhasil dihapus dari database.<i class='fa fa-times'></i></p>
            </div>");
            redirect('admin/datamaster', 'refresh');
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function edit($id=' ') {
        if ($this->session->userdata('logged_in')) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters("class='form-error' title='", "'");
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
            $this->form_validation->set_rules('desc', 'Deskripsi', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'pagetitle' => 'Datamaster | Direktori Makanan',
                    'pos_parent' => 'datamaster',
                    'pos_child' => 'list_makanan',
                    'title' => 'Datamaster',
                    'subtitle' => 'Edit Makanan',
                    'action' => "<a class='button button-red' href='".base_url()."admin/datamaster'><i class='fa fa-times'></i> Close</a>",
                    'breadcrumb' => array('<a href="'.base_url().'admin/datamaster">Data Master</a>', 'Edit Makanan'),
                    'content' => 'admin/content/datamaster_edit',
                    'datamaster' => $this->admin->getFood($id),
                );
                $this->load->view('admin/template/page', $data);
            } else {
                if ($_FILES['photo']['size'] == 0) {
                    $data = array(
                        'nama_mkn' => $this->input->post('nama'),
                        'desc' => $this->input->post('desc'),
                        'asal' => $this->input->post('asal'),
                        'waktu' => $this->input->post('waktu'),
                        'jenis' => $this->input->post('jenis'),
                        'cara' => $this->input->post('cara'),
                        'ukuran' => $ukuran = $this->input->post('ukuran'),
                        'author' => $this->session->userdata('logged_in')['id_user']
                    );
                } else {
                    //delete foto lama
                    $delete = $this->input->post('image_delete');
                    unlink('assets/uploads/'.$delete);
                    if (!$this->upload->do_upload("photo")) {
                        $data = array('error' => $this->upload->display_errors());
                    } else {
                        $data = array('upload_data' => $this->upload->data());
                        $foto = $data['upload_data']['file_name'];
                    }

                    $data = array(
                        'nama_mkn' => $this->input->post('nama'),
                        'foto' => $foto,
                        'asal' => $this->input->post('asal'),
                        'waktu' => $this->input->post('waktu'),
                        'jenis' => $this->input->post('jenis'),
                        'cara' => $this->input->post('cara'),
                        'ukuran' => $this->input->post('ukuran')
                    );
                }
                $this->admin->updateFood($data, $id);
                $this->session->set_flashdata("pesan", "<div class='alert alert-notice'>
                <p><b>Sukses!</b> Makanan berhasil diedit.<i class='fa fa-times'></i></p>
            </div>");
                redirect('admin/datamaster', 'refresh');
            }
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function kategori() {
        if ($this->session->userdata('logged_in')) {
            $data = array(
                'pagetitle' => 'Kategori | Direktori Makanan',
                'pos_parent' => 'datamaster',
                'pos_child' => 'manage_kategori',
                'title' => 'Datamaster',
                'subtitle' => 'Manage Kategori',
                'action' => "<a class='button button-blue' href='".base_url()."admin/datamaster/add_kategori'><i class='fa fa-plus'></i> Tambah Kategori</a>",
                'breadcrumb' => array('<a>Datamaster</a>', 'Kategori'),
                'content' => 'admin/content/kategori',
                'asal' => $this->admin->getKats(1),
                'waktu' => $this->admin->getKats(2),
                'jenis' => $this->admin->getKats(3),
                'cara' => $this->admin->getKats(4),
                'ukuran' => $this->admin->getKats(5)
            );
            $this->load->view('admin/template/page', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function add_kategori() {
        if ($this->session->userdata('logged_in')) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters("class='form-error' title='", "'");
            $this->form_validation->set_rules('nama_kat', 'Nama Kategori', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'pagetitle' => 'Kategori | Direktori Makanan',
                    'pos_parent' => 'datamaster',
                    'pos_child' => 'manage_kategori',
                    'title' => 'Datamaster',
                    'subtitle' => 'Manage Kategori',
                    'action' => "<a class='button button-red' href='".base_url()."admin/datamaster/kategori'><i class='fa fa-times'></i> Close</a>",
                    'breadcrumb' => array('<a>Datamaster</a>', '<a>Kategori</a>', 'Tambah Kategori'),
                    'content' => 'admin/content/kategori_add'
                );
                $this->load->view('admin/template/page', $data);
            } else {
                $data = array(
                    'nama_kat' => $this->input->post('nama_kat'),
                    'id_dir' => $this->input->post('id_dir')
                );
                $this->admin->addKat($data);
                $this->session->set_flashdata("pesan", "<div class='alert alert-notice'>
                <p><b>Sukses!</b> Kategori berhasil ditambahakan.<i class='fa fa-times'></i></p>
            </div>");
                redirect('admin/datamaster/kategori', 'refresh');
            }
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function edit_kategori($id = '') {
        if ($this->session->userdata('logged_in')) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters("class='form-error' title='", "'");
            $this->form_validation->set_rules('nama_kat', 'Nama Kategori', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'pagetitle' => 'Kategori | Direktori Makanan',
                    'pos_parent' => 'datamaster',
                    'pos_child' => 'manage_kategori',
                    'title' => 'Datamaster',
                    'subtitle' => 'Manage Kategori',
                    'action' => "<a class='button button-red' href='".base_url()."admin/datamaster/kategori'><i class='fa fa-times'></i> Close</a>",
                    'breadcrumb' => array('<a>Datamaster</a>', '<a>Kategori</a>', 'Edit Kategori'),
                    'content' => 'admin/content/kategori_edit',
                    'kategori' => $this->admin->getKat($id)
                );
                $this->load->view('admin/template/page', $data);
            } else {
                $data = array(
                    'nama_kat' => $this->input->post('nama_kat')
                );
                $this->admin->updateKat($data, $id);
                $this->session->set_flashdata("pesan", "<div class='alert alert-notice'>
                <p><b>Sukses!</b> Kategori berhasil diedit.<i class='fa fa-times'></i></p>
            </div>");
                redirect('admin/datamaster/kategori', 'refresh');
            }
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function delete_kategori($id_kat = '', $id_dir= '') {
        if ($this->session->userdata('logged_in')) {
            $this->admin->deleteKat($id_kat);
            $dir = $this->admin->getDirname($id_dir);
            $data = array($dir => '0');
            $this->admin->updateFoodbyKat($data, $dir, $id_kat);
            $this->session->set_flashdata("pesan", "<div class='alert alert-notice'>
            <p><b>Sukses!</b> Kategori berhasil dihapus.<i class='fa fa-times'></i></p>
        </div>");
            redirect('admin/datamaster/kategori', 'refresh');
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
}