<?php
Class Auth extends CI_Controller{
    
    
    
    function index(){
        $this->load->view('auth/login');
    }
    
    function cheklogin(){
        $level = $this->input->post('level');
        $email      = $this->input->post('email');
        //$password   = $this->input->post('password');
        $password = $this->input->post('password',TRUE);
        $hashPass = password_hash($password,PASSWORD_DEFAULT);
        $test     = password_verify($password, $hashPass);
        // query chek users

        if ($level === 'admin') {
            $this->db->where('email',$email);
            //$this->db->where('password',  $test);
            $users       = $this->db->get('tbl_user');
            if($users->num_rows()>0){
                $user = $users->row_array();
                if(password_verify($password,$user['password'])){
                    // retrive user data to session
                    $this->session->set_userdata($user);
                    $this->session->set_userdata(array('level'=>$level, 'admin_logged_in'=>TRUE));
                    redirect('welcome');
                }else{
                    redirect('auth');
                }
            }else{
                $this->session->set_flashdata('status_login','email atau password yang anda input salah');
                redirect('auth');
            }
        }elseif ($level === 'peserta') {
            $check = $this->db->get_where('tbl_peserta', array('email'=>$email, 'password'=>md5($password)))->row();
            //$check = $this->db->query("SELECT * FROM tbl_peserta WHERE email='$email' AND password= md5('$password') ")->result();
            if ($check) {
                $peserta = $check->nama_peserta;
                $id_peserta = $check->id_peserta;
                $this->session->set_userdata('peserta',$peserta);
                $this->session->set_userdata('id_peserta',$id_peserta);
                $this->session->set_userdata('level',$level);
                redirect('welcome');
            }else{
                $this->session->set_flashdata('status_login','email atau password yang anda input salah');
                redirect('auth');
            }
        }

        
    }
    
    function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('status_login','Anda sudah berhasil keluar dari aplikasi');
        redirect('auth');
    }
}
