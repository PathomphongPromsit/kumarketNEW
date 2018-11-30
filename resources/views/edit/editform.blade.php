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
			<h3 style="text-align: center">Edit Form</h3>
			<div div class="card">
			<form class="ui form" style="margin: 2em;" method="post" action="{{ route('edit.update', $list->id) }}">
			        @method('PATCH')
        			@csrf	
	                <div class="field">
	                  <label>Name</label>
	                  <div class="two fields">
	                    <div class="field">
	                      <input type="text" class="form-control" name="name" placeholder="First Name" value={{ $list->name }} />
	                    </div>
	                    <div class="field">
	                      <input type="text" class="form-control" name="surname" placeholder="Last Name" value={{ $list->surname }} />
	                    </div>
	                  </div>
	                </div>

	                <div class="field">
	                  <label>Personal Info</label>
	                  <div class="two fields">
	                    <div class="field">
	                      <input type="text" class="form-control" name="email" placeholder="Personal ID" value={{ $list->email }} />
	                    </div>
	                    <div class="field">
	                      <input type="text" class="form-control" name="tel" placeholder="Telephone" value={{ $list->tel }} />
	                    </div>
	                  </div>
	                </div>

	                <div class="field">
	                  <label>Shop Info</label>
	                  <div class="two fields">
	                    <div class="field">
	                      <input type="text" class="form-control" name="store_name" placeholder="Store Name" value={{ $list->store_name}} />
	                    </div>
	                    <div class="field">
	                      <input type="text" class="form-control" name="lock" placeholder="Shop Zone Number" value={{ $list->lock }} />
	                    </div>
	                  </div>
	                </div>

	                <label for="come">สถานะ</label>
          			<select name="come" style="width:30%">
          				<option value={{$list->come}} selected="selected">{{$list->come}}</option>
                		<option value = "1">มา</option>
                		<option value = " ">ไม่มา</option>
            		</select>
        	</div>

	               	<a href = "{{route('edit.index')}}"><button class="ui right floated button">Back</button></a> 
	                <button type="submit" class="ui right floated button">Approve</button>
	    	</form> 
	    	</div>
	    	<br>
     
	    </div>
	</body>
</html>