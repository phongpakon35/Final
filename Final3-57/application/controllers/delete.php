<?php
	defined ('BASEPATH') OR exit('No direct script access allowed');    
	class Delete extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
		}
		
		public function checkdelete()
		{
		if(isset($_COOKIE['username'])&& isset($_COOKIE['password']))//isset คือการตรวจสอบค่าว่ามียุมัย
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

		
			$this->form_validation->set_rules('productCode', 'รหัสสินค้า', 'required|min_length[1]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			
			
			
			
			if ($this->form_validation->run() == FALSE)
                {
                		$data ['error']='';
                        $this->load->view('delete',$data);


                }
                else
                {
                				$this->load->model('product');        
		                        $this->product->setProductCode($this->input->post('productCode'));
		                        $this->product->delete();
 								$this->load->view('delete');
 								echo "<script language='javascript'>alert('ลบหนังสือเรียบร้อยแล้ว!');</script>";
                } 

 			

			}
			

	}
?>
