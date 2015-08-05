<?php
	defined ('BASEPATH') OR exit('No direct script access allowed');    
	class Update extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
		}
		
		public function checkupdate()
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
			$this->form_validation->set_rules('productName', 'ชื่อสินค้า', 'required|min_length[3]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
					
				)
			);
			$this->form_validation->set_rules('productSell', 'ราคาขาย', 'required|min_length[1]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('productSellMember', 'ราคาสมาชิก', 'required|min_length[1]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('warranty', 'ประกัน', 'required|min_length[1]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			
			
			
			if ($this->form_validation->run() == FALSE)
                {
                		$data ['error']='';
                        $this->load->view('adminzone',$data);


                }
                else
                {
                				$this->load->model('product');
		                        $this->product->setProductCode($this->input->post('productCode'));
		                        $this->product->setProductName($this->input->post('productName'));
		                        $this->product->setProductSell($this->input->post('productSell'));
		                        $this->product->setProductSellMember($this->input->post('productSellMember'));
		                        $this->product->setWarranty($this->input->post('warranty'));
		                        $this->product->add();
 								$this->load->view('adminzone');
 								echo "<script language='javascript'>alert('บันทึกสินค้าเรียบร้อยแล้ว!');</script>";
                } 

 			

			}

	}
?>
