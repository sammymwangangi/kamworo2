@extends('layouts.app')

@section('content')
	<div class="container justify-content-center">
		<h4><b>Create Product</b></h4>
			<form>
				<div class="form-group">
				    <label for="exampleFormControlInput1">Product Name</label>
				    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="form-group">
				    <label for="exampleFormControlSelect1">Choose Category</label>
				    <select class="form-control" id="exampleFormControlSelect1">
				      <option>1</option>
				      <option>2</option>
				      <option>3</option>
				      <option>4</option>
				    </select>
				</div>
				<div class="form-group">
				    <label for="exampleFormControlTextarea1">Example textarea</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
			    <div class="form-group">
				    <input type="file" class="image" id="image">
				</div>
			</form>
		
	</div>
@endsection