<?php

class productModel extends Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getAllPrds()
	{
		$prd = $this->select('*', 'sanpham sp, danhmucsp dm', 'sp.madm = dm.madm', 'ORDER BY sp.ngay_nhap DESC');
		return $prd;
	}
	function deleteProduct($productId)
	{
		// Prepare the SQL statement to delete the product
		$sql = "DELETE FROM sanpham WHERE masp = :masp";
		$stmt = $this->conn->prepare($sql);

		// Bind the product ID parameter
		$stmt->bindParam(':masp', $productId, PDO::PARAM_STR);

		// Execute the statement and return the result
		return $stmt->execute();
	}
}
