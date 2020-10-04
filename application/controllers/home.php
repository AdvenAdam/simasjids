<?php

Class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
        
    }
//
    public function index(){

        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
            if($this->form_validation->run()==false){
                $data['title'] = 'Welcome Simasjid';
                $this->load->view('template/depan',$data);
            } else {
                $username = $this->input->POST('username');
                $password = $this->input->POST('password');
                $user = $this->db->GET_WHERE('tb_user',['username'=> $username, 'password'=> md5($password) ])->row_array();
                    if($user['username']==$username){
                        if(md5($password, $user['password'])){
                            $data =[
                                'username' =>$user['username'],
                            ];
                           
                            $this->session->set_userdata($data);
                            redirect('home/halaman');
                        }else{
                            redirect('home');
                        }
                }else{
                    $this->session->set_flashdata('pesan','<div align="center" class="alert alert-danger" role="alert"><b>Username Atau Password Salah!</b></div>');
               redirect('home');
                }
            }
    }
    public function login(){
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
            if($this->form_validation->run()==false){
                $data['title'] = 'Login';
                $this->load->view('login',$data);
            } else {
                $username = $this->input->POST('username');
                $password = $this->input->POST('password');
                $user = $this->db->GET_WHERE('tb_user',['username'=> $username, 'password'=> md5($password) ])->row_array();
                    if($user['username']==$username){
                        if(md5($password, $user['password'])){
                            $data =[
                                'username' =>$user['username'],
                            ];
                           
                            $this->session->set_userdata($data);
                            redirect('home/halaman');
                        }else{
                            redirect('home');
                        }
                }else{
                    $this->session->set_flashdata('pesan','<div align="center" class="alert alert-danger" role="alert"><b>Username Atau Password Salah!</b></div>');
               redirect('home');
                }
            }
    }
//Halaman Awal
    public function halaman(){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Halaman Awal';
        $data['masukKM'] = $this->db->query("SELECT sum(masuk) as nominal FROM tb_kas_masjid ")->row_array();
        $data['keluarKM'] = $this->db->query("SELECT sum(keluar) as nominal FROM tb_kas_masjid ")->row_array();
        $data['jmlUser'] = $this->db->query('select * from tb_user')->num_rows();
        $data['masukKS'] = $this->db->query("SELECT sum(masuk) as nominal FROM tb_kas_sosial ")->row_array();
        $data['keluarKS'] = $this->db->query("SELECT sum(keluar) as nominal FROM tb_kas_sosial ")->row_array();
        $data['jmlJadwal'] = $this->db->query('select * from tb_jadwal')->num_rows();
        $this->template->utama('template/homee',$data);
    }



    

    




}