<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin_logged_in')!=TRUE && $this->session->userdata('level')==='peserta' )  redirect('welcome');  
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/mahasiswa/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/mahasiswa/index/';
            $config['first_url'] = base_url() . 'index.php/mahasiswa/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Mahasiswa_model->total_rows($q);
        $mahasiswa = $this->Mahasiswa_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'mahasiswa_data' => $mahasiswa,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','mahasiswa/tbl_mahasiswa_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);
        if ($row) {
            $data = array(
        'username' => $row->username,
        'password' => $row->password,
		'id_mahasiswa' => $row->id_mahasiswa,
		'nama_mahasiswa' => $row->nama_mahasiswa,
		'asal_sekolah' => $row->asal_sekolah,
		'no_pendaftaran' => $row->no_pendaftaran,
		'gambar' => $row->gambar,
	    );
            $this->template->load('template','mahasiswa/tbl_mahasiswa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mahasiswa/create_action'),
	    'username' => set_value('username'),
        'password' => set_value('password'),
        'id_mahasiswa' => set_value('id_mahasiswa'),
	    'nama_mahasiswa' => set_value('nama_mahasiswa'),
	    'asal_sekolah' => set_value('asal_sekolah'),
	    'no_pendaftaran' => set_value('no_pendaftaran'),
	    'gambar' => set_value('gambar'),
	);
        $this->template->load('template','mahasiswa/tbl_mahasiswa_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();
         $foto = $this->upload_foto();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
        'password' => $this->input->post('password',TRUE),
        'nama_mahasiswa' => $this->input->post('nama_mahasiswa',TRUE),
		'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
		'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
        'gambar'        => $foto['file_name'],
	    );

            $this->Mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('mahasiswa'));
        }
    }
     function upload_foto(){
        $config['upload_path']          = './assets/foto_profil';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        return $this->upload->data();
    }
    
    
    public function update($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mahasiswa/update_action'),
		'username' => set_value('username', $row->username),
        'password' => set_value('password', $row->password),
        'id_mahasiswa' => set_value('id_mahasiswa', $row->id_mahasiswa),
		'nama_mahasiswa' => set_value('nama_mahasiswa', $row->nama_mahasiswa),
		'asal_sekolah' => set_value('asal_sekolah', $row->asal_sekolah),
		'no_pendaftaran' => set_value('no_pendaftaran', $row->no_pendaftaran),
		'gambar' => set_value('gambar', $row->gambar),
	    );
            $this->template->load('template','mahasiswa/tbl_mahasiswa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_mahasiswa', TRUE));
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
        'password' => $this->input->post('password',TRUE),
        'nama_mahasiswa' => $this->input->post('nama_mahasiswa',TRUE),
		'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
		'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
	    );

            $this->Mahasiswa_model->update($this->input->post('id_mahasiswa', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $this->Mahasiswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mahasiswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('nama_mahasiswa', 'nama mahasiswa', 'trim|required');
	$this->form_validation->set_rules('asal_sekolah', 'asal sekolah', 'trim|required');
	$this->form_validation->set_rules('no_pendaftaran', 'no pendaftaran', 'trim|required');

	$this->form_validation->set_rules('id_mahasiswa', 'id_mahasiswa', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_mahasiswa.xls";
        $judul = "tbl_mahasiswa";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "Id Mahasiswa");
        xlsWriteLabel($tablehead, $kolomhead++, "Username");
        xlsWriteLabel($tablehead, $kolomhead++, "Password");
        xlsWriteLabel($tablehead, $kolomhead++, "Nama_mahasiswa");
        xlsWriteLabel($tablehead, $kolomhead++, "Asal_sekolah");
        xlsWriteLabel($tablehead, $kolomhead++, "No_pendaftaran");
        foreach ($this->Mahasiswa_model->get_all() as $data) {
                $kolombody = 0;

                //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
                xlsWriteNumber($tablebody, $kolombody++, $id_mahasiswa);
            xlsWriteLabel($tablebody, $kolombody++, $data->username);
            xlsWriteLabel($tablebody, $kolombody++, $data->password);
            xlsWriteLabel($tablebody, $kolombody++, $data->nama_mahasiswa);
            xlsWriteLabel($tablebody, $kolombody++, $data->asal_sekolah);
            xlsWriteLabel($tablebody, $kolombody++, $data->no_pendaftaran);

            $tablebody++;
                $nourut++;
            }

            xlsEOF();
            exit();
    }


    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_mahasiswa.doc");

        $data = array(
            'tbl_mahasiswa_data' => $this->Mahasiswa_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user/tbl_mahasiswa_doc',$data);
    }

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-02-20 11:22:22 */
/* http://harviacode.com */