<html>
	<head><title>Edit</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
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
        <h3 style="text-align: center">User Info</h3>
        <table class="ui celled table" style="text-align: center">
          <thead>
            <tr><th width="9%"><center>หมายเลขล็อค</center></th>
            <th width="17%"><center>ชื่อ</center></th>
            <th width="17%"><center>นามสกุล</center></th>
            <th width="11%"><center>เลขบัตรประชาชน</center></th>
            <th width="20%"><center>ชื่อร้าน</center></th>
            <th width="9%"><center>เบอร์โทรศัพท์</center></th>
            <th width="6%"><center>สถานะ</center></th>
            <th width="11%"><center>Action</center></th>
            </tr></thead>
          <tbody>
            @foreach($list as $name)
            <tr>
              <td>{{ $name['lock']}}</td>
              <td>{{ $name['name']}}</td>
              <td>{{ $name['surname']}}</td>
              <td>{{ $name['email']}}</td>
              <td>{{ $name['store_name']}}</td>
              <td>{{ $name['tel']}}</td>
              <?php if($name->come != 1) {?>
                 <td><?php echo "ไม่มา";?></td>
                <?php };?>
              <?php if($name->come == 1) {?>
                 <td><?php echo "มา";?></td>
                <?php };?>
              <td>
                <a href = "{{route('edit.edit',$name->id)}}" class = "ui mini button">Edit</a>
                <a href = "{{route('del',$name->id)}}" class = "ui mini button">Delete</a>
              </td>
          
              
            </tr>
            @endforeach
          </tbody>


        </table>

        </form>

<!--         <div class="ui modal">
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
      </div> -->






      <script>
        $('.ui.modal')
        .modal('attach events', '.test.button', 'show')
        ;

      </script>




    </div>

  </body>
</html>
