@extends('layouts.client')
@section('title', 'Trang chủ!')
@section('content')
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Image</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($people as $p)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$p['name']}}</td>
				<td>{{ $p['gender'] == 1 ? "Male" : "Female"}}</td>
				<td>
					<img src="{{ asset($p['image']) }}" width="200">
				</td>
				<td>
					<a href="{{ route('homepage', ['slug' => $p['name']]) }}" class="btn btn-info">Edit</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
@section('js')
	<script>
		console.log('chay tu file homepage')
	</script>
@endsection