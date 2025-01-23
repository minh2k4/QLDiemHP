    <?php
    // ----------------------------
    // Cấu hình kết nối cơ sở dữ liệu
    // ----------------------------

    // Thông tin kết nối cơ sở dữ liệu
    define("DB_SERVER", "localhost");  // Địa chỉ máy chủ cơ sở dữ liệu
    define("DB_USERNAME", "root");     // Tên người dùng cơ sở dữ liệu
    define("DB_PASSWORD", "");         // Mật khẩu người dùng cơ sở dữ liệu
    define("DB_DATABASE", "qlDiemHP"); // Tên cơ sở dữ liệu

    // Hàm kết nối cơ sở dữ liệu
    function getConnection() {
        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }
        return $conn;
    }
?>
