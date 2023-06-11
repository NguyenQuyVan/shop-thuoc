<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> {{ $title }} </title>    

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="icon" type="image/png" href="/template/images/icons/favicon1-.png"/>
  <link rel="stylesheet" href="/template/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/template/admin/dist/css/adminlte.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link rel="stylesheet" type="text/css" href="/template/admin/dist/css/app.css">
  @yield('head')

  <style>
    .hidden {
    display: none;
}

#login {
    align-items: center;
    justify-content: center;
    background-image: url('../../../template/images/login-bg.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    /* background-size: cover; */
    /* background-position: center; */
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100vh;
    -ms-flex-pack: center;
}
  </style>