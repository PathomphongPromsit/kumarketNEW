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
        <h3 style="text-align: center">User Info</h3>
        <div class="ui action input">
          <input type="text" placeholder="หมายเลขร้าน">
            <button class="ui button">Search</button>
        </div>
        <table class="ui celled table" style="text-align: center">
          <thead>
            <tr><th width="8%"><center>หมายเลขร้าน</center></th>
            <th width="18%"><center>ชื่อ</center></th>
            <th width="18%"><center>นามสกุล</center></th>
            <th width="10%"><center>เลขบัตรประชาชน</center></th>
            <th width="22%"><center>ชื่อร้าน</center></th>
            <th width="8%"><center>เบอร์โทรศัพท์</center></th>
            <th width="5%"><center>รหัสผ่าน</center></th>
            <th width="11%"></th>
            </tr></thead>
          <tbody>
            <tr>
              <td data-label="หมายเลขร้าน">A00</td>
              <td data-label="ชื่อ">นายชินดนัย</td>
              <td data-label="นามสกุล">นิมิตตรา</td>
              <td data-label="เลขบัตรประชาชน">1100453975758</td>
              <td data-label="ชื่อร้าน">FigureMoe</td>
              <td data-label="เบอร์โทรศัพท์">0899999999</td>
              <td data-label="รหัสผ่าน">15975357</td>
              <td><center><button class="mini ui button" id=12> 
                    Edit
                  </button>
                  <button class="mini ui button">
                    Delete
                  </button></center></td>
            </tr>
          <?php
          for ($i=1; $i < 10; $i++) {
            echo "<tr class=\"ptr\">";
            echo "<td>"  .$i. "</td>";
            echo "<td>" .$i. "</td>";
            echo "<td>" .$i. "</td>";
            echo "<td>" .$i. "</td>";
            echo "<td>" .$i. "</td>";
            echo "<td>" .$i. "</td>";
            echo "<td>" .$i. "</td>";
            echo "<td><center><button class=\"mini ui button\"   id=".$i." data-toggle=\"ui.modal\">Edit</button><input class=\"mini ui button\" type=\"button\" value=\"Delete\" id=".$i."></center></td>";
            echo "</tr>";
          }
          ?>
          </tbody>

        </table>
        </form>
        <div class="ui modal">
          <div class="header">Edit Form</div>
            <div class="content">

              <form class="ui form">
                <div class="field">
                  <label>Name</label>
                  <div class="two fields">
                    <div class="field">
                      <input type="text" name="first-name" placeholder="First Name">
                    </div>
                    <div class="field">
                      <input type="text" name="last-name" placeholder="Last Name">
                    </div>
                  </div>
                </div>

                <div class="field">
                  <label>Personal Info</label>
                  <div class="two fields">
                    <div class="field">
                      <input type="text" name="personal-id" placeholder="Personal ID">
                    </div>
                    <div class="field">
                      <input type="text" name="telephone" placeholder="Telephone">
                    </div>
                  </div>
                </div>

                <div class="field">
                  <label>Shop Info</label>
                  <div class="two fields">
                    <div class="field">
                      <input type="text" name="shop-number" placeholder="Shop Number">
                    </div>
                    <div class="field">
                      <input type="text" name="shop-name" placeholder="Shop Name">
                    </div>
                  </div>
                </div>

              </form>

            </div>
        <div class="actions">
          <div class="ui approve button">Approve</div>
          <div class="ui cancel button">Cancel</div>
        </div>
      </div>






      <script>
        $(function(){
         $("#12").click(function(){
          $(".ui.modal").modal('show');
          });
        $(".ui.modal").modal({
        closable: true
        });
        });

      </script>

      

      
    </div>

  </body>
</html>

