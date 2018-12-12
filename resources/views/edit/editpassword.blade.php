

<html>
	<head><title>Edit</title>
		<script src="{{ asset('js/app.js') }}" defer></script>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  </head>
	<body>
		<div class="ui clearing segment">
			<img width="100%" src="<?php echo asset('img/02.gif'); ?>">
			
			<h3 style="text-align: center">เปลี่ยนรหัสผ่าน</h3>

				<!--     @if ($errors->all())
      	<div class="alert alert-danger">

            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
      </div>
    @endif -->


			<div div class="card">

			<form class="ui form" style="margin: 2em;" method="post" action="{{ route('updatepassword', $list->id) }}">
			        @method('PATCH')
        			@csrf

	                <!--<div class="field">
    					<label>รหัสผ่านใหม่</label>
    					<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    					@if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
  					</div>
  					<div class="field">
    					<label>ยืนยันรหัสผ่านใหม่</label>
    					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

  					</div> -->

  				<div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่านใหม่') }}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่านใหม่') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>



	                
            		
	                
            		
        		

	               	<a href = "{{route('edit.index')}}" class="ui secondary right floated button">กลับ</a> 
	                <button type="submit" class="ui right floated green button">บันทึก</button>
	    	</form> 
	    	</div>
	    	<br>
 
	    </div>
	</body>
</html>
