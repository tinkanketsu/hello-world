@extends('base')
	@section('content')
		<div class="title">Edit shop</div>
		
		@if ($errors->any())
		<div>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		
		<form action="{{ action("ShopController@update", $shop->id) }}" method="post"><br>
			<input type="hidden" name="_token" value="{{ csrf_token()}}"/>
			<label>name<input type="text" name="name" value="{{$shop->name}}" /></label><br>
			<label>access<input type="text" name="access" value="{{$shop->access}}" /></label><br>
			<label>description<input type="text" name="description" value="{{$shop->description}}" /></label><br>
			<label>short_description<input type="text" name="short_description" value="{{$shop->short_description}}" /></label><br>
			<label>business_hours<input type="text" name="business_hours" value="{{$shop->business_hours}}" /></label><br>
			<label>telephone<input type="text" name="telephone" value="{{$shop->telephone}}" /></label><br>
			<label>wechat_no<input type="text" name="wechat_no" value="{{$shop->wechat_no}}" /></label><br>
			<label>seat_counts<input type="text" name="seat_counts" value="{{$shop->seat_counts}}" /></label><br>
			<label>stylist_counts<input type="text" name="stylist_counts" value="{{$shop->stylist_counts}}" /></label><br>
			<label>latitude<input type="text" name="latitude" value="{{$shop->latitude}}" /></label><br>
			<label>longitude<input type="text" name="longitude" value="{{$shop->longitude}}" /></label><br>
			<label>address<input type="text" name="address" value="{{$shop->address}}" /></label><br>
			<input type="submit" value="save" />
		</form>
