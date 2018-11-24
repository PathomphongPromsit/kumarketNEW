<html>
	<head><title>User</title><link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  </head>
  <style>
  </style>
	<body>
    <div class="ui segment">
      <form class="ui form">
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
        
        <div id="Set time" class="tabcontent">
        @foreach($times as $time)
          <form>
            <label for="ku_day"> จัดตลาดวัน : </label>
            <select name="day_ku_night" id="day_ku_night" style="width:30%">
                <option value="old" selected="selected">{{$time->day_ku_night}}</option>
                <option value="sun_market">อาทิตย์</option>
                <option value="mon_market">จันทร์</option>
                <option value="tu_market">อังคาร</option>
                <option value="wed_market">พุธ</option>
                <option value="th_market">พฤหัสบดี</option>
                <option value="fri_market">ศุกร์</option>
                <option value="sat_market">เสาร์</option>
            </select>
            <br>
            <br>

            <div class="two fields">
              <div class="field">
                <label for="day_start">เปิดระบบวัน :</label>
                <select name="day_start" id="day_of_week_start" style="width:30%">
                    <option value="old" selected="selected">{{$time->day_of_week_start}}</option>
                    <option value="sun_market">อาทิตย์</option>
                    <option value="mon_market">จันทร์</option>
                    <option value="tu_market">อังคาร</option>
                    <option value="wed_market">พุธ</option>
                    <option value="th_market">พฤหัสบดี</option>
                    <option value="fri_market">ศุกร์</option>
                    <option value="sat_market">เสาร์</option>
                </select>
                <br>
                <label for="start_time">เวลา : </label>
                <input id="time_start" type="time" name="start_time"  style="width:30%" value={{$time->time_start}}>
              </div>

              <div class="field">
                <label for="day_stop">ปิดระบบวัน :</label>
                <select name="day_stop" id="day_of_week_stop" style="width:30%">
                  <option value="old" selected="selected">{{$time->day_of_week_stop}}</option>
                  <option value="sun_market">อาทิตย์</option>
                  <option value="mon_market">จันทร์</option>
                  <option value="tu_market">อังคาร</option>
                  <option value="wed_market">พุธ</option>
                  <option value="th_market">พฤหัสบดี</option>
                  <option value="fri_market">ศุกร์</option>
                  <option value="sat_market">เสาร์</option>
                </select>
                <br>
                <label for="stop_time">เวลา : </label>
                <input id="time_stop" type="time" name="stop_time" style="width:30%" value={{$time->time_stop}}>
              </div>
            </div>
            <br>
            <br>
            <label for="announce">ประกาศข่าว :</label>
            <br>
            <textarea id="announce" name="announce" rows="4" cols="50"  style="width:20%" value="{{$time->announce}}" >{{$time->announce}}</textarea>
            <br><br>
            <button type="submit">บันทึก</button>
            </table>
          @endforeach
          </form>
          </div>
      </div>
  </body>
</html>