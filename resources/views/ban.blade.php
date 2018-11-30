<!DOCTYPE html>
<html>
<head>
  <title>Ban </title>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>

body {font-family: Arial;
  background-color: #ffffff;
}
.ui.celled.table
{
  border-collapse: collapse;
  width: 100%;
  height: 50;
}
.ui.celled.table, .ptd, .pth,.ptr {
  padding: 5px;
}
.pth,.ptd {text-align: left;
  padding: 15px;
}
.center {text-align: center;
}
</style>
</head>
<body>
  <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
                <div class="ui menu">
                    <div class="header item">
                        <a class="item">
                            KU SRC Night Market
                        </a>

                        <a class="item" href="settime">
                            ตั้งเวลา
                        </a>

                        <a class="item" href="print">
                            พิมพ์รายงาน
                        </a>

                        <a class="item" href="add">
                            เพิ่มรายชื่อ
                        </a>

                        <a class="item" href="edit">
                            แก้ไขรายชื่อ
                        </a>

                        <a class="item" href="ban">
                            รายชื่อผู้ถูกระงับ
                        </a>
                    </div>
                </div>
        </main>
    </div>
<br>
<div class="ui segment">
<div class="segment" id="Ban user">
  <div div class="card" style="text-align:center">
    <div style="margin:10px;">
    <h3>รายชื่อที่ถูกระงับ</h3>
    <br>
    <table class="ui celled table">
      <thead>
      <tr class="ptr">
        <th class="pth">ชื่อ</th>
        <th class="pth">นามสกุล</th>
        <th class="pth">ชื่อร้าน</th>
        <th class="pth">เบอร์โทร</th>
        <th class="pth">ไม่มากี่ครั้ง</th>
        <th class="pth"></th>
      </tr></thead>
      <tbody>
        @foreach ($Ban as $B)
        <tr>
          <td>{{ $B['name']}}</td>
          <td>{{ $B['surname']}}</td>
          <td>{{ $B['store_name']}}</td>
          <td>{{ $B['tel']}}</td>
          <td>{{ $B['count']}}
          <td><a href="{{ route('Unban',$B->id) }}"><button class="ui primary button" >Cancel Ban</button></a></td>
        </tr>
        @endforeach
      </tbody>
     </table>
     </div>
    </div>
    <br>

  <div div class="card" style="text-align:center">
    <div style="margin:10px">
    <h3 style="text-align: center;">รายชื่อที่ยังไม่ถูกระงับ</h3>
    <table class="ui celled table">
      <thead>
      <tr class="ptr">
        <th class="pth">ชื่อ</th>
        <th class="pth">นามสกุล</th>
        <th class="pth">ชื่อร้าน</th>
        <th class="pth">เบอร์โทร </th>
        <th class="pth">ไม่มากี่ครั้ง</th>
        <th class="pth"></th>
      </tr></thead>
      <tbody>
        @foreach ($UnBan as $UB)
        <tr>
          <td>{{ $UB['name']}}</td>
          <td>{{ $UB['surname']}}</td>
          <td>{{ $UB['store_name']}}</td>
          <td>{{ $UB['tel']}}</td>
          <td>{{ $UB['count']}}
          <td><a href="{{ route('Setban',$UB->id) }}"><button class="ui secondary button" >Ban</button></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
</div>
</div>
</body>
</html>
