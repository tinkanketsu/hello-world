@extends('base')
	@section('content')
		<div class="title">Salon List</div>
			<table>
				<tr>
					<th>name</th>
					<th>access</th>
					<th>description</th>
					<th>short_description</th>
					<th>business_hours</th>
					<th>telephone</th>
					<th>wechat_no</th>
					<th>seat_counts</th>
					<th>stylist_counts</th>
					<th>latitude</th>
					<th>longitude</th>
					<th>created_at</th>
					<th>updated_at</th>
					<th>address</th>
				</tr>
			@foreach($shops as $shop)
				<tr>
                	<td><a href="{{action("ShopController@edit", $shop->id)}}">{{{ $shop->name }}}</a></td>
                	<td>{{{ $shop->access }}}</td>
                	<td>{{{ $shop->description }}}</td>
                	<td>{{{ $shop->short_description }}}</td>
                	<td>{{{ $shop->business_hours }}}</td>
                	<td>{{{ $shop->telephone }}}</td>
                	<td>{{{ $shop->wechat_no }}}</td>
                	<td>{{{ $shop->seat_counts }}}</td>
                	<td>{{{ $shop->stylist_counts }}}</td>
                	<td>{{{ $shop->latitude }}}</td>
                	<td>{{{ $shop->longitude }}}</td>
                	<td>{{{ $shop->created_at }}}</td>
                	<td>{{{ $shop->updated_at }}}</td>
                	<td>{{{ $shop->address }}}</td>
				</tr>
			@endforeach
			</table>
		<a href="{{action("ShopController@create")}}">Add new salon</a>
