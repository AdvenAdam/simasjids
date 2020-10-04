<?php

Class Kas extends CI_Controller{
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
    //----------------------------Kas Masjid--------------------------------------//

//menampilkan data kas Masjid
public function dataKM(){
    $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
    $data['KM'] = $this->m_data->getAllKasMasjid();
    $data['title'] = 'Data Kas Masjid';
    $this->template->utama('data/data_KM',$data);
}

//Controller hapus Data Kas Masjid
public function hapusKM($id=null){
    if (!isset($id)) show_404();
    if ($this->m_data->deleteKM($id)) {
        redirect('Kas/dataKM');
    }
}
//Tambah Masuk Kas Masjid
public function pemasukanKM(){
    $this->form_validation->set_rules('uraianKM','uraian_km','required|trim');
    $this->form_validation->set_rules('masukKM','masuk','required|trim');
    if($this->form_validation->run()==false){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Penerimaan';
        $this->template->utama('input/tambah_KM',$data);
    } else{
        $this->m_data->inputPemasukanKM();
        redirect('Kas/dataKM');
    }
}
//tambah Pengeluaran Kas Masjid
public function pengeluaranKM(){

    $this->form_validation->set_rules('uraianKM','uraian_km','required|trim');
    $this->form_validation->set_rules('keluarKM','keluar','required|trim');
    if($this->form_validation->run()==false){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Pengeluaran';
        $this->template->utama('input/kurang_KM',$data);
    }else{
        $this->m_data->inputPengeluaranKM();
        redirect('Kas/dataKM');
    }
}
//Edit Data Kas Masjid
public function ubahKM(){
    $idKM = $this->input->post('id_km');

    $data = array(
        'uraian_km'     => $this->input->post('uraianKM',true),
        'keluar'        => preg_replace('/[^0-9]/', '',$this->input->post('keluarKM',true)),
        'masuk'         => preg_replace('/[^0-9]/', '',$this->input->post('masukKM',true))
    );
    $id = array('id_km' => $idKM);
    $this->db->update('tb_kas_masjid',$data,$id);
    $this->session->set_flashdata('success', 'Berhasil diupdate');

    redirect('Kas/dataKM');
}
//Edit Data Kas Masjid
public function editKM($id = NULL){
    $data["KM"] = $this->m_data->getIdKM($id);
    if (!$data["KM"]) show_404();  
    $data['user'] = $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
    $data['title'] = 'Edit Data Kas Masjid';
    $this->template->utama('input/edit_KM',$data);
}
//cari Data Kas masjid
public function cariKM(){
    $data['user']= $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
    $data['title'] = 'Pencarian';
    $tgl1 = $this->input->post('tgl_awal');
    $tgl2 = $this->input->post('tgl_akhir');
    $data['cari'] = $this->m_data->cariKM($tgl1,$tgl2);
    $this->session->set_flashdata('success', 'Hasil Pencarian');
    $this->load->view('data/cari_KM',$data);
}


//-------------------------Kas Sosial-----------------------------------------//

//menampilkan data kas Sosial
public function dataKS(){
    $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
    $data['KS'] = $this->m_data->getAllKasSosial();
    $data['title'] = 'Data Kas Sosial';
    $this->template->utama('data/data_KS',$data);
}

//Controller hapus Data Kas Sosial
public function hapusKS($id=null){
    if (!isset($id)) show_404();
    if ($this->m_data->deleteKS($id)) {
        redirect('Kas/dataKS');
    }
}
//Tambah Pemasukan Kas Sosial
public function pemasukanKS(){
    $this->form_validation->set_rules('uraianKS','uraian_km','required|trim');
    $this->form_validation->set_rules('masukKS','masuk','required|trim');
    if($this->form_validation->run()==false){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Penerimaan';
        $this->template->utama('input/tambah_KS',$data);
    } else{
        $this->m_data->inputPemasukanKS();
        redirect('Kas/dataKS');
    }
}

//tambah Pengeluaran Kas Sosial
public function pengeluaranKS(){
    $this->form_validation->set_rules('uraianKS','uraian_ks','required|trim');
    $this->form_validation->set_rules('keluarKS','keluar','required|trim');
    if($this->form_validation->run()==false){
    $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Tambah Pengeluaran';
            $this->template->utama('input/kurang_KS',$data);
        }else{
            $this->m_data->inputPengeluaranKS();
            redirect('Kas/dataKS');
        }
}
//Edit Data Kas Sosial
public function ubahKS(){
    $idKS = $this->input->post('id_ks');
    $data = array(
        'uraian_ks'     => $this->input->post('uraianKS',true),
        'keluar'        => preg_replace('/[^0-9]/', '',$this->input->post('keluarKS',true)),
        'masuk'         => preg_replace('/[^0-9]/', '',$this->input->post('masukKS',true))
    );
    $id = array('id_ks' => $idKS);
    $this->db->update('tb_kas_sosial',$data,$id);
    $this->session->set_flashdata('success', 'Berhasil diupdate');

    redirect('Kas/dataKS');
}
public function editKS($id = NULL){
    $data["KS"] = $this->m_data->getIdKS($id);
    if (!$data["KS"]) show_404();  
    $data['user'] = $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
    $data['title'] = 'Edit Data Kas Sosial';
    $this->template->utama('input/edit_KS',$data);
}


//Cari Data Kas
public function cariKS(){
    $data['user']= $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
    $data['title'] = 'Pencarian';
    $tgl = $this->input->post('tgl');
    $data['cari'] = $this->m_data->cariKS($tgl);
    $this->session->set_flashdata('success', 'Hasil Pencarian');
    $this->load->view('data/cari_KS',$data);
}
//-------------------------Grafik-----------------------------------------//


public function chart1(){
    $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
    $data['title'] = 'Grafik Kas Masjid';
    $data['grafik']=$this->m_data->chartKM();
    $this->template->utama('grafik/chart',$data);
}
public function chart2(){
    $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
    $data['title'] = 'Grafik Kas Sosial';
    $data['grafik']=$this->m_data->chartKS();
    $this->template->utama('grafik/chart',$data);
}


}