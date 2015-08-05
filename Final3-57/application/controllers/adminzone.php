<?php
  defined ('BASEPATH') OR exit('No direct script access allowed');                                  
  class AdminZone  extends CI_controller
  {


    public function index ()
    {
    	$this->load->helper('url');

        if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
        {


            $this->load->model('admin');
            $this->admin->setUsername($_COOKIE['username']);
            $this->admin->setPassword($_COOKIE['password']);
            
            if(!$this->admin->checkLogin())
            {
                
                redirect(base_url('index.php/login'));

            }
        } 
            
            else
            {
            	redirect(base_url('index.php/login'));

            }


    	
    	$this->load->view('adminzone');
        


    }
    
  }
?>