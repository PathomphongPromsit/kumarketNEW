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
						@foreach($times as $time)
						<!-- 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' -->
						<!-- 'day_ku_night','day_of_week_start','time_start','day_of_week_stop','time_stop','announce' -->
						<?php
							//market_date('Tue') = D-d-M-Y ex.Tue-27-Nov-2018
							function market_date($day_ku_night){
								if($day_ku_night == 'Sun'){
									$Day = "Sunday";
									$dateDay = "next ".$Day;
									if(date('D') == 'Sun')
										return date('d-m-Y', strtotime("now"));
									else
										return date('d-m-Y', strtotime($dateDay));
								}
								
								if($day_ku_night == 'Mon'){
									$Day = "Monday";
									$dateDay = "next ".$Day;
									if(date('D') == 'Mon'){
										return date('d-m-Y', strtotime("now"));
									}
									else{
										return date('d-m-Y', strtotime($dateDay));
									}
								}
								
								if($day_ku_night == 'Tue'){
									$Day = "Tuesday";
									$dateDay = "next ".$Day;
									if(date('D') == 'Tue'){
										return date('d-m-Y', strtotime("now"));
									}
									else{
										return date('d-m-Y', strtotime($dateDay));
									}
								}
								
								if($day_ku_night == 'Wed'){
									$Day = "Wednesday";
									$dateDay = "next ".$Day;
									if(date('D') == 'Wed'){
										return date('d-m-Y', strtotime("now"));
									}
									else{
										return date('d-m-Y', strtotime($dateDay));
									}
								}
								
								if($day_ku_night == 'Thu'){
									$Day = "Thursday";
									$dateDay = "next ".$Day;
									if(date('D') == 'Thu'){
										return date('d-m-Y', strtotime("now"));
									}
									else{
										return date('d-m-Y', strtotime($dateDay));
									}
								}

								if($day_ku_night == 'Fri'){
									$Day = "Friday";
									$dateDay = "next ".$Day;
									if(date('D') == 'Fri'){
										return date('d-m-Y', strtotime("now"));
									}
									else{
										return date('d-m-Y', strtotime($dateDay));
									}
								}

								if($day_ku_night == 'Sat'){
									$Day = "Saturday";
									$dateDay = "next ".$Day;
									if(date('D') == 'Sat'){
										return date('d-m-Y', strtotime("now"));
									}
									else{
										return date('d-m-Y', strtotime($dateDay));
									}
								}
							}

							//startServerTime($start_day,$marker_date,$start_time) // Wed,11-26-2018,23:00
							//echo date('d-m-Y', strtotime('last Sun', strtotime('26-11-2018')));
							function startServerTime($start_day,$start_date,$start_time){
								$str_last_Day = "last ".$start_day;
								$date_start = date('d-m-Y', strtotime($str_last_Day, strtotime($start_date)));
								$startServerTime = $date_start." ".$start_time;
								return $startServerTime;
							}

							function stopServerTime($stop_day,$stop_date,$stop_time){
								$str_last_Day = "last ".$stop_day;
								$date_stop = date('d-m-Y', strtotime($str_last_Day, strtotime($stop_date)));
								$stopServerTime = $date_stop." ".$stop_time;
								return $stopServerTime;
							}

							//CurrentTime() = 2010-07-28 15:00
							function CurrentTime(){
								return(date("Y-m-d H:i",time()));
							}

							// DateTimeDiff("01-07-2018 15:00","01-07-2018 15:11","01-07-2018 19:30") = Yes
							function DateTimeDiff($strat,$cuurent,$stop){
								$n1 = (strtotime($cuurent) - strtotime($strat))/(60*60);
								$n2 = (strtotime($cuurent) - strtotime($stop))/(60*60);
								if($n1>0 && $n2<0){
								$intime = "Yes";
								return $intime;
								}else{
								$intime = "No";
								return $intime;
								}
							}
							//martket
							$market_date = market_date($time->day_ku_night);
							$str_market_date ="ประจำวันที่ ".$time->day_ku_night. " ".$market_date;
							//start
							$start_time = startServerTime($time->day_of_week_start,$market_date,$time->time_start);
							$str_open = "เวลาเปิดระบบ ".$time->day_of_week_start." ".$start_time;
							//stop
							$stop_time = stopServerTime($time->day_of_week_stop,$market_date,$time->time_stop);
							$str_close = "เวลาปิดระบบ ".$time->day_of_week_stop." ".$stop_time;
							//current
							$current_time = CurrentTime();

							echo $str_market_date;
							echo "<br>";
							echo $str_open;
							echo "<br>";
							echo $str_close;
						?>
						<form class="ui form">
							<br>
							ประกาศข่าวสาร
							<br>
							<textarea id="announce" name="announce" rows="4" cols="50"  readonly value="{{$time->announce}}" >{{$time->announce}} </textarea>
							<br>
							<br>
							<?php if(auth()->user()->isAdmin == 1){?>
								<form action="">
									<td><button class="ui primary button" >TEST</button></td>
								</form>
							<?php };?>
							<?php if(auth()->user()->isAdmin != 1){?>
								<form action="">
									<td><a href="{{ route('Setcome',$time->id) }}"><button class="ui primary button" >มา</button></a></td>
									<td><a href="{{ route('Uncome',$time->id) }}"><button class="ui primary button" >ไม่มา</button></a></td>
								</form>
							<?php };?>
							<div class="inline field">
						</form>
						@endforeach
					</div>	
				</div>
			</div>
		</div>
	</body>
</html>
@endsection
