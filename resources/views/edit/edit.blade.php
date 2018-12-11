<html>
	<head><title>Edit</title>
     <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  </head>
	<body>

    <div class="ui segment">
      <img width="100%" src="<?php echo asset('img/02.gif'); ?>">
        <main class="py-4">
        <div class="ui green inverted huge menu">
            <div class="header item">
              KU SRC Night Market
          </div>
          <a class="item" href='/settime'>
            ตั้งเวลา
          </a>
          <a class="item" href='/print'>
            พิมพ์รายงาน
          </a>
          <a class="item" href='/add'>
            เพิ่มรายชื่อ
          </a>
          <a class="item" href='/addAdmin'>
            เพิ่มผู้ดูแลระบบ
          </a>
          <a class="item" href='/edit'>
            แก้ไขรายชื่อ
          </a>
          <a class="item" href='/ban'>
            รายชื่อผู้ถูกระงับ
          </a>
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                        @else
                            <li>
                                

                                <div class="ui item" aria-labelledby="navbarDropdown">
                                    <a>
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                <a class="ui green button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
        </div>
        </main>



        <h3 style="text-align: center">ข้อมูลผู้ใช้งาน</h3>
        <div style="text-align:right">
          <form action="{{ route('search')}}">
            <div class="ui action input">
              <input type="text" name="searchData" placeholder="ค้นหาตามเลขล็อค">
              <button class="ui button" type="submit">Search</button>
            </div>
          </form>
        </div>
        <table class="ui celled table" style="text-align: center">
          <thead>
            <tr><th width="9%"><center>หมายเลขล็อค</center></th>
            <th width="11%"><center>ชื่อ</center></th>
            <th width="11%"><center>นามสกุล</center></th>
            <th width="11%"><center>เลขบัตรประชาชน</center></th>
            <th width="18%"><center>ชื่อร้าน</center></th>
            <th width="9%"><center>เบอร์โทรศัพท์</center></th>
            <th width="5%"><center>ยืนยัน</center></th>
            <th width="6%"><center>ขาด/ครั้ง</center></th>
            <th width="9%"><center>สถานะ</center></th>
            <th width="11%"><center>Action</center></th>
            </tr></thead>
          <tbody>
            @foreach($list as $name)
            <tr>
              <td>{{ $name->lock }}</td>
              <td>{{ $name->name }}</td>
              <td>{{ $name->surname }}</td>
              <td>{{ $name->email }}</td>
              <td>{{ $name->store_name }}</td>
              <td>{{ $name->tel }}</td>
              <?php if($name->come != 1) {?>
                 <td><?php echo "ไม่มา";?></td>
                <?php };?>
              <?php if($name->come == 1) {?>
                 <td><?php echo "มา";?></td>
                <?php };?>

              <td>{{ $name->count }}</td>

              <?php if($name->ban != 1) {?>
                 <td><?php echo "";?></td>
                <?php };?>
              <?php if($name->ban == 1) {?>
                 <td><?php echo "ถูกระงับการใช้งาน";?></td>
                <?php };?>

              <td>
                <a href = "{{route('edit.edit',$name->id)}}" class = "ui mini button">แก้ไขข้อมูล</a>
                <!-- <a href = "{{route('del',$name->id)}}" class = "ui mini button">Delete</a> -->
                <a class="ui mini button" onclick="return confirm('ยืนยันการลบข้อมูลหรือไม่ ? ')" href= "{{route('del',$name->id)}}" >ลบผู้ใช้</a>
              </td>
          
              
            </tr>
            @endforeach
          </tbody>


        </table>


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
      </div> 






      <script>
        $('.ui.modal')
        .modal('attach events', '.test.button', 'show')
        ;

      </script>-->




    </div>

  </body>
</html>
