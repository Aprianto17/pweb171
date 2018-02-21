<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->model('blog_model');
  }


	public function index( $blog_ID )	{

    $blog = $this->input->post('blog_ID');
    $this->session->bid = $blog['blog_ID'];

    $data['blog'] = $this->blog_model->blog( $blog_ID );
    $this->load->template( 'baca_blog', $data );

	}

  public function subcom()  {
    $this->blog_model->subcom();
    redirect('detail_blog');
  }



  public function post(){
    $this->load->template('postblog');

  }


  public function submit()  {

    if(isset($this->session->uid)){
      $this->blog_model->submit();
      redirect('/');
  }
    else {
      redirect('user/login');
  }

    $this->blog_model->submit();
    redirect('/');
  }




 public function delete($blog_ID){
   $this->blog_model->delete($blog_ID);
   redirect('/');
 }

 public function edit($blog_ID){
   $data = $this->blog_model->blog($blog_ID);
   $this->load->template('editblog',$data);
 }

 public function subedit($blog_ID){
   $data = $this->blog_model->edit($blog_ID);
   redirect('/');
 }



 public function search(){
   // $search = $this->input->post('search');
   // $this->session->sea = $search;
   $this->load->template('search');
   // $this->load->template('editblog',$data);
 }







}
