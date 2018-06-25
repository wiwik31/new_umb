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
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','laporan/tbl_laporan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Laporan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Laporan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_laporan' => $row->id_laporan,
		'id_peserta' => $row->id_peserta,
		'id_jurusan' => $row->id_jurusan,
		'tgl_ujian' => $row->tgl_ujian,
		'id_nilai' => $row->id_nilai,
		'status' => $row->status,
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
	    'id_peserta' => set_value('id_peserta'),
	    'id_jurusan' => set_value('id_jurusan'),
	    'tgl_ujian' => set_value('tgl_ujian'),
	    'id_nilai' => set_value('id_nilai'),
	    'status' => set_value('status'),
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
		'id_peserta' => $this->input->post('id_peserta',TRUE),
		'id_jurusan' => $this->input->post('id_jurusan',TRUE),
		'tgl_ujian' => $this->input->post('tgl_ujian',TRUE),
		'id_nilai' => $this->input->post('id_nilai',TRUE),
		'status' => $this->input->post('status',TRUE),
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
		'id_peserta' => set_value('id_peserta', $row->id_peserta),
		'id_jurusan' => set_value('id_jurusan', $row->id_jurusan),
		'tgl_ujian' => set_value('tgl_ujian', $row->tgl_ujian),
		'id_nilai' => set_value('id_nilai', $row->id_nilai),
		'status' => set_value('status', $row->status),
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
		'id_peserta' => $this->input->post('id_peserta',TRUE),
		'id_jurusan' => $this->input->post('id_jurusan',TRUE),
		'tgl_ujian' => $this->input->post('tgl_ujian',TRUE),
		'id_nilai' => $this->input->post('id_nilai',TRUE),
		'status' => $this->input->post('status',TRUE),
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
	$this->form_validation->set_rules('id_peserta', 'id peserta', 'trim|required');
	$this->form_validation->set_rules('id_jurusan', 'id jurusan', 'trim|required');
	$this->form_validation->set_rules('tgl_ujian', 'tgl ujian', 'trim|required');
	$this->form_validation->set_rules('id_nilai', 'id nilai', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_laporan', 'id_laporan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_laporan.xls";
        $judul = "tbl_laporan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Peserta");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jurusan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Ujian");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Nilai");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Laporan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_peserta);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jurusan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_ujian);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_nilai);
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
        header("Content-Disposition: attachment;Filename=tbl_laporan.doc");

        $data = array(
            'tbl_laporan_data' => $this->Laporan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('laporan/tbl_laporan_doc',$data);
    }

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-25 04:27:05 */
/* http://harviacode.com */