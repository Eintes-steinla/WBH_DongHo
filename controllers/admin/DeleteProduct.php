<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $productId = $_GET['id'];

    try {
        $conn = new PDO("mysql:host=localhost;dbname=qlbh;charset=UTF8", "root", "123456");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Đặt múi giờ sau khi kết nối
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return;
    }

    $sql = "DELETE FROM sanpham WHERE masp = :masp";
    $stmt = $conn->prepare($sql);
    try {
        if ($stmt->execute([':masp' => $productId])) {
            echo "Xoá sản phẩm thành công.";
            header("Location: /WBH_MVC/productadmin");
        } else {
            echo "Xoá thất bại.";
        }
    } catch (PDOException $e) {
        echo "Lỗi " . $e->getCode() . ": " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}
