@extends('layouts.app')

@section('content')
<html>
	<head><title>UserPage</title></head>
	<body>
	<div id="Add user" class="tabcontent">
	<div class="ui segment">
		<div class="ui card container">
			<div class="content">
				<form class="ui form">
					<br>ประจำวันที่ xxx<br>
					<br>ประกาศข่าวสาร<br>
					@foreach($times as $time)
					<textarea id="announce" name="announce" rows="4" cols="50" readonly value="{{$time->announce}}" >{{$time->announce}} </textarea>
					@endforeach
					<br><br>
					<form action="">
						<input type="radio" name="come" value="1"> มา<br>
						<input type="radio" name="come" value="0"> ไม่มา<br>
					</form>

					<div class="inline field">
						<input id="submit" type=button value="บันทึก"/>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
@endsection
