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
    @if (session('success'))
      @include('share.toast_success',['message' => session('success')])
    @endif
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Đăng nhập</div>
        <div class="title signup">Đăng ký</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Đăng nhập</label>
          <label for="signup" class="slide signup">Đăng ký</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="{{route('login.login')}}" method="POST" class="login">
            @csrf
            <div class="field">
              <input type="email" name="email" placeholder="Địa chỉ Email" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <div class="pass-link"><a href="{{route('forgot_password')}}">Quên mật khẩu?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Đăng nhập">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <a href="{{route('login.google')}}" class="btn_login_google">
                <?xml version="1.0" ?>
                <svg id="Capa_1" style="enable-background:new 0 0 150 150;" version="1.1" viewBox="0 0 150 150" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35px" height="35px">
                    <style type="text/css">
                        .st0{fill:#1A73E8;}
                        .st1{fill:#EA4335;}
                        .st2{fill:#4285F4;}
                        .st3{fill:#FBBC04;}
                        .st4{fill:#34A853;}
                        .st5{fill:#4CAF50;}
                        .st6{fill:#1E88E5;}
                        .st7{fill:#E53935;}
                        .st8{fill:#C62828;}
                        .st9{fill:#FBC02D;}
                        .st10{fill:#1565C0;}
                        .st11{fill:#2E7D32;}
                        .st12{fill:#F6B704;}
                        .st13{fill:#E54335;}
                        .st14{fill:#4280EF;}
                        .st15{fill:#34A353;}
                        .st16{clip-path:url(#SVGID_2_);}
                        .st17{fill:#188038;}
                        .st18{opacity:0.2;fill:#FFFFFF;enable-background:new    ;}
                        .st19{opacity:0.3;fill:#0D652D;enable-background:new    ;}
                        .st20{clip-path:url(#SVGID_4_);}
                        .st21{opacity:0.3;fill:url(#_45_shadow_1_);enable-background:new    ;}
                        .st22{clip-path:url(#SVGID_6_);}
                        .st23{fill:#FA7B17;}
                        .st24{opacity:0.3;fill:#174EA6;enable-background:new    ;}
                        .st25{opacity:0.3;fill:#A50E0E;enable-background:new    ;}
                        .st26{opacity:0.3;fill:#E37400;enable-background:new    ;}
                        .st27{fill:url(#Finish_mask_1_);}
                        .st28{fill:#FFFFFF;}
                        .st29{fill:#0C9D58;}
                        .st30{opacity:0.2;fill:#004D40;enable-background:new    ;}
                        .st31{opacity:0.2;fill:#3E2723;enable-background:new    ;}
                        .st32{fill:#FFC107;}
                        .st33{opacity:0.2;fill:#1A237E;enable-background:new    ;}
                        .st34{opacity:0.2;}
                        .st35{fill:#1A237E;}
                        .st36{fill:url(#SVGID_7_);}
                        .st37{fill:#FBBC05;}
                        .st38{clip-path:url(#SVGID_9_);fill:#E53935;}
                        .st39{clip-path:url(#SVGID_11_);fill:#FBC02D;}
                        .st40{clip-path:url(#SVGID_13_);fill:#E53935;}
                        .st41{clip-path:url(#SVGID_15_);fill:#FBC02D;}
                    </style>
                    <g>
                        <path class="st14" d="M120,76.1c0-3.1-0.3-6.3-0.8-9.3H75.9v17.7h24.8c-1,5.7-4.3,10.7-9.2,13.9l14.8,11.5C115,101.8,120,90,120,76.1L120,76.1z"/>
                        <path class="st15" d="M75.9,120.9c12.4,0,22.8-4.1,30.4-11.1L91.5,98.4c-4.1,2.8-9.4,4.4-15.6,4.4c-12,0-22.1-8.1-25.8-18.9L34.9,95.6C42.7,111.1,58.5,120.9,75.9,120.9z"/>
                        <path class="st12" d="M50.1,83.8c-1.9-5.7-1.9-11.9,0-17.6L34.9,54.4c-6.5,13-6.5,28.3,0,41.2L50.1,83.8z"/>
                        <path class="st13" d="M75.9,47.3c6.5-0.1,12.9,2.4,17.6,6.9L106.6,41C98.3,33.2,87.3,29,75.9,29.1c-17.4,0-33.2,9.8-41,25.3l15.2,11.8C53.8,55.3,63.9,47.3,75.9,47.3z"/>
                    </g>
                </svg>
                Đăng nhập bằng Google
              </a>
            </div>
            <div class="signup-link">Chưa có tài khoản? <a href="">Đăng ký ngay</a></div>
          </form>
          <form action="{{route('register')}}" method="POST" class="signup">
            @csrf
            <div class="field">
              <input type="text" name="name" placeholder="Họ và tên" required>
            </div>
            <div class="field">
              <input type="text" placeholder="Phone" name="SĐT" required>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Địa chỉ Email" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Đăng ký">
            </div>
          </form>
        </div>
      </div>
    </div>
    @vite(['resources/js/app.js'])
  </body>
</html>
