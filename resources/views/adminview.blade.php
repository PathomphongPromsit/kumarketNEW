<!DOCTYPE html>
<html>
<body>

    <h2><center>KU SRC Night Market ADMIN</center></h2>
    <button type="button" onclick="window.location='{{ url("/settime") }}'">ตั้งเวลา</button>
    <button type="button" onclick="window.location='{{ url("/print") }}'">พิมพ์</button>
    <button type="button" onclick="window.location='{{ url("/add") }}'">เพิ่มผู้ใช้</button>
    <button type="button" onclick="window.location='{{ url("/edit") }}'">แก้ไข</button>
    <button type="button" onclick="window.location='{{ url("/ban") }}'">แบน</button>


</body>
</html>
