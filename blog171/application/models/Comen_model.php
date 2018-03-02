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
    $bid = $this->input->post('blog_ID');
    $nick = substr( $this->input->post('nama'), 0 , 3 ); // 3 huruf pertama dari judul blog
    $comen_id = "C-" . $nick . date('U') . date('B');

    // menyiapkan data
    $data = [
              'comen_ID' => $comen_id,
              'comentar' => $this->input->post('comentar'),
              'blog_ID' => $bid,
              'user_ID' => $this->session->uid,
              'tanggal' => date('Y-m-d H:i:s')
            ];

    // simpan ke database dalam tabel 'blogs'
    $this->db->insert( 'comens', $data );
  }

  public function comen( $bid ){

    $sql = "SELECT * FROM comens WHERE blog_ID='".$bid."'";

    $query = $this->db->query( $sql );

    if( !empty( $query->row_array() ) ) {
      return $query->row_array();
    }

    return false;
  }

}
