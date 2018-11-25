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
					<br>ประจำวันที่ xxx<br>
					<br>ประกาศข่าวสาร<br>
					@foreach($times as $time)
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
