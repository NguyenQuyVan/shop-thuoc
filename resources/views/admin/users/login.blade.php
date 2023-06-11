
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body class="hold-transition" id="login">
{{-- <body class="hold-transition" id="login"> --}}
{{-- <div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">SIX<b>Medical</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @include('admin.alert')
      <form action="/admin/users/login/store" method="post">
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Ghi Nhớ
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div> --}}
<div class="login-box">
  @include('admin.alert')
  <form action="/admin/users/login/store" method="post">
  <div class="login-logo">
    <a href="../../index2.html">SIX<b>Medical</b></a>
  </div>
  <i class="centerr">Đăng nhập vào tài khoản với Email của bạn</i>
  <div class="container">
    <div class="carddd" style="margin: auto">
        <a class="singup">Sign In</a>
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
              <button type="submit" class="enter" id="signinButton">Đăng Nhập</button>
          </div>
      </div>

    </div>
  </div>
    @csrf
  </form>
</div>
<!-- /.login-box -->

<!-- jQuery -->
    @include('admin.footer')
</body>
</html>
