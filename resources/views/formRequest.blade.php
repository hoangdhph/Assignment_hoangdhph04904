<!DOCTYPE html>
<html>
<head>
	<title>formRequest</title>
	<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	$(document).ready(function(){
  		$("#addimages").click(function(){
  			$('#images').append("<input type='file' name='images[]'> <br><input type='text' name='text[]'> <br>")
  		});
  	});
  </script>
</head>
<body>
 	<form action="{{route('formsubmit')}}" method="post" enctype="multipart/form-data" novalidate="">
 		{{ csrf_field() }}
<!-- 		{{count($errors)}}
 		Username	<input type="text" name="username" value="{{old('username')}}">
 		@if (count($errors) > 0)
 			<span>{{$errors->first('username')}}</span>
 		@endif
 		<br>
 		Email	<input type="email" name="email"><br>
 		Password 	<input type="password" name="password"><br>
 		Confirm password 	<input type="password" name="confirmpass"> -->
		<button id="addimages" type="button">Add Images</button>
		<div id="images">
			<input type='file' name='images[]'> <br>
			<input type='text' name='text[]'> <br>
		</div>

	
 		<button type="submit">Submit</button>
 	</form>
</body>
</html>