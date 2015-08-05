<?php                																		

class Product extends CI_model        
{
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

		
		var $id; //
		var $productCode; //
		var $productName; //
		var $productSell; //
		var $productSellMember; //
		var $warranty; //






	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
	public function setProductCode($productCode)
	{
		$this->productCode = $productCode;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

	public function setProductName($productName)
	{
		$this->productName = $productName;
	}

	public function getProductName()
	{
		return $this->productName;
	}
	public function setProductSell($productSell)
	{
		$this->productSell = $productSell;
	}

	public function getProductSell()
	{
		return $this->productSell;
	}
	public function setProductSellMember($productSellMember)
	{
		$this->productSellMember = $productSellMember;
	}

	public function getProductSellMember()
	{
		return $this->productSellMember;
	}
	public function setWarranty($warranty)
	{
		$this->warranty = $warranty;
	}

	public function getWarranty()
	{
		return $this->warranty;
	}




	

###################################### add ######################################	 

	public function add()
	{
		$array = array
		(
			
			'productCode'  				=> 	$this->getProductCode(),
			'productName' 				=> 	$this->getProductName(),
			'productSell' 				=> 	$this->getProductSell(),
			'productSellMember' 		=> 	$this->getProductSellMember(),
			'warranty' 					=> 	$this->getWarranty()
				
		);

		$this->db->insert('products', $array);
		return $this->db->insert_id();
	}

###################################### add ######################################	 	

###################################### delete ######################################
	public function delete()
	{
			$array=array(
				'productCode' 		=> 	$this->getProductCode()

				);
		$this->db->delete('products',$array);
	}
	
###################################### delete ######################################

###################################### findByName ######################################	 
	 public function findByName($name)
	{
		$query=$this->db->query
			('
				SELECT bookname, ISBN, author
		
				FROM products  WHERE bookname LIKE "%'. $name .'%" OR
        				         ISBN LIKE "%'. $name .'%" OR
        				         author LIKE "%'. $name .'%" ORDER BY bookname
			');

		return $query;
	}
###################################### findByName ######################################	 

}
?>