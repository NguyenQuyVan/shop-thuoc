@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">

                <div class="card-body">
                  <div class="form-group">
                    <label for="menu">Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
                  </div>

                  <div class="form-group">
                    <label>Danh Mục</label>
                    <select name="parent-id" class="form-control">
                        <option value="0"> Danh Mục Cha </option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Mô Tả</label>
                    <textarea name="description" class="form-control"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Mô Tả Chi Tiết</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                  </div>  

                <div class="form-group">
                    <label">Kích Hoạt</label>
                    
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
                  <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
                </div>
                @csrf
              </form>
@endsection


@section('footer')
            <script>
                CKEDITOR.replace( 'content' );
            </script>
@endsection