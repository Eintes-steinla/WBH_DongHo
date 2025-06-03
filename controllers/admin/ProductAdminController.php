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

	function action()
	{
		$actionName = $id = '';
		if (isset($_POST['id'])) {
			$id = $_POST['id'];
		}
		require_once 'vendor/Model.php';
		require_once 'models/admin/productModel.php';
		$md = new productModel;
		switch ($actionName) {
			case 'del':
				$md->delete('sanpham', 'masp = ' . $id);
				break;
			default:
				echo "Error!";
				break;
		}
	}
}
