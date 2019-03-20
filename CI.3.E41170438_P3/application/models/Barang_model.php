<?php 
class Barang_model extends CI_Model
{
    private $_table = "barang";
    public $kode_barang;
    public $nama_barang;
    public $deskripsi_barang;
    public $stok_barang;
    public $harga_barang;

    public function getBarang()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($kode)
    {
        return $this->db->get_where($this->_table, ['kode_barang' => $kode])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_barang = uniqid();
        $this->nama_barang = $post['nama_barang'];
        $this->deskripsi_barang = $post['deskripsi_barang'];
        $this->stok_barang = $post['stok_barang'];
        $this->harga_barang = $post['harga_barang'];
        $this->db->insert($this->_table, $this);
    }

    public function edit($kode)
    {
        $post = $this->input->post();
        $this->kode_barang = $_post['kode_barang'];
        $this->nama_barang = $post['nama_barang'];
        $this->deskripsi_barang = $post['deskripsi_barang'];
        $this->stok_barang = $post['stok_barang'];
        $this->harga_barang = $post['harga_barang'];
        $this->db->update($this->_table, $this, ['kode_barang' => $kode]);
    }

    public function delete($kode)
    {
        $this->db->delete($this->_table, $this, ['kode_barang' => $kode]);
    }
}
