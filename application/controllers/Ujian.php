<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ujian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Ujian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/ujian/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/ujian/index/';
            $config['first_url'] = base_url() . 'index.php/ujian/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Ujian_model->total_rows($q);
        $ujian = $this->Ujian_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'ujian_data' => $ujian,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','ujian/tbl_ujian_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Ujian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_ujian' => $row->id_ujian,
		'id_peserta' => $row->id_peserta,
		'id_panitia' => $row->id_panitia,
		'id_batch' => $row->id_batch,
		'jumlah_salah' => $row->jumlah_salah,
		'jumlah_benar' => $row->jumlah_benar,
		'nilai' => $row->nilai,
		'status' => $row->status,
	    );
            $this->template->load('template','ujian/tbl_ujian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ujian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ujian/create_action'),
	    'id_ujian' => set_value('id_ujian'),
	    'id_peserta' => set_value('id_peserta'),
	    'id_panitia' => set_value('id_panitia'),
	    'id_batch' => set_value('id_batch'),
	    'jumlah_salah' => set_value('jumlah_salah'),
	    'jumlah_benar' => set_value('jumlah_benar'),
	    'nilai' => set_value('nilai'),
	    'status' => set_value('status'),
	);
        $this->template->load('template','ujian/tbl_ujian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_peserta' => $this->input->post('id_peserta',TRUE),
		'id_panitia' => $this->input->post('id_panitia',TRUE),
		'id_batch' => $this->input->post('id_batch',TRUE),
		'jumlah_salah' => $this->input->post('jumlah_salah',TRUE),
		'jumlah_benar' => $this->input->post('jumlah_benar',TRUE),
		'nilai' => $this->input->post('nilai',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Ujian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('ujian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ujian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ujian/update_action'),
		'id_ujian' => set_value('id_ujian', $row->id_ujian),
		'id_peserta' => set_value('id_peserta', $row->id_peserta),
		'id_panitia' => set_value('id_panitia', $row->id_panitia),
		'id_batch' => set_value('id_batch', $row->id_batch),
		'jumlah_salah' => set_value('jumlah_salah', $row->jumlah_salah),
		'jumlah_benar' => set_value('jumlah_benar', $row->jumlah_benar),
		'nilai' => set_value('nilai', $row->nilai),
		'status' => set_value('status', $row->status),
	    );
            $this->template->load('template','ujian/tbl_ujian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ujian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ujian', TRUE));
        } else {
            $data = array(
		'id_peserta' => $this->input->post('id_peserta',TRUE),
		'id_panitia' => $this->input->post('id_panitia',TRUE),
		'id_batch' => $this->input->post('id_batch',TRUE),
		'jumlah_salah' => $this->input->post('jumlah_salah',TRUE),
		'jumlah_benar' => $this->input->post('jumlah_benar',TRUE),
		'nilai' => $this->input->post('nilai',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Ujian_model->update($this->input->post('id_ujian', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ujian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ujian_model->get_by_id($id);

        if ($row) {
            $this->Ujian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ujian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ujian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_peserta', 'id peserta', 'trim|required');
	$this->form_validation->set_rules('id_panitia', 'id panitia', 'trim|required');
	$this->form_validation->set_rules('id_batch', 'id batch', 'trim|required');
	$this->form_validation->set_rules('jumlah_salah', 'jumlah salah', 'trim|required');
	$this->form_validation->set_rules('jumlah_benar', 'jumlah benar', 'trim|required');
	$this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_ujian', 'id_ujian', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_ujian.xls";
        $judul = "tbl_ujian";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Panitia");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Batch");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Salah");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Benar");
	xlsWriteLabel($tablehead, $kolomhead++, "Nilai");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Ujian_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_peserta);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_panitia);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_batch);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah_salah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah_benar);
	    xlsWriteNumber($tablebody, $kolombody++, $data->nilai);
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
        header("Content-Disposition: attachment;Filename=tbl_ujian.doc");

        $data = array(
            'tbl_ujian_data' => $this->Ujian_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('ujian/tbl_ujian_doc',$data);
    }

}

/* End of file Ujian.php */
/* Location: ./application/controllers/Ujian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-29 05:32:59 */
/* http://harviacode.com */