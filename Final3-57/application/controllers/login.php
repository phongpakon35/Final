<?php
  defined ('BASEPATH') OR exit('No direct script access allowed');  
  class Login  extends CI_controller                                       
  {

    public function Logout ()
    {

      $this->load->helper('url');
        setcookie('username','',time()-3600,'/');
        setcookie('password','',time()-3600,'/');
        redirect(base_url('index.php'));

    }

    public function index ()
    {
        $this->load->helper('url');

        if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
        {

            $this->load->model('admin');
            $this->admin->setUsername($_COOKIE['username']);
            $this->admin->setPassword($_COOKIE['password']);
            
            if($this->admin->checkLogin())
            {
                
                redirect(base_url('index.php/adminzone'));
            }

        }

    	if ($this->input->post())
    		
    	{
    		$this->load->model('admin');
    		$this->admin->setUsername($this->input->post('username'));
    		$this->admin->setPassword($this->input->post('password'));
    		
    		if($this->admin->checkLogin())
    		{
    			//ถ้าผ่าน
    			//echo 'Pass';
    			setcookie('username',$this->input->post('username'),(time()+3600),'/');
    			setcookie('password',$this->input->post('password'),(time()+3600),'/');
                redirect(base_url('index.php/Update/checkupdate'));
    		}
    		else
    		{
    			//ถ้าไม่ผ่าน
    			
                echo "<script language='javascript'>alert('กรุณากรอกข้อมูลให้ครบถ้วนถูกต้อง!');</script>";

    		}
    		

    	}
			
    		$this->load->view('login');

    }
   }
?>