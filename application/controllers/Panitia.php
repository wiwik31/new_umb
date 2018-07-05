<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Panitia extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Panitia_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','panitia/tbl_panitia_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Panitia_model->json();
    }

    public function read($id) 
    {
        $row = $this->Panitia_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_panitia' => $row->id_panitia,
		'id_batch' => $row->id_batch,
		'nama_panitia' => $row->nama_panitia,
		'email' => $row->email,
		'username' => $row->username,
		'password' => $row->password,
		'status' => $row->status,
	    );
            $this->template->load('template','panitia/tbl_panitia_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('panitia'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('panitia/create_action'),
	    'id_panitia' => set_value('id_panitia'),
	    'id_batch' => set_value('id_batch'),
	    'nama_panitia' => set_value('nama_panitia'),
	    'email' => set_value('email'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'status' => set_value('status'),
	);
        $this->template->load('template','panitia/tbl_panitia_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_batch' => $this->input->post('id_batch',TRUE),
		'nama_panitia' => $this->input->post('nama_panitia',TRUE),
		'email' => $this->input->post('email',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Panitia_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('panitia'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Panitia_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('panitia/update_action'),
		'id_panitia' => set_value('id_panitia', $row->id_panitia),
		'id_batch' => set_value('id_batch', $row->id_batch),
		'nama_panitia' => set_value('nama_panitia', $row->nama_panitia),
		'email' => set_value('email', $row->email),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'status' => set_value('status', $row->status),
	    );
            $this->template->load('template','panitia/tbl_panitia_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('panitia'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_panitia', TRUE));
        } else {
            $data = array(
		'id_batch' => $this->input->post('id_batch',TRUE),
		'nama_panitia' => $this->input->post('nama_panitia',TRUE),
		'email' => $this->input->post('email',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Panitia_model->update($this->input->post('id_panitia', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('panitia'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Panitia_model->get_by_id($id);

        if ($row) {
            $this->Panitia_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('panitia'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('panitia'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_batch', 'id batch', 'trim|required');
	$this->form_validation->set_rules('nama_panitia', 'nama panitia', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_panitia', 'id_panitia', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_panitia.xls";
        $judul = "tbl_panitia";
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
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Batch");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Panitia");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Username");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Panitia_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_batch);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_panitia);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->username);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_panitia.doc");

        $data = array(
            'tbl_panitia_data' => $this->Panitia_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('panitia/tbl_panitia_doc',$data);
    }

}

/* End of file Panitia.php */
/* Location: ./application/controllers/Panitia.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-28 03:20:34 */
/* http://harviacode.com */