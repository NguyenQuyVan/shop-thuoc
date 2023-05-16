@extends('admin.main')

@section('content')
<form action="" method="POST">

  <div class="card-body">
    <div class="row">

      <div class="col-md-6">
        <div class="form-group">
          <label for="menu">Tiêu Đề</label>
          <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nhập tên tiêu đề">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="menu">Đường dẫn</label>
          <input type="text" name="url" value="{{ old('url') }}" class="form-control">
        </div>
      </div>

    </div>

    <div class="form-group">
      <label for="menu">Ảnh Sản Phẩm</label>
      <input type="file" class="form-control" style="height: auto" id="upload">
      <div id="image_show">

      </div>
      <input type="hidden" name="thumb" id="thumb">
    </div>

    <div class="form-group">
          <label for="menu">Sắp xếp</label>
          <input type="number" name="sort_by" value="1" class="form-control">
    </div>

    <div class="form-group">
      <label>Kích Hoạt</label>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input custom-control-input-info custom-control-input-outline" value="1" id="active" name="active" checked="">
        <label for="active" class="custom-control-label">Có</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input custom-control-input-danger custom-control-input-outline" value="0" id="no_active" name="active">
        <label for="no_active" class="custom-control-label">Không</label>
      </div>
    </div>

  </div>

  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Thêm Slider</button>
  </div>
  @csrf
</form>
@endsection