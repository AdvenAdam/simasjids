<?php

Class User extends CI_Controller{
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

//menampilkan data User  
    public function dataUser(){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->m_data->getAllUser();
        $data['title'] = 'Data User';
        $this->template->utama('data/data_user',$data);
    }
//Tambah data user
    public function tambahUser(){
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('konfirmasi_password','konfirmasi_password','required|matches[password]');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('nama_lengkap','nama_lengkap','required');
        $this->form_validation->set_rules('no_telepon','no_telepon','required');
        if($this->form_validation->run()==false){
            $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Tambah User';
            $this->template->utama('input/tambah_User',$data);
        } else{
            $this->m_data->inputUser();
            redirect('User/dataUser');
        }
    }
//Controller hapus User
    public function hapusUser($id=null){
        if (!isset($id)) show_404();
        if ($this->m_data->deleteUser($id)) {
            redirect('User/dataUser');
        }
    }
//Controller Logout User 
public function logout_user(){
    $this->session->unset_userdata(array('username','password'));
    $this->session->set_flashdata('pesan','<div align="center" class="alert alert-success" role="alert"><b>Anda Telah Logout. </b></div>');
    redirect('home');
}



    

    




}