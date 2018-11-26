<html>
  <head><title>Print</title><link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>

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
<div div class="card" style="text-align:center">
    <div style="margin:10px;overflow:auto;">
    <h3>พิมพ์สรุป</h3>
      <div class="two fields">
      <div class="field" style="text-align:center">
        <td><button class="large ui button" onclick="location.href='{{ url('pdf') }}'">
          Print</button></td></div>
        <div class="field" style="text-align:right;"> <button class="large ui red button" onclick="location.href='{{ url('print/resetcome') }}'">ล้างข้อมูลคนมา</button> </div>
      </div>
     <br>
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

<table class="ui celled table">
  <thead>
    <th colspan="1" width="10%" >หมายเลขร้าน</th>
    <th colspan="1" width="20%" >ชื่อ</th>
    <th colspan="1" width="20%" >นามสกุล</th>
    <th colspan="1" width="20%" >ชื่อร้าน</th>
    <th colspan="1" width="15%" >เบอร์โทรศัพท์</th>
    <th colspan="1" width="15%" >หมายเหตุ</td>
  </thead>
  <tbody>
        @foreach ($User as $u)
          @if($u->admin != 1)
            @if($u->come == 1)
              <tr>
              <td >{{$u['lock']}}</td>
              <td>{{$u['name']}}</td>
              <td>{{$u['surname']}}</td>
              <td>{{$u['store_name']}}</td>
              <td>{{$u['tel']}}</td>
              <td> </td>
              </tr>
            @endif
          @endif
        @endforeach
    </tbody>
</table>
 </div>
  </body>
</html>
