<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
  
  function __construct()
  {
  parent::__construct();
  $this->load->helper('url');
  }

  public function index()
	{

    if($this->input->post('name'))
    {
      $this->load->model('Book');
      $data['showbook'] =$this->Book->findByName($this->input->post('name'));
      $this->load->view('Search',$data);
    }
    else
    {
        
        $data['showbook']='';
        $this->load->view('Search',$data);
    }

	}

  public function Searchbook()
    {
      $data['showbook']='';
       $this->load->view('Search',$data);

    }




}


 ?>

 