<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Laporan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/laporan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/laporan/index/';
            $config['first_url'] = base_url() . 'index.php/laporan/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Laporan_model->total_rows($q);
        $laporan = $this->Laporan_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'laporan_data' => $laporan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','laporan/tbl_laporan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Laporan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_laporan' => $row->id_laporan,
		'terdaftar' => $row->terdaftar,
		'selesai_ujian' => $row->selesai_ujian,
		'lulus' => $row->lulus,
		'tidak_lulus' => $row->tidak_lulus,
	    );
            $this->template->load('template','laporan/tbl_laporan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('laporan/create_action'),
	    'id_laporan' => set_value('id_laporan'),
	    'terdaftar' => set_value('terdaftar'),
	    'selesai_ujian' => set_value('selesai_ujian'),
	    'lulus' => set_value('lulus'),
	    'tidak_lulus' => set_value('tidak_lulus'),
	);
        $this->template->load('template','laporan/tbl_laporan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'terdaftar' => $this->input->post('terdaftar',TRUE),
		'selesai_ujian' => $this->input->post('selesai_ujian',TRUE),
		'lulus' => $this->input->post('lulus',TRUE),
		'tidak_lulus' => $this->input->post('tidak_lulus',TRUE),
	    );

            $this->Laporan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('laporan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Laporan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('laporan/update_action'),
		'id_laporan' => set_value('id_laporan', $row->id_laporan),
		'terdaftar' => set_value('terdaftar', $row->terdaftar),
		'selesai_ujian' => set_value('selesai_ujian', $row->selesai_ujian),
		'lulus' => set_value('lulus', $row->lulus),
		'tidak_lulus' => set_value('tidak_lulus', $row->tidak_lulus),
	    );
            $this->template->load('template','laporan/tbl_laporan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_laporan', TRUE));
        } else {
            $data = array(
		'terdaftar' => $this->input->post('terdaftar',TRUE),
		'selesai_ujian' => $this->input->post('selesai_ujian',TRUE),
		'lulus' => $this->input->post('lulus',TRUE),
		'tidak_lulus' => $this->input->post('tidak_lulus',TRUE),
	    );

            $this->Laporan_model->update($this->input->post('id_laporan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('laporan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Laporan_model->get_by_id($id);

        if ($row) {
            $this->Laporan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('laporan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('terdaftar', 'terdaftar', 'trim|required');
	$this->form_validation->set_rules('selesai_ujian', 'selesai ujian', 'trim|required');
	$this->form_validation->set_rules('lulus', 'lulus', 'trim|required');
	$this->form_validation->set_rules('tidak_lulus', 'tidak lulus', 'trim|required');

	$this->form_validation->set_rules('id_laporan', 'id_laporan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-11 15:12:27 */
/* http://harviacode.com */