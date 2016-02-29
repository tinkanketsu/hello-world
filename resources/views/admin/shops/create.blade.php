@extends('base')
	@section('content')
		<div class="title">Add new shop</div>
		@if ($errors->any())
		<div>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		
		<form action="{{ action("ShopController@store") }}" method="post"><br>
			<input type="hidden" name="_token" value="{{ csrf_token()}}"/>
			<label>name<input type="text" name="name" value="{{Input::old('name')}}" /></label><br>
			<label>access<input type="text" name="access" value="{{Input::old('access')}}" /></label><br>
			<label>description<input type="text" name="description" value="{{Input::old('description')}}" /></label><br>
			<label>short_description<input type="text" name="short_description" value="{{Input::old('short_description')}}" /></label><br>
			<label>business_hours<input type="text" name="business_hours" value="{{Input::old('business_hours')}}" /></label><br>
			<label>telephone<input type="text" name="telephone" value="{{Input::old('telephone')}}" /></label><br>
			<label>wechat_no<input type="text" name="wechat_no" value="{{Input::old('wechat_no')}}" /></label><br>
			<label>seat_counts<input type="text" name="seat_counts" value="{{Input::old('seat_counts')}}" /></label><br>
			<label>stylist_counts<input type="text" name="stylist_counts" value="{{Input::old('stylist_counts')}}" /></label><br>
			<label>latitude<input type="text" name="latitude" value="{{Input::old('latitude')}}" /></label><br>
			<label>longitude<input type="text" name="longitude" value="{{Input::old('longitude')}}" /></label><br>
			<label>address<input type="text" name="address" value="{{Input::old('address')}}" /></label><br>
			<input type="submit" value="save" />
		</form>
