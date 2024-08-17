<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'third_party/fpdf/fpdf.php');
class Kustomer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Kustomer_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title'   => 'View Data Kustomer',
            'kustomer'    => $this->Kustomer_model->getAll(),
            'content' => 'kustomer/index'
        );
        $this->load->view('template/main', $data);
    }
    public function add()
    {
        $data = array(
            'title'   => 'Tambah Data Kustomer',
            'content' => 'kustomer/add_form'
        );
        $this->load->view('template/main', $data);
    }
    public function save()
    {
        $this->Kustomer_model->Save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data kustomer berhasil disimpan');
        }
        redirect('kustomer');
    }
    public function getedit($id)
    {
        $data = array(
            'title'   => 'Update Data Kustomer',
            'kustomer'    => $this->Kustomer_model->getById($id),
            'content' => 'kustomer/edit_form'
        );
        $this->load->view('template/main', $data);
    }
    public function edit()
    {
        $this->Kustomer_model->editData();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data kustomer berhasil diupdate');
        }
        redirect('kustomer');
    }

    public function delete($id)
    {
        $this->Kustomer_model->delete($id);
        redirect('kustomer');
    }

    public function kustomerlap()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->Cell(0, 5, 'LAPORAN DATA KUSTOMER', 0, 1, 'C');
        $pdf->Cell(30, 8, '', 0, 1);
        $pdf->SetFont('Times', 'B', 9);
        $pdf->Cell(7, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(37, 6, 'NIK', 1, 0, 'C');
        $pdf->Cell(37, 6, 'NAMA CUSTOMER', 1, 0, 'C');
        $pdf->Cell(30, 6, 'TELP', 1, 0, 'C');
        $pdf->Cell(45, 6, 'ALAMAT', 1, 1, 'C');
        $i = 1;
        $data = $this->db->get('kustomer')->result_array();
        foreach ($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(7, 6, $i++, 1, 0);
            $pdf->Cell(37, 6, $d['nik'], 1, 0);
            $pdf->Cell(37, 6, $d['name'], 1, 0);
            $pdf->Cell(30, 6, $d['telp'], 1, 0);
            $pdf->Cell(45, 6, $d['alamat'], 1, 1);
        }
        $pdf->SetFont('Times', '', 10);
        $pdf->Output('laporan_customer.pdf', 'I');
    }
}
