@extends('layout')

@section('content')
<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</head>
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <img width="100%" src="<?php echo asset('img/02.gif'); ?>">
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
        <div class="ui form">
          <div class="inline field">
          <label for="day_ku_night">วันจัดตลาด</label>
          <!-- <select name="day_ku_night" style="width:30%">
                <option value="{{$time->day_ku_night}}" selected="selected">{{$time->day_ku_night}}</option>
                <option value="Sun">อาทิตย์</option>
                <option value="Mon">จันทร์</option>
                <option value="Tue">อังคาร</option>
                <option value="Wed">พุธ</option>
                <option value="Thu">พฤหัสบดี</option>
                <option value="Fri">ศุกร์</option>
                <option value="Sat">เสาร์</option>
            </select> -->
            <select name="day_ku_night">
              <option value="Sun" <?php if ($time->day_ku_night == 'Sun') echo "selected"; ?>>อาทิตย์</option>
              <option value="Mon" <?php if ($time->day_ku_night == 'Mon') echo "selected"; ?>>จันทร์</option>
              <option value="Tue" <?php if ($time->day_ku_night == 'Tue') echo "selected"; ?>>อังคาร</option>
              <option value="Wed" <?php if ($time->day_ku_night == 'Wed') echo "selected"; ?>>พุธ</option>
              <option value="The" <?php if ($time->day_ku_night == 'The') echo "selected"; ?>>พฤหัสบดี</option>
              <option value="Fri" <?php if ($time->day_ku_night == 'Fri') echo "selected"; ?>>ศุกร์</option>
              <option value="Sat" <?php if ($time->day_ku_night == 'Sat') echo "selected"; ?>>เสาร์</option>
          </select> 
          </div>

          <div class="inline field">
          <label for="day_of_week_start">วันเปิดระบบ</label>
          <!-- <select name="day_of_week_start" style="width:30%">
                <option value="{{$time->day_of_week_start}}" selected="selected">{{$time->day_of_week_start}}</option>
                <option value="Sun">อาทิตย์</option>
                <option value="Mon">จันทร์</option>
                <option value="Tue">อังคาร</option>
                <option value="Wed">พุธ</option>
                <option value="Thu">พฤหัสบดี</option>
                <option value="Fri">ศุกร์</option>
                <option value="Sat">เสาร์</option>
            </select> -->
          <select name="day_of_week_start">
              <option value="Sun" <?php if ($time->day_of_week_start == 'Sun') echo "selected"; ?>>อาทิตย์</option>
              <option value="Mon" <?php if ($time->day_of_week_start == 'Mon') echo "selected"; ?>>จันทร์</option>
              <option value="Tue" <?php if ($time->day_of_week_start == 'Tue') echo "selected"; ?>>อังคาร</option>
              <option value="Wed" <?php if ($time->day_of_week_start == 'Wed') echo "selected"; ?>>พุธ</option>
              <option value="The" <?php if ($time->day_of_week_start == 'The') echo "selected"; ?>>พฤหัสบดี</option>
              <option value="Fri" <?php if ($time->day_of_week_start == 'Fri') echo "selected"; ?>>ศุกร์</option>
              <option value="Sat" <?php if ($time->day_of_week_start == 'Sat') echo "selected"; ?>>เสาร์</option>
          </select> 
            *ก่อนวันเปิดตลาด 
          </div>

            <div class="inline field">
            <label for="time_start">เวลาเปิดระบบ</label>
            <input id="time_start" type="time" name="time_start"  style="width:30%" value="{{$time->time_start}}">
          </div>

            <div class="inline field">
          <label for="day_of_week_stop">วันปิดระบบ</label>
          <!-- <select name="day_of_week_stop" style="width:30%">
                <option value="{{$time->day_of_week_stop}}" selected="selected">{{$time->day_of_week_stop}}</option>
                <option value="Sun">อาทิตย์</option>
                <option value="Mon">จันทร์</option>
                <option value="Tue">อังคาร</option>
                <option value="Wed">พุธ</option>
                <option value="Thu">พฤหัสบดี</option>
                <option value="Fri">ศุกร์</option>
                <option value="Sat">เสาร์</option>
            </select> -->
            <select name="day_of_week_stop">
                <option value="Sun" <?php if ($time->day_of_week_stop == 'Sun') echo "selected"; ?>>อาทิตย์</option>
                <option value="Mon" <?php if ($time->day_of_week_stop == 'Mon') echo "selected"; ?>>จันทร์</option>
                <option value="Tue" <?php if ($time->day_of_week_stop == 'Tue') echo "selected"; ?>>อังคาร</option>
                <option value="Wed" <?php if ($time->day_of_week_stop == 'Wed') echo "selected"; ?>>พุธ</option>
                <option value="The" <?php if ($time->day_of_week_stop == 'The') echo "selected"; ?>>พฤหัสบดี</option>
                <option value="Fri" <?php if ($time->day_of_week_stop == 'Fri') echo "selected"; ?>>ศุกร์</option>
                <option value="Sat" <?php if ($time->day_of_week_stop == 'Sat') echo "selected"; ?>>เสาร์</option>
            </select> 
            *หลังวันเปิดระบบ ไม่เกินวันเปิดตลาด
          </div>

            <div class="inline field">
            <label for="time_stop">เวลาปิดระบบ</label>
            <input id="time_stop" type="time" name="time_stop"  style="width:30%" value="{{$time->time_stop}}">
          </div>
          <div class="field">
          <label for="announce">ประกาศ</label>
          <input type="text" class="form-control" name="announce" value="{{ $time->announce }}" />
          </div>
        <button type="submit" class="ui green button">บันทึก</button>
        <td><a href="{{ route('settime.index')}}" class="ui blue button">กลับ</a></td>

      </form>
    </div>
  </div>
</div>
@endsection
