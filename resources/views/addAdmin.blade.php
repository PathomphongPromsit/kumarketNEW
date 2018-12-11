<html>
<head>
  <title>AddAdmin</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>


</head>
<body>

    

  <div class="ui segment">
    <img width="100%" src="<?php echo asset('img/02.gif'); ?>">

    <main class="py-4">
          
                <div class="ui green inverted huge menu">
            <div class="header item">
              KU SRC Night Market
          </div>
          <a class="item" href='settime'>
            ตั้งเวลา
          </a>
          <a class="item" href='print'>
            พิมพ์รายงาน
          </a>
          <a class="item" href='add'>
            เพิ่มรายชื่อ
          </a>
          <a class="item" href='edit'>
            แก้ไขรายชื่อ
          </a>
          <a class="item" href='ban'>
            รายชื่อผู้ถูกระงับ
          </a>

          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                        @else
                            <li>
                                

                                <div class="ui item" aria-labelledby="navbarDropdown">
                                     <a>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <a class="ui green button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </main>


        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- Fonts -->
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
        <body>
            <div id="app">

                <main class="py-4">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-md-8">
                              <div class="card">
                                  <div class="card-header">{{ __('เพิ่มผู้ดูแลระบบ') }}</div>

                                  <div class="card-body">
                                      <form method="POST" action="{{ route('register') }}">
                                          @csrf
                                          
                                          <div class="form-group row">
                                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ใช้') }}</label>

                                              <div class="col-md-6">
                                                  <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                  @if ($errors->has('Personal ID'))
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('Personal ID') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                                              <div class="col-md-6">
                                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                  @if ($errors->has('password'))
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('password') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่าน') }}</label>

                                              <div class="col-md-6">
                                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                              </div>
                                          </div>

                                          <div class="form-group row mb-0">
                                              <div class="col-md-6 offset-md-4">
                                                  <button type="submit" class="btn btn-primary">
                                                      {{ __('เพิ่มรายชื่อ') }}
                                                  </button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </main>
            </div>
        </body>
        </html>


    </div>


</body>
</html>


                                          