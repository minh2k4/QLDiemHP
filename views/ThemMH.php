<?php 
    include("Database.php");
    include("header.php");
?>
<?php 
    $sql = "SELECT * FROM `HocKy` ORDER BY `HocKy`.`ID` ASC";
    $hockys = mysqli_query($conn, $sql);

    if(isset($_POST["them"])) {
        $mamh = $_POST["mamh"];
        $tenmh = $_POST["tenmh"];
        $hock = $_POST["hock"];
        $sotc = $_POST["sotc"];
        $lyt = $_POST["lyt"];
        $thuch = $_POST["thuch"];
        $quat = $_POST["quat"];
        $giuak = $_POST["giuak"];
        $diemt = $_POST["diemt"];
        $diemhp = $_POST["diemhp"];
        $diemc = $_POST["diemc"];
        $he4 = $_POST["he4"];
        $ghic = $_POST["ghic"];

        $sql = "INSERT INTO `MonHoc`(
                    `MaMH`,
                    `TenMonHoc`,
                    `SoTC`,
                    `QuaTrinh`,
                    `GiuaKy`,
                    `DiemThi`,
                    `DiemHP`,
                    `DiemChu`,
                    `He4`,
                    `GhiChu`,
                    `HocKyID`,
                    `LyT_STC`,
                    `ThucH_STC`
                )
                VALUES(
                    '$mamh',
                    '$tenmh',
                    '$sotc',
                    '$quat',
                    '$giuak',
                    '$diemt ',
                    '$diemhp',
                    '$diemc',
                    '$he4',
                    '$ghic',
                    '$hock',
                    '$lyt',
                    '$thuch'
                )";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('Thêm thành công!');
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Môn Học | Quản Lý Điểm Học Phần</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 800px;
            max-width: auto;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        option {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="reset"] {
            padding: 10px 15px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
            width: 100%;
        }
        h1 {
            text-align: center;
        }
        span {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Thêm Môn Học</h1>
    <form name="TMH" method="post">
        <table>
            <tr>
                <th>Mã Môn Học: </th>
                <td><input type="text" name="mamh" id="mamh"></td>
                <th>Tên Môn Học: </th>
                <td><input type="text" name="tenmh" id="tenmh"></td>
                <th>Học kỳ: </th>
                <td>
                    <select name="hock" id="hock">
                        <?php 
                            foreach($hockys as $hocky) {
                        ?>
                            <option value="<?php echo $hocky["ID"] ?>">Học kỳ <?php echo $hocky["HocKy"] ?>, <?php echo $hocky["NamHoc"] ?></optio>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Số  Tín Chỉ: <br> <span id="error-message">*Số tín chỉ chưa đúng</span></th>
                <td><input type="number" name="sotc" id="sotc" min="1" onchange="KiemTraTinChi()"></td>
                <th>Lý thuyết: </th>
                <td><input type="number" name="lyt" id="lyt" min="0" onchange="KiemTraTinChi()"></td>
                <th>Thực hành: </th>
                <td><input type="number" name="thuch" id="thuch" min="0" onchange="KiemTraTinChi()"></td>
            </tr>
            <tr>
                <td colspan="6"><hr></td>
            </tr>
            <tr>
                <th>Quá Trình: </th>
                <td><input type="number" name="quat" id="quat" min="0"  step="0.1" oninput="TinhDiem()"></td>
                <th>Giữa Kỳ: </th>
                <td><input type="number" name="giuak" id="giuak" min="0"  step="0.1" oninput="TinhDiem()"></td>
                <th>Điểm thi: </th>
                <td><input type="number" name="diemt" id="diemt" min="0"  step="0.1" oninput="TinhDiem()"></td>
            </tr>
            <tr>
                <td colspan="6"><hr></td>
            </tr>
            <tr>
                <th>Điểm học phần: </th>
                <td><input type="text" name="diemhp" id="diemhp" readonly></td>
                <th>Điểm chữ: </th>
                <td><input type="text" name="diemc" id="diemc" readonly></td>
                <th>Hệ 4: </th>
                <td><input type="text" name="he4" id="he4" readonly></td>
            </tr>
            <tr>
                <td colspan="6"><hr></td>
            </tr>
            <tr>
                <th>Ghi chú: </th>
                <td><input type="text" name="ghic" id="ghic"></td>
                <td colspan="2">
                    <input type="submit" name="them" id="them" value="Thêm">
                </td>
                <td colspan="2">
                    <input type="reset" name="lamlai" id="lamlai" value="Làm lại">
                </td>
            </tr>
        </table>
    </form>
</body>
<script>
    function TinhDiem() {
        // Lấy giá trị từ các ô nhập liệu
        const quat = parseFloat(document.getElementById("quat").value) || 0;
        const giuak = parseFloat(document.getElementById("giuak").value) || 0;
        const diemt = parseFloat(document.getElementById("diemt").value) || 0;

        // Tính điểm học phần (giả sử trọng số là 30% quá trình, 30% giữa kỳ, 40% thi)
        const diemhp = Math.round(((quat * 0.1 + giuak * 0.4 + diemt * 0.5)+ 0.0001) * 10) / 10;

        // Xác định điểm chữ
        let diemc = "";
        if (diemhp >= 8.5) diemc = "A";
        else if (diemhp >= 7.0) diemc = "B";
        else if (diemhp >= 5.5) diemc = "C";
        else if (diemhp >= 4.0) diemc = "D";
        else diemc = "F";

        // Xác định hệ 4
        let he4 = 0;
        switch (diemc) {
            case "A":
                he4 = 4.0;
                break;
            case "B":
                he4 = 3.0;
                break;
            case "C":
                he4 = 2.0;
                break;
            case "D":
                he4 = 1.0;
                break;
            case "F":
                he4 = 0.0;
                break;
        }

        // Xác định ghi chú
        let ghic = "";
        if (diemhp >= 8.5) {
            ghic = "Xuất sắc";
        } else if (diemhp >= 7.0) {
            ghic = "Tốt";
        } else if (diemhp >= 5.5) {
            ghic = "Trung bình";
        } else if (diemhp >= 4.0) {
            ghic = "Cần cố gắng";
        } else {
            ghic = "Không đạt";
        }

        // Gán giá trị tính được vào các ô hiển thị
        document.getElementById("diemhp").value = diemhp;
        document.getElementById("diemc").value = diemc;
        document.getElementById("he4").value = he4;
        document.getElementById("ghic").value = ghic;
    }

    function KiemTraTinChi() {
        // Lấy giá trị từ các trường nhập liệu
        var sotc = parseFloat(document.getElementById('sotc').value);
        var lyt = parseFloat(document.getElementById('lyt').value);
        var thuch = parseFloat(document.getElementById('thuch').value);

        // Kiểm tra nếu tất cả các trường đã được nhập
        if (!isNaN(sotc) && !isNaN(lyt) && !isNaN(thuch)) {
            // Kiểm tra tổng tín chỉ lý thuyết và thực hành có bằng số tín chỉ nhập hay không
            if (lyt + thuch !== sotc) {
                // Hiển thị thông báo lỗi nếu không khớp
                document.getElementById('error-message').style.display = 'inline';
            } else {
                // Ẩn thông báo lỗi nếu khớp
                document.getElementById('error-message').style.display = 'none';
            }
        }
    }
</script>
</html>
<?php 
    include("footer.php");
?>