@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">

  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="menu">Tên Sản Phẩm</label>
          <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nhập tên sản phẩm">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Danh Mục</label>
          <select name="menu_id" class="form-control">
            <option value="0"> Danh Mục Cha </option>
            @foreach($menus as $menu)
            <option value="{{ $menu->id }}">{{ $menu->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Gốc</label>
                        <input type="number" name="price" value="{{ old('price') }}"  class="form-control" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Giảm</label>
                        <input type="number" name="price_sale" value="{{ old('price_sale') }}"  class="form-control" >
                    </div>
                </div>
            </div>


    <div class="form-group">
      <label>Mô Tả</label>
      <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
      <label>Mô Tả Chi Tiết</label>
      <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
    </div>

    <div class="form-group">
      <label for="menu">Ảnh Sản Phẩm</label>
      <input type="file" class="form-control" style="height: auto" id="upload">
      <div id="image_show">

      </div>
      <input type="hidden" name="thumb" id="thumb">
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
    <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
  </div>
  @csrf
</form>
@endsection


@section('footer')
<script>
  CKEDITOR.replace('content');
</script>
@endsection