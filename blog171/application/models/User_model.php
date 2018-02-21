<?php

class User_model extends CI_Model {

  public function __construct() {
      parent::__construct();
  }


  /**   * Menambahkan user baru   */
  public function register(){
    // membuat user_ID otomatis
    // menggunakan UNIX Timestamp --> date('U')
    $nick = substr( $this->input->post('nama'), 0 , 3 );
    // 3 huruf pertama dari nama user
    $user_id = "U-".$nick.date('U');

    // menyiapkan data
    $data = [
            'user_ID' => $user_id,
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => md5( $this->input->post('pass1') ),
            'tgl_registrasi' => date('Y-m-d H:i:s')
          ];

    // simpan ke database dalam tabel 'users'
    $this->db->insert( 'users', $data );
  }

  public function user( $email ){

    $sql = "SELECT * FROM users WHERE email='".$email."'";

    $query = $this->db->query( $sql );

    if( !empty( $query->row_array() ) ) {
      return $query->row_array();
    }

    return false;
  }

  public function userbyid($user_ID){
    $sql = "SELECT blogs.tanggal,blogs.judul,blogs.blog_ID FROM users
            INNER JOIN blogs USING (user_ID)
            WHERE users.user_ID = '".$user_ID."'
            ORDER BY tanggal DESC";
    $query = $this->db->query( $sql );
    return $query->result_array();
  }

  public function userid($user_ID){
    $sql = "SELECT * FROM users WHERE user_ID= '".$user_ID."'";

    $query = $this->db->query( $sql );
    return $query->row_array();

}
}
