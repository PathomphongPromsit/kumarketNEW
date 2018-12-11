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
.center {text-align: center;
}
</style>
</head>
<body>

<div class="ui segment">
  <img width="100%" src="<?php echo asset('img/02.gif'); ?>">
        <main class="py-4">
        <div class="ui green inverted huge menu">
            <div class="header item">
              KU SRC Night Market
          </div>
          <a class="item" href='/settime'>
            ตั้งเวลา
          </a>
          <a class="item" href='/print'>
            พิมพ์รายงาน
          </a>
          <a class="item" href='/add'>
            เพิ่มรายชื่อ
          </a>
          <a class="item" href='/addAdmin'>
            เพิ่มผู้ดูแลระบบ
          </a>
          <a class="item" href='/edit'>
            แก้ไขรายชื่อ
          </a>
          <a class="item" href='/ban'>
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
<br>
<div style="text-align:right">
  
<form action="{{ route('Bsearch')}}"><div class="ui action input">
  <input type="text" name="searchData" placeholder="ค้นหาตามเลขล็อค">
  <button class="ui button" type="submit">Search</button></div>
</form>
</div>
<br>
<div class="segment" id="Ban user">
  <div div class="card" style="text-align:center">
    <div style="margin:10px;">
    <h3>รายชื่อที่ถูกระงับ</h3>
    <br>
    <table class="ui celled table" style="text-align: center">
      <thead>
      <tr >
        <th width="10%"><center>หมายเลขล็อค</center></th>
        <th width="17.5%">ชื่อ</th>
        <th width="17.5%">นามสกุล</th>
        <th width="17.5%">ชื่อร้าน</th>
        <th width="17.5%">เบอร์โทร</th>
        <th width="10%">ขาด/ครั้ง</th>
        <th width="10%"></th>
      </tr></thead>
      <tbody>
        @foreach ($Ban as $B)
        <tr>
          <td>{{ $B->lock}}</td>
          <td>{{ $B->name}}</td>
          <td>{{ $B->surname}}</td>
          <td>{{ $B->store_name}}</td>
          <td>{{ $B->tel}}</td>
          <td>{{ $B->count}}</td>
          <td><a href="{{ route('Unban',$B->id) }}"><button class="ui primary button">Cancel Ban</button></a></td>
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
    <table class="ui celled table" style="text-align: center">
      <thead>
      <tr>
        <th width="10%"><center>หมายเลขล็อค</center></th>
        <th width="17.5%">ชื่อ</th>
        <th width="17.5%">นามสกุล</th>
        <th width="17.5%">ชื่อร้าน</th>
        <th width="17.5%">เบอร์โทร</th>
        <th width="10%">ขาด/ครั้ง</th>
        <th width="10%"></th>
      </tr></thead>
      <tbody>
        @foreach ($UnBan as $UB)
        <tr>
          <td>{{ $UB->lock}}</td>
          <td>{{ $UB->name}}</td>
          <td>{{ $UB->surname}}</td>
          <td>{{ $UB->store_name}}</td>
          <td>{{ $UB->tel}}</td>
          <td>{{ $UB->count}}</td>
          <td><a href="{{ route('Setban',$UB->id) }}"><button class="ui secondary button">Ban</button></a></td>
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
