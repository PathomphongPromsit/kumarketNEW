<div id="Set time" class="tabcontent">
@foreach($times as $time)
  <form>
    <label for="ku_day">จัดตลาดวัน :</label>
    <select name="ku_day" id="ku_day">
        <option value="old" selected="selected">{{$time->day_ku_night}}</option>
        <option value="sun_market">อาทิตย์</option>
        <option value="mon_market">จันทร์</option>
        <option value="tu_market">อังคาร</option>
        <option value="wed_market">พุธ</option>
        <option value="th_market">พฤหัสบดี</option>
        <option value="fri_market">ศุกร์</option>
        <option value="sat_market">เสาร์</option>
    </select>
    <br><br>
    <label for="day_start">เปิดระบบวัน :</label>
    <select name="day_start" id="day_start">
        <option value="old" selected="selected">{{$time->day_of_week_start}}</option>
        <option value="sun_market">อาทิตย์</option>
        <option value="mon_market">จันทร์</option>
        <option value="tu_market">อังคาร</option>
        <option value="wed_market">พุธ</option>
        <option value="th_market">พฤหัสบดี</option>
        <option value="fri_market">ศุกร์</option>
        <option value="sat_market">เสาร์</option>
    </select>
    <label for="start_time">เวลา : </label>
    <input id="start_time" type="time" name="start_time" value={{$time->time_start}}>
    <br><br>
    <label for="day_stop">ปิดระบบวัน :</label>
    <select name="day_stop" id="day_stop">
      <option value="old" selected="selected">{{$time->day_of_week_stop}}</option>
      <option value="sun_market">อาทิตย์</option>
      <option value="mon_market">จันทร์</option>
      <option value="tu_market">อังคาร</option>
      <option value="wed_market">พุธ</option>
      <option value="th_market">พฤหัสบดี</option>
      <option value="fri_market">ศุกร์</option>
      <option value="sat_market">เสาร์</option>
    </select>
    <label for="stop_time">เวลา : </label>
    <input id="stop_time" type="time" name="stop_time" value={{$time->time_stop}}>
    <br>ประกาศข่าวสาร<br>
    <textarea id="announce" name="announce" rows="4" cols="50" value="{{$time->announce}}" >{{$time->announce}}</textarea>
    <br><br>
    <button type="submit">บันทึก</button>
    </table>
  @endforeach
  </form>
</div>