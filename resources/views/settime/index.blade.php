<head><title>Settime</title><link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
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

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>วันจัดตลาด</td>
          <td>วันเปิดระบบ</td>
          <td>เวลาเปิดระบบ</td>
          <td>วันปิดระบบ</td>
          <td>เวลาปิดระบบ</td>
          <td>ประกาศ</td>
          <td colspan="1">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($times as $time)
        <tr>
            <td>{{$time->id}}</td>
            <td>{{$time->day_ku_night}}</td>
            <td>{{$time->day_of_week_start}}</td>
            <td>{{$time->time_start}}</td>
            <td>{{$time->day_of_week_stop}}</td>
            <td>{{$time->time_stop}}</td>
            <td>{{$time->announce}}</td>
            <td><a href="{{ route('settime.edit',$time->id)}}" class="btn btn-primary">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection