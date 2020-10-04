<?php
Class M_data extends CI_Model{

    public function getAllKasMasjid()
    {
        return $this->db->get('tb_kas_masjid')->result();
    }
    public function getAllKasSosial()
    {
        return $this->db->get('tb_kas_sosial')->result();
    }
    public function getAllJadwal()
    {
        return $this->db->get('tb_jadwal')->result();
    }
    public function getAllPengurus()
    {
        return $this->db->get('tb_pengurus')->result();
    }
    public function getAllUser()
    {
        return $this->db->get('tb_user')->result();
    }
    public function getIdKM($id){
        return $this->db->GET_WHERE('tb_kas_masjid', ["id_km" => $id])->row();
    }
    public function getIdKS($id){
        return $this->db->GET_WHERE('tb_kas_sosial', ["id_ks" => $id])->row();
    }
    public function getIdJadwal($id){
        return $this->db->GET_WHERE('tb_jadwal', ["id_jadwal" => $id])->row();
    }
    public function deleteKM($id){
        return $this->db->delete('tb_kas_masjid', array("id_km" => $id));
    }
    public function deleteKS($id){
        return $this->db->delete('tb_kas_sosial', array("id_ks" => $id));
    }
    public function deleteJadwal($id){
        return $this->db->delete('tb_jadwal', array("id_jadwal" => $id));
    }
    public function getMasukKM(){
        $this->db->select_sum('masuk');
        $this->db->from('tb_kas_masjid');
        $query = $this->db->get();
    }

    public function deleteUser($id){
        return $this->db->delete('tb_user', array("id_user" => $id));
    }

    public function chartKM(){
        $query = $this->db->query("SELECT tgl,SUM(masuk)as Pemasukan,SUM(keluar) as Pengeluaran FROM tb_kas_masjid GROUP BY tgl");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    public function chartKS(){
        $query = $this->db->query("SELECT tgl,SUM(masuk)as Pemasukan,SUM(keluar) as Pengeluaran FROM tb_kas_sosial GROUP BY tgl");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    public function cariKS($tgl1,$tgl2){
        $this->db->select('*');
        $this->db->from('tb_kas_sosial');
        $this->db->where('tgl >=',$tgl1);
        $this->db->where('tgl <=',$tgl2);
        $query = $this->db->get();
        return $query->result();
    }
    public function cariKM($tgl1,$tgl2){
        $this->db->select('*');
        $this->db->from('tb_kas_masjid');
        $this->db->where('tgl >=',$tgl1);
        $this->db->where('tgl <=',$tgl2);
        $query = $this->db->get();
        return $query->result();
    }
    public function inputPemasukanKM(){
        $tgl = date('Y-m-d',true);

        $data = array(
            'uraian_km'   =>  $this->input->post('uraianKM',true),
            'tgl'         => $tgl,
            'masuk'       => preg_replace('/[^0-9]/', '',$this->input->post('masukKM',true))
        );
        $this->db->insert('tb_kas_masjid',$data);
        $this->session->set_flashdata('success', 'Berhasil disimpan');

		redirect('Kas/dataKM');
    }
    public function inputPemasukanKS(){
        $tgl = date('Y-m-d',true);

        $data = array(
            'uraian_ks' => $this->input->post('uraianKS',true),
            'tgl'       => $tgl,
            'masuk'     => preg_replace('/[^0-9]/', '',$this->input->post('masukKS',true))
        );
        $this->db->insert('tb_kas_sosial',$data);
        $this->session->set_flashdata('success', 'Berhasil disimpan');

		redirect('Kas/dataKS');
    }
    public function inputPengeluaranKM(){
        $tgl = date('Y-m-d',true);

        $data = array(
            'uraian_km'     => $this->input->post('uraianKM',true),
            'tgl'           => $tgl,
            'keluar'        => preg_replace('/[^0-9]/', '',$this->input->post('keluarKM',true))
        );
        $this->db->insert('tb_kas_masjid',$data);
        $this->session->set_flashdata('success', 'Berhasil disimpan');

		redirect('Kas/dataKM');
    }
    public function inputPengeluaranKS(){
        $tgl = date('Y-m-d',true);

        $data = array(
            'uraian_ks' => $this->input->post('uraianKS',true),
            'tgl'       => $tgl,
            'keluar'    => preg_replace('/[^0-9]/', '',$this->input->post('keluarKS',true))
        );
        $this->db->insert('tb_kas_sosial',$data);
        $this->session->set_flashdata('success', 'Berhasil disimpan');

		redirect('Kas/dataKS');
    }
    public function inputUser(){
        $data = array(
            'password'      => md5($this->input->post('password',true)),
            'username'      => $this->input->post('username',true),
            'nama_lengkap'  => $this->input->post('nama_lengkap',true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin',true),
            'level'         => $this->input->post('level',true),
            'no_telepon'    => $this->input->post('no_telepon',true)
        );
        $this->db->insert('tb_user',$data);
        $this->session->set_flashdata('success', 'Berhasil disimpan');

		redirect('User/dataUser');
    }
    public function inputJadwal(){

        $data = [
            'nama_jadwal'      => $this->input->post('nama_jadwal',true),
            'deskripsi_jadwal' => $this->input->post('deskripsi',true),
            'tempat'           => $this->input->post('tempat',true),
            'tanggal'          => $this->input->post('tanggal',true),
            'waktu'            => $this->input->post('waktu',true)
        ];
        $this->db->insert('tb_jadwal',$data);
        $this->session->set_flashdata('success', 'Berhasil disimpan');

		redirect('Jadwal/dataJadwal');
    }
}
?>