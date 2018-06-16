@extends('layout.app')

@section('content')
	<div class="container justify-content-center">
		<div class="card" style="width: 50rem">
			<form>
				<div class="form-group">
				    <label for="exampleFormControlInput1">Product Name</label>
				    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="form-group">
				    <label for="exampleFormControlSelect1">Choose Category</label>
				    <select class="form-control" id="exampleFormControlSelect1">
				      <option>{{$category->name}}</option>
				    </select>
				</div>
				<div class="form-group">
				    <label for="exampleFormControlTextarea1">Example textarea</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
			    <div class="form-group">
				    <label for="image">weka picha</label>
				    <input type="file" class="image" id="image">
				</div>
			</form>
		</div>
	</div>
@endsection