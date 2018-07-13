<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // is_login();
        $this->load->model('Jurusan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/jurusan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/jurusan/index/';
            $config['first_url'] = base_url() . 'index.php/jurusan/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Jurusan_model->total_rows($q);
        $jurusan = $this->Jurusan_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jurusan_data' => $jurusan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','jurusan/tbl_jurusan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Jurusan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_jurusan' => $row->id_jurusan,
		'kode_jurusan' => $row->kode_jurusan,
		'nama_jurusan' => $row->nama_jurusan,
		'jumlah_peserta' => $row->jumlah_peserta,
	    );
            $this->template->load('template','jurusan/tbl_jurusan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurusan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jurusan/create_action'),
	    'id_jurusan' => set_value('id_jurusan'),
	    'kode_jurusan' => set_value('kode_jurusan'),
	    'nama_jurusan' => set_value('nama_jurusan'),
	    'jumlah_peserta' => set_value('jumlah_peserta'),
	);
        $this->template->load('template','jurusan/tbl_jurusan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_jurusan' => $this->input->post('kode_jurusan',TRUE),
		'nama_jurusan' => $this->input->post('nama_jurusan',TRUE),
		'jumlah_peserta' => $this->input->post('jumlah_peserta',TRUE),
	    );

            $this->Jurusan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('jurusan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jurusan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jurusan/update_action'),
		'id_jurusan' => set_value('id_jurusan', $row->id_jurusan),
		'kode_jurusan' => set_value('kode_jurusan', $row->kode_jurusan),
		'nama_jurusan' => set_value('nama_jurusan', $row->nama_jurusan),
		'jumlah_peserta' => set_value('jumlah_peserta', $row->jumlah_peserta),
	    );
            $this->template->load('template','jurusan/tbl_jurusan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurusan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jurusan', TRUE));
        } else {
            $data = array(
		'kode_jurusan' => $this->input->post('kode_jurusan',TRUE),
		'nama_jurusan' => $this->input->post('nama_jurusan',TRUE),
		'jumlah_peserta' => $this->input->post('jumlah_peserta',TRUE),
	    );

            $this->Jurusan_model->update($this->input->post('id_jurusan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jurusan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jurusan_model->get_by_id($id);

        if ($row) {
            $this->Jurusan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jurusan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurusan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_jurusan', 'kode jurusan', 'trim|required');
	$this->form_validation->set_rules('nama_jurusan', 'nama jurusan', 'trim|required');
	$this->form_validation->set_rules('jumlah_peserta', 'jumlah peserta', 'trim|required');

	$this->form_validation->set_rules('id_jurusan', 'id_jurusan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jurusan.php */
/* Location: ./application/controllers/Jurusan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-30 06:36:02 */
/* http://harviacode.com */