<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	 @if(session('message'))

         <p class ="alert alert-success">
          {{session('message')}}
         </p>
          
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="container">
		<br><br>
		<h1 class="text-warning">User form</h1>

	<form method="post" action="{{url('#')}}">
		{{csrf_field()}}
		<div class="form-group">
			<label>Name:</label>
			<input type="text" name="name"  class="form-control">
		</div>

		<div class="form-group">
			<label>Pincode:</label>
			<input type="text" name="pincode"  class="form-control">
		</div>

		<div class="form-group">
			<label>Email:</label>
			<input type="email" name="email"  class="form-control">
		</div>

		<input type="submit" name="submit" value="submit" class="btn btn-info">
			





		</form>
		

	</div>

</body>
</html>