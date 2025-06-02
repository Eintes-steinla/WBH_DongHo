# 9XWatch - Website Bán Đồng Hồ

Website bán đồng hồ xây dựng bằng PHP theo mô hình MVC (Model-View-Controller).

## Công nghệ sử dụng

- **Backend:** PHP (MVC Pattern)
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Database:** MySQL
- **Admin Template:** AdminLTE
- **Thư viện bổ sung:** jQuery, Ajax

## Cấu trúc thư mục

```
WBH_MVC/
├── config/           # Cấu hình database và các hằng số
├── controllers/      # Xử lý logic của ứng dụng
│   ├── admin/       # Controllers cho trang quản trị
│   ├── default/     # Controllers cho trang chủ và sản phẩm
│   └── users/       # Controllers xử lý người dùng
├── models/          # Tương tác với database
├── views/           # Giao diện người dùng
│   ├── admin/       # Giao diện trang quản trị
│   ├── default/     # Giao diện trang chủ và sản phẩm
│   ├── layouts/     # Layout chung
│   └── users/       # Giao diện người dùng
├── public/          # Assets (CSS, JS, Images)
└── vendor/         # Core files của framework
```

## Tính năng chính

### 1. Người dùng
- Đăng ký, đăng nhập tài khoản
- Lưu phiên đăng nhập (Remember Login)
- Xem danh sách và chi tiết sản phẩm
- Tìm kiếm và lọc sản phẩm theo danh mục
- Giỏ hàng:
  - Thêm/xóa sản phẩm
  - Tự động đồng bộ khi đăng nhập
  - Lưu giỏ hàng theo user
- Đặt hàng và xem lịch sử đơn hàng

### 2. Quản trị viên
- Dashboard thống kê tổng quan
- Quản lý sản phẩm:
  - Thêm/sửa/xóa sản phẩm
  - Upload hình ảnh sản phẩm
  - Phân loại sản phẩm theo danh mục
- Quản lý đơn hàng:
  - Xem danh sách đơn hàng
  - Cập nhật trạng thái đơn hàng
  - Xem chi tiết đơn hàng
- Quản lý thành viên:
  - Thêm/sửa/xóa thành viên
  - Phân quyền người dùng
- Quản lý danh mục sản phẩm
- Thống kê và báo cáo:
  - Thống kê doanh thu
  - Phân tích người dùng
  - Báo cáo bán hàng

## Cài đặt và chạy

1. Clone repository về máy
2. Import file `qlbh.sql` vào MySQL
3. Cấu hình database trong `config/config.php`
4. Truy cập website qua đường dẫn: `http://localhost/WBH_MVC`
5. Tài khoản admin mặc định:
   - Username: admin
   - Password: admin123

## Screenshots

[Screenshots sẽ được thêm vào sau]

## Tác giả

- Phát triển bởi: [Tên tác giả]
- Email: [Email liên hệ]
- Website: [Website cá nhân nếu có]

## Giấy phép

Dự án này được phân phối dưới giấy phép MIT License.
	
