@extends('layouts.app')

@section('content')
<html>
	<head><title>UserPage</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
	</head>
	<body>
	<div id="Add user" class="tabcontent">
	<div class="ui segment">
		<div class="ui card container">
			<div class="content">
				<form class="ui form">
				<!-- 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' -->
					@foreach($times as $time)
						@if($time->day_ku_night == 'Sun')
							<br>ประจำวัน อาทิตย์ ที่
						@endif
						@if($time->day_ku_night == 'Mon')
							<br>ประจำวัน จันทร์ ที่
						@endif
						@if($time->day_ku_night == 'Tue')
							<br>ประจำวัน อังคาร ที่
						@endif
						@if($time->day_ku_night == 'Wed')
							<br>ประจำวัน พุธ ที่
						@endif
						@if($time->day_ku_night == 'Thu')
							<br>ประจำวัน พฤหัสบดี ที่
						@endif
						@if($time->day_ku_night == 'Fri')
							<br>ประจำวัน ศุกร์ ที่
						@endif
						@if($time->day_ku_night == 'Sat')
							<br>ประจำวัน เสาร์ ที่
						@endif
					<br>ประกาศข่าวสาร<br>
					
					<textarea id="announce" name="announce" rows="4" cols="50" readonly value="{{$time->announce}}" >{{$time->announce}} </textarea>
					
					<br><br>
					<form action="">
						<td><a href="{{ route('Setcome',$time->id) }}"><button class="ui primary button" >มา</button></a></td>
						<td><a href="{{ route('Uncome',$time->id) }}"><button class="ui primary button" >ไม่มา</button></a></td>
					</form>
					@endforeach

					<div class="inline field">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
@endsection
