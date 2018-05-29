<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Matauji extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin_logged_in')!=TRUE && $this->session->userdata('level')==='peserta' )  redirect('welcome');  
        $this->load->model('Matauji_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/matauji/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/matauji/index/';
            $config['first_url'] = base_url() . 'index.php/matauji/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Matauji_model->total_rows($q);
        $matauji = $this->Matauji_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'matauji_data' => $matauji,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','matauji/tbl_matauji_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Matauji_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_matauji' => $row->id_matauji,
		'nama_matauji' => $row->nama_matauji,
		'aktif' => $row->aktif,
	    );
            $this->template->load('template','matauji/tbl_matauji_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('matauji'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('matauji/create_action'),
	    'id_matauji' => set_value('id_matauji'),
	    'nama_matauji' => set_value('nama_matauji'),
	    'aktif' => set_value('aktif'),
	);
        $this->template->load('template','matauji/tbl_matauji_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_matauji' => $this->input->post('nama_matauji',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
	    );

            $this->Matauji_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('matauji'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Matauji_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('matauji/update_action'),
		'id_matauji' => set_value('id_matauji', $row->id_matauji),
		'nama_matauji' => set_value('nama_matauji', $row->nama_matauji),
		'aktif' => set_value('aktif', $row->aktif),
	    );
            $this->template->load('template','matauji/tbl_matauji_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('matauji'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_matauji', TRUE));
        } else {
            $data = array(
		'nama_matauji' => $this->input->post('nama_matauji',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
	    );

            $this->Matauji_model->update($this->input->post('id_matauji', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('matauji'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Matauji_model->get_by_id($id);

        if ($row) {
            $this->Matauji_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('matauji'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('matauji'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_matauji', 'nama matauji', 'trim|required');
	$this->form_validation->set_rules('aktif', 'aktif', 'trim|required');

	$this->form_validation->set_rules('id_matauji', 'id_matauji', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Matauji.php */
/* Location: ./application/controllers/Matauji.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-02-20 12:16:06 */
/* http://harviacode.com */