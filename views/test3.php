
<!DOCTYPE html>
<html>
<head>
    <title>L&#x1ECB;ch d&#x1EA1;y trong ng&#xE0;y - VLUTE ems</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="VLUTE-EMS - Quản lý thông tin đào tạo trường Đại học Sư phạm Kỹ thuật Vĩnh Long">
    <meta name="keywords" content="VLUTE, VLUTE-EMS, Phòng đào tạo, Thời khóa biểu, lịch thi, điểm, học phí, duyphucit">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135071472-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-135071472-1');
    </script>
    
    <link rel="stylesheet" href="/lib/select2/dist/css/select2.min.css" />
    <link rel="stylesheet" href="/lib/datatables.net-bs/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/lib/Ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" href="/lib/admin-lte/dist/css/AdminLTE.min.css" />
    <link rel="stylesheet" href="/lib/admin-lte/dist/css/skins/_all-skins.min.css" />
    <link rel="stylesheet" href="/lib/jquery-ui/themes/base/jquery-ui.min.css" />
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="/css/site.min.css?v=tsUIeVdN_j9NnZf3FkNXWZdwVqYZybQ2Globh60qobQ" />
    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/jquery-ui/jquery-ui.min.js"></script>
    
    <link rel="manifest" href="/manifest.json">
</head>
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a class="logo" href="/">
                <span class="logo-mini"><img src="/images/vlute_icon36.png" /></span>
                <span class="logo-lg"><img src="/images/vlute_icon36.png" /><span style="font-weight:700">&nbsp;&nbsp;VLUTE</span><span style="color:#fbff00">&nbsp;ems&nbsp;</span></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu" id="navUserMenu">
                    <ul class="nav navbar-nav">                        
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree" id="mainSideBarContent">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i> <span>Trang chính</span>
                        </a>
                    </li>
                    <li class='active treeview menu-open' id='sideBarSearch'>
                        <a href='#'><i class='fa fa-search'></i> <span>Tra cứu thông tin</span><span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span></a>
                        <ul class='treeview-menu'>
                            <li><a href='/vTKBSinhVien'><i class='fa fa-circle-o'></i> TKB Sinh viên</a></li>
                            <li><a href='/vHocPhiHKSV'><i class='fa fa-circle-o'></i> Học phí trong học kỳ</a></li>
                            <li><a href='/vTKBGiangVien'><i class='fa fa-circle-o'></i> TKB Giảng viên</a></li>                            
                            <li><a href='/TKBLopHP'><i class='fa fa-circle-o'></i> TKB Lớp học phần</a></li>
                            <li><a href='/vTKBLopCN'><i class='fa fa-circle-o'></i> TKB Lớp chuyên ngành</a></li>
                            <li><a href='/vTKBDonVi'><i class='fa fa-circle-o'></i> TKB Đơn vị</a></li>
                            <li><a href='/vTKBPhongHoc'><i class='fa fa-circle-o'></i> Lịch sử dụng phòng học</a></li>
                            <li><a href='/vTKBNgay'><i class='fa fa-circle-o'></i> Lịch giảng dạy trong ngày</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
    <h1>
        Lịch giảng dạy trong ngày
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i> Trang chính</a></li>
        <li><a href="#">Tra cứu thông tin</a></li>
        <li class="active">Lịch giảng dạy trong ngày</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <select id="lstDV" class="form-control select2" multiple="multiple" data-placeholder="Đơn vị" style="width: 100%;"></select>
            </div>
            <div class="form-group">
                <select id="lstNgay" class="form-control select2" multiple="multiple" data-placeholder="Ngày học" style="width: 100%;">
                    <option value="0">(Tất cả ngày học)</option>
                    <option value="1">Ngoài giờ học</option>
                    <option value="2">Thứ Hai</option>
                    <option value="3">Thứ Ba</option>
                    <option value="4">Thứ Tư</option>
                    <option value="5">Thứ Năm</option>
                    <option value="6">Thứ Sáu</option>
                    <option value="7">Thứ Bảy</option>
                    <option value="8">Chủ Nhật</option>
                </select>
            </div>
            <div class="form-group">
                <select id="lstTiet" class="form-control select2" multiple="multiple" data-placeholder="Tiết học" style="width: 100%;">
                    <option value="0">(Tất cả tiết học)</option>
                    <option value="1">Tiết 1</option>
                    <option value="2">Tiết 2</option>
                    <option value="3">Tiết 3</option>
                    <option value="4">Tiết 4</option>
                    <option value="5">Tiết 5</option>
                    <option value="6">Tiết 6</option>
                    <option value="7">Tiết 7</option>
                    <option value="8">Tiết 8</option>
                    <option value="9">Tiết 9</option>
                    <option value="10">Tiết 10</option>
                    <option value="11">Tiết 11</option>
                    <option value="12">Tiết 12</option>
                    <option value="13">Tiết 13</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <select class="form-control" id="hocky" name="hocky"></select>
            </div>
            <div class="form-group">
                <select id="lstTuan" class="form-control select2" multiple="multiple" data-placeholder="Tuần học" style="width: 100%;"></select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <button class="btn btn-success btn-sm" id="btnSearch"><i class="fa fa-search"></i> Tìm kiếm</button>
            </div>
        </div>
    </div>
    <input type="hidden" id="mamon" name="mamon" value="" />
    <div class="box box-solid" id="PageDetail">
        <!-- /.box-body -->
    </div>
