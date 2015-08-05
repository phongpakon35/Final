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
      $this->load->model('product');

        $data ['Dataall']=$this->product->findByAll();
        $this->load->view('search',$data);
      
    }

 



}


 ?>

 