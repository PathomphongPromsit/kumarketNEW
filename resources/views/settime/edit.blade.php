@extends('layout')

@section('content')
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
</head>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    แก้ไขการตั้งค่า
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('settime.update', $time->id) }}">
        @method('PATCH')
        @csrf
        <!-- 'Sun''Mon''Tue''Wed''Thu''Fri''Sat' -->
        <div class="form-group">
          <label for="day_ku_night">วันจัดตลาด</label>
          <select name="day_ku_night" style="width:30%">
                <option value={{$time->day_ku_night}} selected="selected">{{$time->day_ku_night}}</option>
                <option value="Sun">อาทิตย์</option>
                <option value="Mon">จันทร์</option>
                <option value="Tue">อังคาร</option>
                <option value="Wed">พุธ</option>
                <option value="Thu">พฤหัสบดี</option>
                <option value="Fri">ศุกร์</option>
                <option value="Sat">เสาร์</option>
            </select>
        </div>

        <div class="form-group">
          <label for="day_of_week_start">วันเปิดระบบ</label>
          <select name="day_of_week_start" style="width:30%">
                <option value={{$time->day_of_week_start}} selected="selected">{{$time->day_of_week_start}}</option>
                <option value="Sun">อาทิตย์</option>
                <option value="Mon">จันทร์</option>
                <option value="Tue">อังคาร</option>
                <option value="Wed">พุธ</option>
                <option value="Thu">พฤหัสบดี</option>
                <option value="Fri">ศุกร์</option>
                <option value="Sat">เสาร์</option>
            </select>
        </div>

        <div class="form-group">
            <label for="time_start">เวลาเปิดระบบ</label>
            <input id="time_start" type="time" name="time_start"  style="width:30%" value={{$time->time_start}}>
        </div>

        <div class="form-group">
          <label for="day_of_week_stop">วันปิดระบบ</label>
          <select name="day_of_week_stop" style="width:30%">
                <option value={{$time->day_of_week_stop}} selected="selected">{{$time->day_of_week_stop}}</option>
                <option value="Sun">อาทิตย์</option>
                <option value="Mon">จันทร์</option>
                <option value="Tue">อังคาร</option>
                <option value="Wed">พุธ</option>
                <option value="Thu">พฤหัสบดี</option>
                <option value="Fri">ศุกร์</option>
                <option value="Sat">เสาร์</option>
            </select>
        </div>

        <div class="form-group">
            <label for="time_stop">เวลาปิดระบบ</label>
            <input id="time_stop" type="time" name="time_stop"  style="width:30%" value={{$time->time_stop}}>
        </div>

        <div class="form-group">
          <label for="announce">ประกาศ</label>
          <input type="text" class="form-control" name="announce" value="{{ $time->announce }}" />
        </div>
        <td><a href="{{ route('settime.index')}}" class="ui blue button">กลับ</a></td>
        <button type="submit" class="ui green button">บันทึก</button>
      </form>
  </div>
</div>
@endsection
