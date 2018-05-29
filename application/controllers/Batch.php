<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Batch extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin_logged_in')!=TRUE && $this->session->userdata('level')==='peserta' )  redirect('welcome');  
        $this->load->model('Batch_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/batch/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/batch/index/';
            $config['first_url'] = base_url() . 'index.php/batch/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Batch_model->total_rows($q);
        $batch = $this->Batch_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'batch_data' => $batch,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','batch/tbl_batch_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Batch_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_batch' => $row->id_batch,
		'nama_batch' => $row->nama_batch,
		'waktu_batch' => $row->waktu_batch,
		'tgl' => $row->tgl,
		'status' => $row->status,
	    );
            $this->template->load('template','batch/tbl_batch_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('batch'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('batch/create_action'),
	    'id_batch' => set_value('id_batch'),
	    'nama_batch' => set_value('nama_batch'),
	    'waktu_batch' => set_value('waktu_batch'),
	    'tgl' => set_value('tgl'),
	    'status' => set_value('status'),
	);
        $this->template->load('template','batch/tbl_batch_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_batch' => $this->input->post('nama_batch',TRUE),
		'waktu_batch' => $this->input->post('waktu_batch',TRUE),
		'tgl' => $this->input->post('tgl',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Batch_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('batch'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Batch_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('batch/update_action'),
		'id_batch' => set_value('id_batch', $row->id_batch),
		'nama_batch' => set_value('nama_batch', $row->nama_batch),
		'waktu_batch' => set_value('waktu_batch', $row->waktu_batch),
		'tgl' => set_value('tgl', $row->tgl),
		'status' => set_value('status', $row->status),
	    );
            $this->template->load('template','batch/tbl_batch_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('batch'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_batch', TRUE));
        } else {
            $data = array(
		'nama_batch' => $this->input->post('nama_batch',TRUE),
		'waktu_batch' => $this->input->post('waktu_batch',TRUE),
		'tgl' => $this->input->post('tgl',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Batch_model->update($this->input->post('id_batch', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('batch'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Batch_model->get_by_id($id);

        if ($row) {
            $this->Batch_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('batch'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('batch'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_batch', 'nama batch', 'trim|required');
	$this->form_validation->set_rules('waktu_batch', 'waktu batch', 'trim|required');
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_batch', 'id_batch', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Batch.php */
/* Location: ./application/controllers/Batch.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-30 05:07:30 */
/* http://harviacode.com */