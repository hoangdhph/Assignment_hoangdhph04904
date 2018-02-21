<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
	<style type="text/css" href="{{asset('css/style.css')}}"></style>
</head>
<body>
	<form action="save-product" method="post" enctype='multipart/form-data'>
		{{ csrf_field() }}
		<input type="text" name="name" value="{{old('name')}}">
		@if(count($errors) > 0)
			<span>{{$errors->first('name')}}</span>
		@endif
		<br>
		<input type="number" name="price" value="{{old('price')}}">
		@if(count($errors) > 0)
			<span>{{$errors->first('price')}}</span>
		@endif
		<br>
		<input type="number" name="sale_price" value="{{old('sale_price')}}">
		@if(count($errors) > 0)
			<span>{{$errors->first('sale_price')}}</span>
		@endif
		<br>
		<input type="text" name="description" value="{{old('description')}}">
		@if(count($errors) > 0)
			<span>{{$errors->first('description')}}</span>
		@endif
		<br>
		<input type="file" name="image" value="{{old('image')}}">
		@if(count($errors) > 0)
			<span>{{$errors->first('image')}}</span>
		@endif
		<br>

		<button type="submit">Submit</button>
	</form>
</body>
</html>