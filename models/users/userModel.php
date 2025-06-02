<?php

/**
 * 

 */
class userModel extends Model
{

	function __construct()
	{
		parent::__construct();
	}
	function getUserByUsername($username)
	{
		$result = array();
		$sql = "SELECT * FROM thanhvien WHERE tentaikhoan = '" . $username . "'";
		if ($this->conn->query($sql)->rowCount() == 0) {
			return false;
		} else {
			foreach ($this->conn->query($sql) as $row) {
				$result = $row;
			}
			return $result;
		}
	}
	function addUser($name, $un, $pw, $addr, $phone, $email)
	{
		// Validate input data
		$name = $this->sanitizeInput($name, 100);
		$un = $this->sanitizeInput($un, 100);
		$pw = $this->sanitizeInput($pw, 100);
		$addr = $this->sanitizeInput($addr, 255);
		$phone = $this->sanitizeInput($phone, 12); // Giới hạn số điện thoại 12 ký tự
		$email = $this->sanitizeInput($email, 100);

		$now = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
		$now = $now->format('Y-m-d H:i:s');

		try {
			$sql = "INSERT INTO thanhvien (ten, tentaikhoan, matkhau, diachi, sodt, email, date, quyen) 
					VALUES (:name, :username, :password, :address, :phone, :email, :date, '0')";

			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':username', $un);
			$stmt->bindParam(':password', $pw);
			$stmt->bindParam(':address', $addr);
			$stmt->bindParam(':phone', $phone);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':date', $now);

			return $stmt->execute();
		} catch (PDOException $e) {
			error_log($e->getMessage());
			return false;
		}
	}
	private function sanitizeInput($input, $maxLength)
	{
		if (is_string($input)) {
			$input = trim($input);
			if (strlen($input) > $maxLength) {
				$input = substr($input, 0, $maxLength);
			}
			return $input;
		}
		return '';
	}
}
