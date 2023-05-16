@extends('admin.main')

@section('content')
<form action="" method="POST">

  <div class="card-body">
    <div class="row">

      <div class="col-md-6">
        <div class="form-group">
          <label for="menu">Tiêu Đề</label>
          <input type="text" name="name" value="{{ $slider->name }}" class="form-control">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="menu">Đường dẫn</label>
          <input type="text" name="url" value="{{ $slider->url }}" class="form-control">
        </div>
      </div>

    </div>

    <div class="form-group">
      <label for="menu">Ảnh Sản Phẩm</label>
      <input type="file" class="form-control" style="height: auto" id="upload">
      <div id="image_show">
            <a href="{{ $slider->thumb }}">
                <img src="{{ $slider->thumb }}" alt="" width="500px" style="display: flex ;margin:auto;">
            </a>
      </div>
      <input type="hidden" name="thumb" value="{{ $slider->thumb }}" id="thumb">
    </div>

    <div class="form-group">
          <label for="menu">Sắp xếp</label>
          <input type="number" name="sort_by" value="{{ $slider->sort_by }}" class="form-control">
    </div>

    <div class="form-group">
      <label>Kích Hoạt</label>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input custom-control-input-info custom-control-input-outline" value="1" id="active" name="active" 
            {{ $slider->active == 1 ? 'checked' : ''}}>
        <label for="active" class="custom-control-label">Có</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input custom-control-input-danger custom-control-input-outline" value="0" id="no_active" name="active"
            {{ $slider->active == 0 ? 'checked' : ''}}>
        <label for="no_active" class="custom-control-label">Không</label>
      </div>
    </div>

  </div>

  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Cập Nhật Slider</button>
  </div>
  @csrf
</form>
@endsection