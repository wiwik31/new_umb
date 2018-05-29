<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settingsoal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin_logged_in')!=TRUE && $this->session->userdata('level')==='peserta' )  redirect('welcome');  
        $this->load->model('Settingsoal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/settingsoal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/settingsoal/index/';
            $config['first_url'] = base_url() . 'index.php/settingsoal/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Settingsoal_model->total_rows($q);
        $settingsoal = $this->Settingsoal_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'settingsoal_data' => $settingsoal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','settingsoal/tbl_settingsoal_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Settingsoal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_set' => $row->id_set,
		'jumlah_soal' => $row->jumlah_soal,
	    );
            $this->template->load('template','settingsoal/tbl_settingsoal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('settingsoal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('settingsoal/create_action'),
	    'id_set' => set_value('id_set'),
	    'jumlah_soal' => set_value('jumlah_soal'),
	);
        $this->template->load('template','settingsoal/tbl_settingsoal_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jumlah_soal' => $this->input->post('jumlah_soal',TRUE),
	    );

            $this->Settingsoal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('settingsoal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Settingsoal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('settingsoal/update_action'),
		'id_set' => set_value('id_set', $row->id_set),
		'jumlah_soal' => set_value('jumlah_soal', $row->jumlah_soal),
	    );
            $this->template->load('template','settingsoal/tbl_settingsoal_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('settingsoal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_set', TRUE));
        } else {
            $data = array(
		'jumlah_soal' => $this->input->post('jumlah_soal',TRUE),
	    );

            $this->Settingsoal_model->update($this->input->post('id_set', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('settingsoal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Settingsoal_model->get_by_id($id);

        if ($row) {
            $this->Settingsoal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('settingsoal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('settingsoal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jumlah_soal', 'jumlah soal', 'trim|required');

	$this->form_validation->set_rules('id_set', 'id_set', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Settingsoal.php */
/* Location: ./application/controllers/Settingsoal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-02-20 12:35:37 */
/* http://harviacode.com */