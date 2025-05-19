# Workflow

### Description

Đây là workflow để tạo các file en.php và zh.php cho các themes

### Steps

1. Hỏi người dùng muốn áp dụng cho theme nào trong các theme trong folder themes
2. Tạo file en.php và zh.php cho theme đó từ file index.php và đặt ở vị trí bên cạnh file index.php (copy toàn bộ code (html, js, css, php, ...) từ file index.php và dán vào file en.php và zh.php, không chỉnh sửa gì cả)
3. Cho AI agent khởi động task để chỉnh sửa các text hiển thị trong file en.php vừa tạo ở trên thành tiếng Anh (chú ý tạo task cho AI agent vì file khá lớn để tránh tình trạng AI agent không làm được)
4. Cho AI agent khởi động task để chỉnh sửa các text hiển thị trong file zh.php vừa tạo ở trên thành tiếng Trung (chú ý tạo task cho AI agent vì file khá lớn để tránh tình trạng AI agent không làm được)
5. Lặp lại cho đến khi các themes đã được xử lý xong

### Notes
- Các file en.php và zh.php được tạo ra sẽ được đặt ở vị trí bên cạnh file index.php
- Các file en.php và zh.php được tạo ra phải chạy được, do đó không được thay đổi hay gọt bớt code của file index.php chỉ cần thay đổi text hiển thị
- Không được lười biếng kiểu //exitings code, đề nghi chuyển toàn bộ file index.php sang en.php và zh.php
