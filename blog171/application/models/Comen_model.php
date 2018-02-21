<?php

class Comen_model extends CI_Model {

  public function __construct() {
      parent::__construct();
  }
  /**
  * menyimpan data blog baru
  */
  public function submit(){

    // membuat blog_ID otomatis
    // menggunakan UNIX Timestamp --> date('U')
    $nick = substr( $this->input->post('nama'), 0 , 3 ); // 3 huruf pertama dari judul blog
    $comen_id = "C-" . $nick . date('U') . date('B');

    // menyiapkan data
    $data = [
              'comen_ID' => $comen_id,
              'comentar' => $this->input->post('comentar'),
              'blog_ID' => $this->session->bid,
              'user_ID' => $this->session->uid,
              'nama' => $this->input->post('nama'),
              'tanggal' => date('Y-m-d H:i:s')
            ];

    // simpan ke database dalam tabel 'blogs'
    $this->db->insert( 'comens', $data );
  }

}
