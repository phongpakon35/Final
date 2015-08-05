<?php
	defined ('BASEPATH') OR exit('No direct script access allowed');    
	class Edit extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
		}
		
		public function checkedit()
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

		
			$this->form_validation->set_rules('id', 'รหัส ID', 'required|min_length[1]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			
			
			
			if ($this->form_validation->run() == FALSE)
                {
                		$data ['error']='';
                        $this->load->view('edit',$data);


                }
                else
                {
                				$this->load->model('product');
                				$this->product->setId($this->input->post('id'));
		                        $this->product->setProductCode($this->input->post('productCode'));
		                        $this->product->setProductName($this->input->post('productName'));
		                        $this->product->setProductSell($this->input->post('productSell'));
		                        $this->product->setProductSellMember($this->input->post('productSellMember'));
		                        $this->product->setWarranty($this->input->post('warranty'));
		                        $this->product->update();
 								$this->load->view('edit');
 								echo "<script language='javascript'>alert('แก้ไขสินค้าเรียบร้อยแล้ว!');</script>";
                } 

 			

			}
			

	}
?>
