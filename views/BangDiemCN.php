<?php
$conn = getConnection();

$sql = "SELECT * FROM `HocKy` ORDER BY `ID` DESC";
$hockys_loc = mysqli_query($conn, $sql);

$hocky = $_POST["hocky"] ?? 0;

$sql = ($hocky == "0")
    ? "SELECT DISTINCT HK.ID, HK.HocKy, HK.NamHoc
           FROM HocKy AS HK
           JOIN MonHoc AS MH ON HK.ID = MH.HocKyID
           ORDER BY HK.ID ASC;"
    : "SELECT DISTINCT HK.ID, HK.HocKy, HK.NamHoc
           FROM HocKy AS HK
           JOIN MonHoc AS MH ON HK.ID = MH.HocKyID
           WHERE HK.ID = $hocky;";

$hockys_diem = mysqli_query($conn, $sql);
?>

<title>Quản Lý Điểm Học Phần</title>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Bảng điểm cá nhân</h1>
        <ol class="breadcrumb">
            <li>
                <a href="">
                    <i class="fa fa-home">
                    </i>
                    Trang chính
                </a>
            </li>
            <li class="active">
                Bảng điểm cá nhân
            </li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <form action="" method="post">
                <div class="form-group col-md-4">
                    <select class="form-control" name="hocky" id="hocky">
                        <option value="0">(Tất cả học kỳ)</option>
                        <?php
                        foreach ($hockys_loc as $hocky) {
                        ?>
                            <option value="<?php echo $hocky["ID"] ?>"><?php echo $hocky["ID"] ?> - Học kỳ <?php echo $hocky["HocKy"] ?>, <?php echo $hocky["NamHoc"] ?></option>

                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <button class="btn btn-success" id="btnViewData">
                        <i class="fa fa-arrow-right"></i>
                        Xem điểm
                    </button>
                </div>
            </form>
        </div>
        <div class="box box-solid" id="ViewDetail">
            <div class="box-body no-padding">
                <div class="hidden-sm hidden-xs">
                    <?php
                    foreach ($hockys_diem as $hocky) {
                    ?>
                        <div class="col-md-12 no-padding">
                            <div class="box box-success" style="margin-bottom:0px">
                                <div class="box-header with-border no-margin">
                                    <h3 class="box-title text-blue">Học kỳ <?php echo $hocky["HocKy"] ?>, <?php echo $hocky["NamHoc"] ?></h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool toggle-btn" data-widget="collapse" data-target="semester-<?php echo $hocky["ID"]; ?>">
                                            <i class="fa fa-minus">

                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-body np-padding subject-container" style id="semester-<?php echo $hocky["ID"]; ?>">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>TT</th>
                                                <th>Mã MH</th>
                                                <th>Tên môn học</th>
                                                <th>Số TC</th>
                                                <th>Quá trình</th>
                                                <th>Giữa kỳ</th>
                                                <th>Điểm Thi</th>
                                                <th>Điểm HP</th>
                                                <th>Điểm chữ</th>
                                                <th>Hệ 4</th>
                                                <th>Ghi chú</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM `MonHoc` WHERE `HocKyID` = " . $hocky["ID"];
                                            $monhocs = mysqli_query($conn, $sql);

                                            foreach ($monhocs as $monhoc) {
                                            ?>
                                                <tr class="subject-row" data-id="<?php echo $monhoc["MaMH"]; ?>">
                                                    <td><?php echo $monhoc["TT"]; ?></td>
                                                    <td><?php echo $monhoc["MaMH"]; ?></td>
                                                    <td><?php echo $monhoc["TenMonHoc"]; ?></td>
                                                    <td><?php echo $monhoc["SoTC"]; ?> (<?php echo $monhoc["LyT_STC"]; ?> : <?php echo $monhoc["ThucH_STC"]; ?>)</td>
                                                    <td><?php echo $monhoc["QuaTrinh"]; ?></td>
                                                    <td><?php echo $monhoc["GiuaKy"]; ?></td>
                                                    <td><?php echo $monhoc["DiemThi"]; ?></td>
                                                    <td><?php echo $monhoc["DiemHP"]; ?></td>
                                                    <td><?php echo $monhoc["DiemChu"]; ?></td>
                                                    <td><?php echo $monhoc["He4"]; ?></td>
                                                    <td><?php echo $monhoc["GhiChu"]; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="box-footer" style>

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="hidden-lg hidden-md">

                </div>
            </div>
        </div>
    </section>
</div>
<?php
mysqli_close($conn);
?>