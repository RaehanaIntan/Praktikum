<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{

    protected $primary = 'id';
    protected $_table = 'barang';
    
    public function getAll()
{
    $this->db->select('barang.*, kategori.name as kategori_name, satuan.name as satuan_name, user.username as username, supplier.name as supplier_name');
    $this->db->from($this->_table);
    $this->db->join('kategori', 'kategori.id = barang.kategori_id');
    $this->db->join('satuan', 'satuan.id = barang.satuan_id');
    $this->db->join('user', 'user.id = barang.user_id');
    $this->db->join('supplier', 'supplier.id = barang.supplier_id');
    return $this->db->get()->result();
}
    public function Save()
    {
        $data = array(
            'barcode' => htmlspecialchars($this->input->post('barcode'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'harga_jual' => htmlspecialchars($this->input->post('harga_jual'), true),
            'harga_beli' => htmlspecialchars($this->input->post('harga_beli'), true),
            'stok' => htmlspecialchars($this->input->post('stok'), true),
            'kategori_id' => htmlspecialchars($this->input->post('kategori_id'), true),
            'satuan_id' => htmlspecialchars($this->input->post('satuan_id'), true),
            'user_id' => 8,
            // 'user_id' => $this->session->set_userdata('id'),
            'supplier_id' => htmlspecialchars($this->input->post('supplier_id'), true),
        );
        return $this->db->insert($this->_table, $data);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function editData()
    {
        $id = $this->input->post('id');
        $data = array(
            'barcode' => htmlspecialchars($this->input->post('barcode'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'harga_jual' => htmlspecialchars($this->input->post('harga_jual'), true),
            'harga_beli' => htmlspecialchars($this->input->post('harga_beli'), true),
            'stok' => htmlspecialchars($this->input->post('stok'), true),
            'kategori_id' => htmlspecialchars($this->input->post('kategori_id'), true),
            'satuan_id' => htmlspecialchars($this->input->post('satuan_id'), true),
            'user_id' => 8,
            // 'user_id' => $this->session->set_userdata('id'),
            'supplier_id' => htmlspecialchars($this->input->post('supplier_id'), true),
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->_table);
    }
    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data barang berhasil dihapus');
        }
        redirect('barang');
    }
}
