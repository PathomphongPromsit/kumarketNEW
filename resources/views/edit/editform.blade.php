

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
			
			<h3 style="text-align: center">แบบฟอร์มแก้ไขข้อมูล</h3>

				    @if ($errors->all())
      	<div class="alert alert-danger">

            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        
      </div>
    @endif

			<div div class="card">

			<form class="ui form" style="margin: 2em;" method="post" action="{{ route('edit.update', $list->id) }}">
			        @method('PATCH')
        			@csrf	
	                <div class="field">
	                  <!-- <label>ชื่อ-นามสกุล</label> -->
	                  <div class="two fields">
	                    <div class="field">
	                    	<label>ชื่อ</label>
	                      <input type="text" class="form-control" name="name" placeholder="First Name" value="{{ $list->name }}" />
	                    </div>
	                    <div class="field">
	                    	<label>นามสกุล</label>
	                      <input type="text" class="form-control" name="surname" placeholder="Last Name" value="{{ $list->surname }}" />
	                    </div>
	                  </div>
	                </div>

	                <div class="field">
	                  <!-- <label>บัตรประชาชน-เบอร์โทรศัพท์</label> -->
	                  <div class="two fields">
	                    <div class="field">
	                    	<label>บัตรประชาชน</label>
	                      <input type="text" class="form-control" name="email" placeholder="Personal ID" value="{{ $list->email }}" />
	                    </div>
	                    <div class="field">
	                    	<label>เบอร์โทรศัพท์</label>
	                      <input type="text" class="form-control" name="tel" placeholder="Telephone" value="{{ $list->tel }}" />
	                    </div>
	                  </div>
	                </div>

	                <div class="field">
	                  <!-- <label>ชื่อร้านค้า-เลขล็อค</label> -->
	                  <div class="two fields">
	                    <div class="field">
	                    	<label>ชื่อร้านค้า</label>
	                      <input type="text" class="form-control" name="store_name" placeholder="Store Name" value="{{ $list->store_name}}" />
	                    </div>
	                    <div class="field">
	                    	<label>เลขล็อค</label>
	                      <input type="text" class="form-control" name="lock" placeholder="Shop Zone Number" value="{{ $list->lock }}" />
	                    </div>
	                  </div>
	                </div>

	                <div class="field">
	                	<label for="count">จำนวนครั้งที่ขาด</label>
	                	<div class="two fields">
	                		<div class="field">
          						<input type="number" min="0" class="form-control" name="count" placeholder="Not Come" value="{{ $list->count }}" />
            				</div>
            				
            			</div>
            			</div>
					<label for="come">สถานะยืนยัน</label>
            		<div class="field">
						<select name="come" style="width:30%">
          							<option value = "{{$list->come}}" selected="selected">{{$list->come}}</option>
                					<option value = "1">มา</option>
                					<option value = " ">ไม่มา</option>
            					</select>
	                    </div>
	                
            		
        		

	               	<a href = "{{route('edit.index')}}"><button class="ui right floated button">กลับ</button></a> 
	                <button type="submit" class="ui right floated button">บันทึก</button>
	    	</form> 
	    	</div>
	    	<br>
 
	    </div>
	</body>
</html>
