
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body class="hold-transition" id="login">
{{-- <div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">SIX<b>Medical</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h3 class="login-box-msg">Register</h3>
      @include('admin.alert')
      <form action="/admin/users/register/store" method="post">

        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Tên người dùng">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Nhập lại Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Ghi Nhớ
              </label>
            </div>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Tạo TK</button>
          </div>

        </div>
        @csrf
      </form>
    </div>

  </div>
</div> --}}
<div class="login-box">
  @include('admin.alert')
  <form action="/admin/users/register/store" method="post">
  <div class="login-logo">
    <a href="../../index.html">SIX<b>Medical</b></a>
  </div>
  <i class="centerr">Tạo Tài Khoản miễn phí với Email của bạn</i>
  <div class="container">
    <div class="carddd" style="margin: auto">
        <a class="singup">Sign Up</a>
        <div class="inputBox">
            <input type="text" name="name" required="required">
            <span class="user">Tên Người Dùng</span>
        </div>

        <div class="inputBox1">
          <input type="email" name="email" required="required">
          <span class="user">Email</span>
        </div>

        <div class="inputBox">
            <input type="password" name="password" required="required">
            <span>Password</span>
        </div>

        <div class="row">
          <div class="col-7">
              <div class="icheck-primary">
                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember">
                      Ghi Nhớ
                  </label>
              </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
              <button type="submit" class="enter" id="signupButton">Đăng Ký</button>
          </div>
      </div>

      <p>Bạn đã có tài khoản ? <a href="/admin/users/login/">Đăng Nhập</a></p>
    </div>
  </div>
    @csrf
  </form>
</div>

<!-- jQuery -->
    @include('admin.footer')
</body>
</html>
