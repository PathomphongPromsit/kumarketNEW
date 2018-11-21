<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Ku Src Night Market</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
.ptable
{
  border-collapse: collapse;
  width: 100%;
  height: 50;
}
.ptable, .ptd, .pth,.ptr {
  border: 1px solid black;
  padding: 5px;
}
.pth,.ptd {text-align: left;
  width: 35%;
  padding: 15px;
}
.center {text-align: center;
}
</style>
</head>
<body>

<h2><center>KU SRC Night Market</center></h2>
<h3><center>ประจำวันอังคารที่ xxxx</center></h3>

<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Set time')">ตั้งเวลา</button>
  <button class="tablinks" onclick="openTab(event, 'Print')" id="defaultOpen">พิมพ์สรุป</button>
  <button class="tablinks" onclick="openTab(event, 'Add user')">เพิ่มผู้ใช้</button>
  <button class="tablinks" onclick="openTab(event, 'Edit user')">แก้ไขผู้ใช้</button>
  <button class="tablinks" onclick="openTab(event, 'Ban user')">ระงับผู้ใช้</button>

</div>

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

<div id="Print" class="tabcontent">
  <h3>พิมพ์สรุป</h3>
  <p>ลูกแก้ว รายชื่อที่จะมาวันนี้ ปุ่มบันทึก(โหลดpdf)</p>
  <input type="button" value="Print" onclick="window.location.href='PDF.php'" />
  <table width="100%" border="1">
    <thead>
      <td colspan="1">หมายเลขร้าน</td>
      <td colspan="1">ชื่อ</td>
      <td colspan="1">นามสกุล</td>
      <td colspan="1">ชื่อร้าน</td>
      <td colspan="1">เบอร์โทรศัพท์</td>
      <td colspan="1">หมายเหตุ</td>
    </thead>
    <tbody>
      <th>1</th>
      <th>AAAAAAAAAA</th>
      <th>BBBBBBBBBB</th>
      <th>CCCCCCCCCC</th>
      <th>0800000000</th>
      <th> </th>
    </tbody>
  </table>
</div>

<div id="Add user" class="tabcontent">
  <h3>เพิ่มผู้ใช้</h3>
  <p>เน ฟอร์มกรอกข้อมูล สุ่มพาสให้ยูส ปุ่มบันทึก</p>
  <div class="ui segment">
      <div class="ui card container">
          <div class="content">
              <form class="ui form">

                  <div class="inline field">
                      <label for="side1"> เลขบัตรประชาชน </label>

                  </div>

                  <div class="inline field">
                      <input type="text" name="side1" id="side1" min="1" required  maxlength="4">
                    </div>

                  <div class="inline field">
                      <label for="side2"> ชื่อ </label>

                  </div>

                  <div class="inline field">
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4">
                    </div>

                  <div class="inline field">
                      <label for="side2"> นามสกุล </label>

                  </div>
                  <div class="inline field">
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4">
                    </div>

                  <div class="inline field">
                      <label for="side2"> ชื่อร้าน </label>

                  </div>
                  <div class="inline field">
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4">
                    </div>

                  <div class="inline field">
                      <label for="side2"> เบอร์โทรศัพท์ </label>

                  </div>
                  <div class="inline field">
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4">
                    </div>

                  <div class="inline field">
                      <label for="side2"> เลขของร้าน </label>

                  </div>
                  <div class="inline field">
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4">
                    </div>

                  </div>

                  <div class="inline field">
                      <input id="submit" type=button value="Submit"/>
                      <input type="reset" name="reset" value=" Reset "/>
                      <input type='button' onClick="closeWindow()" value='Close'/>
                  </div>
              </form>
          </div>
      </div>
  </div>


</div>

<div id="Edit user" class="tabcontent">
  <h3>แก้ไขผู้ใช้</h3>
  <p>โอม  รายการทั้งหมด คลิกแก้ข้อมูล ปุ่มบันทึก</p>
  <h3 style="text-align: center;">รายชื่อ</h3>
  <table width="1500" border="1" cellspacing="2" cellpadding="0">
  <tr>
    <td width="125"><center>หมายเลขเลขร้าน</center></td>
    <td width="125"><center>ชื่อ</center></td>
    <td width="125"><center>นามสกุล</center></td>
    <td width="125"><center>เลขบัตรประชาชน</center></td>
    <td width="125"><center>ชื่อร้าน</center></td>
    <td width="125"><center>เบอร์โทรศัพท์</center></td>
    <td width="125"></td>
    <?php
        for ($i=1; $i < 10; $i++) {
          echo "<tr class=\"ptr\">";
          echo "<td>" .$i. "</td>";
          echo "<td>" .$i. "</td>";
          echo "<td>" .$i. "</td>";
          echo "<td>" .$i. "</td>";
          echo "<td>" .$i. "</td>";
          echo "<td>" .$i. "</td>";
          echo "<td class=\"center\"><input type=\"button\" value=\"Edit\" id=".$i."><input type=\"button\" value=\"Delete\" id=".$i."></td>";
          echo "</tr>";
        }
    ?>
  </table>
</div>

<div id="Ban user" class="tabcontent">
  <h3>ระงับผู้ใช้</h3>
  <p>เพชร แสดงรายชื่อที่โดนระงับบน เลือกติ๊กระงับล่าง ปุ่มบันทึก</p>
  <div style="height:50%;overflow:auto;">
    <h3 style="text-align: center;">รายชื่อที่ถูกระงับ</h3>
    <table class="ptable">
      <tr class="ptr">
        <th class="pth">ชื่อ</th>
        <th class="pth">นามสกุล</th>
        <th class="pth">ชื่อร้าน</th>
        <th class="pth"></th>
      </tr>
      <?php
        for ($i=1; $i < 10; $i++) {
          echo "<tr class=\"ptr\">";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\"><input type=\"checkbox\" id=".$i."></td>";
          echo "</tr>";
        }
       ?>
    </table>
  </div>
  <br>
      <button type="submit">ยกเลิก Ban</button>
  <br>
  <div style="height:50%;overflow:auto;">
    <h3 style="text-align: center;">รายชื่อที่ยังไม่ถูกระงับ</h3>
    <table class="ptable">
      <tr class="ptr">
        <th class="pth">ชื่อ</th>
        <th class="pth">นามสกุล</th>
        <th class="pth">ชื่อร้าน</th>
        <th class="pth"></th>
      </tr>
      <?php
        for ($i=1; $i < 10; $i++) {
          echo "<tr class=\"ptr\">";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\"><input type=\"checkbox\" id=".$i."></td>";
          echo "</tr>";
        }
       ?>
    </table>
  </div>
  <br>
  <button type="submit">Ban</button>
</div>

<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