</section>

        </div>
        <footer class="main-footer">
            <div class="pull-right text-sm">                
                <strong>&copy; 2017 <a href="https://duyphucit.wordpress.com" target="_blank">Nguyễn Duy Phúc</a></strong><br />
                Email: duyphucit@live.com
            </div>
            <span class="text-sm text-blue">
                <strong>TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VĨNH LONG</strong><br />
                Địa chỉ: 73 Nguyễn Huệ, phường 2, thành phố Vĩnh Long, tỉnh Vĩnh Long<br />
                Điện thoại: (+84) 02703.822141 - Fax: (+84) 02703.821003 - Email: spktvl@vlute.edu.vn
            </span>            
        </footer>
        
        <a id="back-to-top" href="#" class="btn btn-success btn-lg back-to-top" role="button" title="Về đầu trang" data-toggle="tooltip" data-placement="left"><span class="fa fa-arrow-up"></span></a>
    </div>    
    <script src="/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/js/site.min.js?v=LRZkizJjJv-k3JRfO0iAsv-h06Sb9Sz6cIgeZ6oD6wY"></script>
    <script src="/lib/bootstrap-growl/jquery.bootstrap-growl.min.js"></script>
    <script src="/lib/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/lib/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/lib/admin-lte/dist/js/adminlte.min.js"></script>    
    <script>
        $(document).ready(function () {
            $('.sidebar-menu').tree();            
        })
    </script>    
    
    <script type="text/javascript">
        $(document).ready(function ($) {
            userProfile('sideBarSearch');
            $('.select2').select2();
            $.ajax({
                url: 'api/danhmuc/getdsdonvi',
                type: 'GET',
                success: function (data) {
                    $('#lstDV').empty();
                    $('#lstDV').append($('<option></option>').val(0).html('(Tất cả đơn vị)'));
                    $.each(data, function () {
                        $('#lstDV').append($('<option></option>').val(this['id']).html(this['tenDV']));
                    });
                }
            });
            var lstHK = [];
            function updateTuan(tuanBD, soTuan, ngayBD) {
                $('#lstTuan').empty();
                $('#lstTuan').append($('<option></option>').val(0).html('(Tất cả tuần)'));
                for (i = 0; i < soTuan; i++) {
                    var m1 = moment(ngayBD).add(i * 7, 'd');
                    var m2 = moment(ngayBD).add(i * 7 + 6, 'd');
                    var now = moment();
                    var tuanhk = i + tuanBD;
                    if (tuanhk > 52) tuanhk -= 52;                    
                    if (now.isSameOrAfter(m1, 'd') && now.isSameOrBefore(m2, 'd')) {
                        $('#lstTuan').append($('<option selected></option>').val(i + 1).html('* ' + (i + 1) + ' - ' + 'Tuần ' + (tuanhk) + ' (' + m1.date() + '/' + (m1.month() + 1) + ' - ' + m2.date() + '/' + (m2.month() + 1) + ')'));
                        var x = now.day() + 1;
                        if (x == 1) x = 8;
                        $('#lstNgay').val(x);
                        $('#lstNgay').trigger('change');
                    }
                    else {
                        $('#lstTuan').append($('<option></option>').val(i + 1).html((i + 1) + ' - ' + 'Tuần ' + (tuanhk) + ' (' + m1.date() + '/' + (m1.month() + 1) + ' - ' + m2.date() + '/' + (m2.month() + 1) + ')'));
                    }                        
                }
            };
            $.ajax({
                url: 'api/danhmuc/getdshocky',
                type: 'GET',
                success: function (data) {
                    $('#hocky').empty();
                    $.each(data, function () {
                        $('#hocky').append($('<option></option>').val(this['id']).html(this['maHK'] + ' - ' + this['tenHK']));
                        lstHK.push(this);
                    });
                    $('#hocky').change(function () {
                        var hk = lstHK.find(function (item) { return item['id'] == $('#hocky').val(); });
                        updateTuan(hk['tuanBD'], hk['soTuan'], hk['ngayBD']);
                    });
                    updateTuan(lstHK[0]['tuanBD'], lstHK[0]['soTuan'], lstHK[0]['ngayBD']);
                }
            });
            $('#btnSearch').click(function () {
                $('#btnSearch').prop('disabled', true);
                $('#PageDetail').html('');
                $.ajax({
                    url: 'vTKBNgay/ViewTKBNgay',
                    type: 'POST',
                    data: { hocky: $('#hocky').val(), lstDV: $('#lstDV').val(), lstNgay: $('#lstNgay').val(), lstTiet: $('#lstTiet').val(), lstTuan: $('#lstTuan').val() },
                    dataType: 'html',
                    beforeSend: function () {
                        notifyLoading('Đang tải dữ liệu');
                    },
                    success: function (data) {
                        hideNotify();
                        $('#PageDetail').html(data);
                        notifyMsg('Tải dữ liệu thành công', 'success')
                    },
                    error: function () {
                        hideNotify();
                        notifyMsg('Không có dữ liệu', 'danger');                        
                    },
                    complete: function () {
                        $('#btnSearch').prop('disabled', false);
                    }
                });
            });
        });        
    </script>
    <script src="/lib/moment/moment.min.js"></script>
    <script src="/lib/select2/dist/js/select2.full.min.js"></script>
    <script src="/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/lib/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/lib/datatables-buttons/js/dataTables.buttons.js"></script>
    <script src="/lib/jszip/dist/jszip.min.js"></script>
    <script src="/lib/pdfmake/build/pdfmake.min.js"></script>
    <script src="/lib/pdfmake/build/vfs_fonts.js"></script>
    <script src="/lib/datatables-buttons/js/buttons.html5.js"></script>
    <script src="/lib/datatables-buttons/js/buttons.print.js"></script>


</body>
</html>
