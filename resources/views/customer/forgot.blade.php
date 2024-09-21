<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login & Signup Form</title>
    @vite(['resources/css/app.css'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    @if ($errors->any())
      @if ($errors->has('error'))
        @include('share.toast_error', ['message' => $errors->first('error')])
      @else
        @php
          $message = "Thông tin nhập không đúng định dạng"
        @endphp
        @include('share.toast_error', ['message' => $message])
      @endif
    @endif
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Quên mật khẩu</div>
      </div>
      <div class="form-container">
        <div class="form-inner">
          <form action="{{route('reset')}}" method="POST" class="login">
            @csrf
            <div class="field">
              <input type="email" name="email" placeholder="Địa chỉ email" required>
            </div>
            <div class="pass-link"><a href="{{route('login')}}">Đăng nhập</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Cập nhật">
            </div>
          </form>
        </div>
      </div>
    </div>
    @vite(['resources/js/app.js'])
  </body>
</html>
