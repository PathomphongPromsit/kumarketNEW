<html>
<head>
  <title>Add</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>


</head>
<body>
  <div class="ui segment">
    <div class="ui menu">
          <div class="header item">
            <a class="item" href='home'>
            KU SRC Night Market
            </a>
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
        </div>

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
                                  <div class="card-header">{{ __('Register') }}</div>

                                  <div class="card-body">
                                      <form method="POST" action="{{ route('register') }}">
                                          @csrf

                                          <div class="form-group row">
                                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                              <div class="col-md-6">
                                                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                  @if ($errors->has('name'))
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('name') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>
                                          <!-- เพิ่ม -->
                                       <div class="form-group row">
                                              <label for="surmane" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                              <div class="col-md-6">
                                                  <input id="surname" type="text" class="form-control{{ $errors->has('sername') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                                  @if ($errors->has('surname'))
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('surname') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>
                                          <!-- เพิ่ม -->
                                          <div class="form-group row">
                                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Personal ID') }}</label>

                                              <div class="col-md-6">
                                                  <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                  @if ($errors->has('Personal ID'))
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('Personal ID') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <!-- เพิ่ม -->
                                       <div class="form-group row">
                                              <label for="store_name" class="col-md-4 col-form-label text-md-right">{{ __('store_name') }}</label>

                                              <div class="col-md-6">
                                                  <input id="store_name" type="text" class="form-control{{ $errors->has('store_name') ? ' is-invalid' : '' }}" name="store_name" value="{{ old('store_name') }}" required autofocus>

                                                  @if ($errors->has('store_name'))
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('store_name') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>
                                          <!-- เพิ่ม -->

                                          <!-- เพิ่ม -->
                                       <div class="form-group row">
                                              <label for="lock" class="col-md-4 col-form-label text-md-right">{{ __('lock') }}</label>

                                              <div class="col-md-6">
                                                  <input id="lock" type="text" class="form-control{{ $errors->has('lock') ? ' is-invalid' : '' }}" name="lock" value="{{ old('lock') }}" required autofocus>

                                                  @if ($errors->has('lock'))
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('lock') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>
                                          <!-- เพิ่ม -->

                                          <!-- เพิ่ม -->
                                       <div class="form-group row">
                                              <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('tel') }}</label>

                                              <div class="col-md-6">
                                                  <input id="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required autofocus>

                                                  @if ($errors->has('tel'))
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('tel') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>
                                          <!-- เพิ่ม -->

                                          <div class="form-group row">
                                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                              <div class="col-md-6">
                                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                              </div>
                                          </div>

                                          <div class="form-group row mb-0">
                                              <div class="col-md-6 offset-md-4">
                                                  <button type="submit" class="btn btn-primary">
                                                      {{ __('Register') }}
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
