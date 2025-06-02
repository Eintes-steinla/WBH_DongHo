<?php

/**
 * 
 */
class ProductAdminController extends Controller
{

	function __construct()
	{
		$this->folder = "admin";
		if (!isset($_SESSION['admin'])) {
			header("Location: " . INDEX_URL . "indexadmin");
		}
	}
	function index()
	{
		require_once 'vendor/Model.php';
		require_once 'models/admin/productModel.php';
		$md = new productModel;
		$data = $md->getAllPrds();
		$this->render('product', $data, 'SẢN PHẨM', 'admin');
	}
}
