<html>
  <head><title>User</title><link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
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
        </div>
<div div class="card" style="text-align:center">
    <div style="margin:10px;overflow:auto;">
    <h3>พิมพ์สรุป</h3>
<td><button style="float: center;width: 90px;height: 40px;font-weight: bold;" onclick="location.href='{{ url('pdf') }}'">
     Print</button></td>
     <br>
<table class="ui celled table">
  <thead>
    <th colspan="1">หมายเลขร้าน</th>
    <th colspan="1">ชื่อ</th>
    <th colspan="1">นามสกุล</th>
    <th colspan="1">ชื่อร้าน</th>
    <th colspan="1">เบอร์โทรศัพท์</th>
    <th colspan="1">หมายเหตุ</td>
  </thead>
  <tbody>
        @foreach ($User as $u)
          @if($u->admin != 1)
            @if($u->come == 1)
              <tr>
              <td>{{$u['lock']}}</td>
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
