<html>
  <head><title>User</title><link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  </head>
  <style>
  </style>
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
  <tbody>
    <th>2</th>
    <th>WWWWWWWW</th>
    <th>XXXXXXXXXX</th>
    <th>YYYYYYYYYY</th>
    <th>0900000000</th>
    <th> </th>
  </tbody>
</table>
 </div>
  </body>
</html>