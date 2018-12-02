<table class="ui celled table">
  <thead>
    <th colspan="1" width="10%" >หมายเลขร้าน</th>
    <th colspan="1" width="20%" >ชื่อ</th>
    <th colspan="1" width="20%" >นามสกุล</th>
    <th colspan="1" width="20%" >ชื่อร้าน</th>
    <th colspan="1" width="15%" >เบอร์โทรศัพท์</th>
  </thead>
  <tbody>
        @foreach ($User as $u)
          @if($u->admin != 1)
           @if($u->ban != 1)
            
              <tr>
              <td >{{$u['lock']}}</td>
              <td>{{$u['name']}}</td>
              <td>{{$u['surname']}}</td>
              <td>{{$u['store_name']}}</td>
              <td>{{$u['tel']}}</td>
              </tr>
        
           @endif
          @endif
        @endforeach
    </tbody>
</table>