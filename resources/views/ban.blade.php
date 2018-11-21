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
  width: 35%;
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
    <a class="item" href="settime">
        ตั้งเวลา
    </a>
    <a class="item" href="print">
        พิมพ์รายงาน
    </a>
    <a class="item" href="add">
        เพิ่มรายชื่อ
    </a>
    <a class="item" href="edit">
        แก้ไขรายชื่อ
    </a>
    <a class="item" href="ban">
        รายชื่อผู้ถูกระงับ
    </a>
    </div>
<br>
<div class="segment" id="Ban user">
  <div div class="card" style="text-align:center">
    <div style="margin:10px;height:50%;overflow:auto;">
    <h3>รายชื่อที่ถูกระงับ</h3>
    <table class="ui celled table">
      <thead>
      <tr class="ptr">
        <th class="pth">ชื่อ</th>
        <th class="pth">นามสกุล</th>
        <th class="pth">ชื่อร้าน</th>
        <th class="pth"></th>
      </tr></thead>
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
     <br>
      <button class="ui primary button" style="width:200px">ยกเลิก Ban</button>
     </div>
    </div>
    <br>

  <div div class="card" style="text-align:center">
    <div style="margin:10px;height:50%;overflow:auto;">
    <h3 style="text-align: center;">รายชื่อที่ยังไม่ถูกระงับ</h3>
    <table class="ui celled table">
      <thead>
      <tr class="ptr">
        <th class="pth">ชื่อ</th>
        <th class="pth">นามสกุล</th>
        <th class="pth">ชื่อร้าน</th>
        <th class="pth"></th>
      </tr></thead>
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
    <br>
    <button class="ui secondary button" style="width:200px">Ban</button>
    </div>
  </div>
</div>
</div>

</body>
</html>
