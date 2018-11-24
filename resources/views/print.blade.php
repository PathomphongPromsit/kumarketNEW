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
<input type="button" value="Print" onclick='window.location="http://localhost/kumarketNEW/resources/views/pdf.blade.php"' />
<table width="100%" border="1">
  <thead>
    <th colspan="1">หมายเลขร้าน</th>
    <th colspan="1">ชื่อ</th>
    <th colspan="1">นามสกุล</th>
    <th colspan="1">ชื่อร้าน</th>
    <th colspan="1">เบอร์โทรศัพท์</th>
    <th colspan="1">หมายเหตุ</td>
  </thead>
  <tbody>
    <td>1</td>
    <td>AAAAAAAAAA</td>
    <td>BBBBBBBBBB</td>
    <td>CCCCCCCCCC</td>
    <td>0800000000</td>
    <td> </td>
  </tbody>
  <tbody>
    <td>2</td>
    <td>WWWWWWWW</td>
    <td>XXXXXXXXXX</td>
    <td>YYYYYYYYYY</td>
    <td>0900000000</td>
    <td> </td>
  </tbody>
</table>
 </div>
  </body>
</html>
