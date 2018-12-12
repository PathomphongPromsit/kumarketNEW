

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

				     @if ($errors->all())
      	<div class="alert alert-danger">

            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
      </div>
    @endif 


			<div div class="card">

			<form class="ui form" style="margin: 2em;" method="post" action="">
			        <!--@method('PATCH')
        			@csrf-->

	                <div class="field">
    					<label>รหัสผ่านใหม่</label>
    					<input type="text" name="password" placeholder="Password">
  					</div>
  					<div class="field">
    					<label>ยืนยันรหัสผ่านใหม่</label>
    					<input type="text" name="confirm-password" placeholder="Confirm Password">
  					</div>



	                
            		
	                
            		
        		

	               	<a href = "{{route('edit.index')}}"><button class="ui right floated button">กลับ</button></a> 
	                <button type="submit" class="ui right floated button">บันทึก</button>
	    	</form> 
	    	</div>
	    	<br>
 
	    </div>
	</body>
</html>
