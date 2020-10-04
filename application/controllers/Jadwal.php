<?php

Class Jadwal extends CI_Controller{
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

//-------------------------Jadwal-----------------------------------------//

//menampilkan data jadwal
    public function dataJadwal(){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['Jadwal'] = $this->m_data->getAllJadwal();
        $data['title'] = 'Data Jadwal Masjid';
        $this->template->utama('data/data_Jadwal',$data);
    }
    //Tambah data Jadwal
    public function tambahjadwal(){
        $this->form_validation->set_rules('nama_jadwal','nama_jadwal','required|trim');
        $this->form_validation->set_rules('deskripsi','deskripsi_jadwal','required|trim');
        $this->form_validation->set_rules('tempat','tempat','required|trim');
        $this->form_validation->set_rules('tanggal','tanggal','required|trim');
        $this->form_validation->set_rules('waktu','waktu','required|trim');
        if($this->form_validation->run()==false){
            $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Tambah Jadwal Acara';
            $this->template->utama('input/tambah_Jadwal',$data);
        } else{
            $this->m_data->inputJadwal();
            redirect('Jadwal/dataJadwal');
        }
    }
//  hapus Data Jadwal
    public function hapusJadwal($id=null){
        if (!isset($id)) show_404();
        if ($this->m_data->deleteJadwal($id)) {
            redirect('Jadwal/dataJadwal');
        }
    }
//Menangkap Id Jadwal  yang akan diedit
    public function editJadwal($id = NULL){
        $data["ID"] = $this->m_data->getIdJadwal($id);
        if (!$data["ID"]) show_404();  
        $data['user'] = $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Edit Data Jadwal Acara';
        $this->template->utama('input/edit_Jadwal',$data);
    }
//Update Data Jadwal
    public function updateJadwal(){
        $idJadwal = $this->input->post('id_jadwal');
        $data = array(
            'nama_jadwal'      => $this->input->post('nama_jadwal',true),
            'deskripsi_jadwal' => $this->input->post('deskripsi',true),
            'tempat'           => $this->input->post('tempat',true),
            'tanggal'          => $this->input->post('tanggal',true),
            'waktu'            => $this->input->post('waktu',true)
        );
        $id = array('id_jadwal' => $idJadwal);
        $this->db->update('tb_jadwal',$data,$id);
        $this->session->set_flashdata('success', 'Berhasil diupdate');

        redirect('Jadwal/dataJadwal');
    }


    

    




}