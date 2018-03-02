<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comen extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->model('comen_model');
  }


	public function index( $comen_ID )	{
      $data['blog'] = $this->comen->blog( $blog_ID );
      $this->load->template( 'detail_blog', $data );
	}



  public function post(){
    if(isset($this->session->uid)){
    $this->load->template('postblog');
  }
    else {
      redirect('user/login');
  }

  }

  public function submit()  {
    if(isset($this->session->uid)){
      $this->comen_model->submit();
      // $data['blog'] = $this->blog_model->blog( $blog_ID );
      redirect('/');
  }
    else {
      redirect('user/login');
  }

    $this->comen_model->submit();
    redirect('/');
  }

}
