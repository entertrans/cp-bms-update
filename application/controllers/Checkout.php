<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $count = count($this->cart->contents());
        if (empty($count)) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['cart'] = $this->cart->contents();

        $this->load->view('mockup/layout/core/header');
        $this->load->view('mockup/layout/core/css');
        $this->load->view('mockup/layout/core/topbar');
        $this->load->view('checkout', $data);
        $this->load->view('mockup/layout/core/footer');
    }

    function hapus_cart()
    { //fungsi untuk menghapus item cart
        $data = array(
            'rowid' => input('row_id'),
            'qty' => 0,
        );
        $this->cart->update($data);
        echo json_encode(['status' => true]);
        exit;
    }

    public function send()
    {
        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'bms.bintangmuarasejati@gmail.com';
        $config['smtp_pass'] = 'www.bintangmuarasejati.com';
        $config['charset'] = 'iso-8859-1';
        $config['smtp_port'] = 465;
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";

        $data = array(
            'name' => input('nama'),
            'email' => input('email'),
            'alamat' => input('alamat'),
            'no_telp' => input('no_telp'),
            'payment' => input('paymentMethod'),
            'an' => input('cc-name'),
            'rek' => input('cc-number'),
            'invoice' => date('YmdHis'),
            'date' => date('Y-m-d H:i:s')
        );

        $this->load->library('email', $config);

        // start db transaction
        $this->db->trans_begin();
        $dt_pelanggan = array(
            'nama' => input('nama'),
            'email' => input('email'),
            'no_telp' => input('no_telp'),
            'alamat' => input('alamat'),
            'payment' => input('paymentMethod'),
            'invoice' => date('YmdHis') . uniqid()
        );
        $this->db->insert('tbl_pelanggan', $dt_pelanggan);

        $cart = $this->cart->contents();
        $dt_order = array();
        foreach ($cart as $item) {
            $order = array(
                'invoice' => $dt_pelanggan['invoice'],
                'rowid' => $item['rowid'],
                'id_prod' => $item['id'],
                'nm_prod' => $item['name'],
                'qty' => $item['qty'],
                'price' => $item['subtotal'],
                'option' => $item['options']['Size'],
                'ip_order' => $this->input->ip_address(),
                'tgl_order' => date('Y-m-d H:i:s'),
                'status_order' => 'Pending'
            );
            array_push($dt_order, $order);
        }

        $this->db->insert_batch('tbl_order', $dt_order);

        // check db transaction status
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
        
        // $this->load->view('invoice', $data);
        // return;
        
        $this->email->from('no-reply@bintangmuarasejati.com', 'Konfirmasi Pembelian');
        $this->email->to($data['email']);
        $this->email->subject('Invoice #' . $data['invoice']);
        $this->email->message($this->load->view('invoice', $data, true));
        
        $this->email->send();
        $this->cart->destroy();
    }
}
