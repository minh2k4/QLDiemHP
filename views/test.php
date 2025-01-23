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