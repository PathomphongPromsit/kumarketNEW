<html>
  <title>Print </title>
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
    width: 30%;
    padding: 15px;
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
          <a class="item" href='settime'>
            ตั้งเวลา
          </a>
          <a class="item" href='print'>
            พิมพ์รายงาน
          </a>
          <a class="item" href='add'>
            เพิ่มรายชื่อ
          </a>
          <a class="item" href='addAdmin'>
            เพิ่มผู้ดูแลระบบ
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
 
<div div class="card" style="text-align:center">
    <div style="margin:10px;overflow:auto;">
    <h3>พิมพ์สรุป</h3>
      <div class="two fields">
      <div class="field" style="text-align:center">
        <td>
          <!-- <button class="large ui button" onclick="location.href='{{ url('pdf') }}'">Print</button> -->
          <button class="large ui button" onclick="window.open('pdf')">Print</button>
        </td>
      </div>
        <!-- <div class="field" style="text-align:right;"> <button class="large ui red button" onclick="location.href='{{ url('print/resetcome') }}'">ล้างข้อมูลคนมา</button> </div> -->
        <div class="field" style="text-align:right;"><a class="large ui red button" onclick="return confirm('ยืนยันการล้างข้อมูลหรือไม่ ? ')" href= "{{ url('print/resetcome') }}" >ล้างข้อมูลคนมา</a></div>
      </div>
     <h3>
     @foreach($times as $time)
						@if($time->day_ku_night == 'Sun')
							<br>ประจำวันที่
              <?php
              $Day = "Sunday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Sun')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
						@endif
						@if($time->day_ku_night == 'Mon')
              <br>ประจำวันที่
              <?php
              $Day = "Monday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Mon')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
						@endif
						@if($time->day_ku_night == 'Tue')
              <br>ประจำวันที่
              <?php
              $Day = "Tuesday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Tue')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
						@endif
						@if($time->day_ku_night == 'Wed')
              <br>ประจำวันที่
              <?php
              $Day = "Wednesday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Wed')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
						@endif
						@if($time->day_ku_night == 'Thu')
              <br>ประจำวันที่
              <?php
              $Day = "Thursday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Thu')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
						@endif
						@if($time->day_ku_night == 'Fri')
              <br>ประจำวันที่
              <?php
              $Day = "Friday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Fri')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
						@endif
						@if($time->day_ku_night == 'Sat')
              <br>ประจำวันที่
              <?php
              $Day = "Saturday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Sat')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
						@endif
      @endforeach
    </h3>
<table class="ui celled table">
  <thead>
    <th colspan="1" width="10%" >ล๊อกที่</th>
    <th colspan="1" width="20%" >ชื่อ</th>
    <th colspan="1" width="20%" >นามสกุล</th>
    <th colspan="1" width="20%" >ประเภทสินค้า</th>
    <th colspan="1" width="15%" >เบอร์โทรศัพท์</th>
  </thead>
  <tbody>
        @foreach ($User as $u)
          @if($u->isAdmin != 1)
           @if($u->ban != 1)
            @if($u->come == 1)
              <tr>
              <td >{{$u['lock']}}</td>
              <td>{{$u['name']}}</td>
              <td>{{$u['surname']}}</td>
              <td>{{$u['store_name']}}</td>
              <td>{{$u['tel']}}</td>
              </tr>
            @endif
           @endif
          @endif
        @endforeach
    </tbody>
</table>
 </div>
  </body>
</html>

