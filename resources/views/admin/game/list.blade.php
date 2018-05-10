@extends('layouts.metronic')
@section('title', 'Danh sách game')
@section('content')
<table class="table table-stripped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên game</th>
			<th>Ảnh</th>
			<th>Danh mục</th>
			<th>Gía</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@if($games !== null)
			@foreach($games as $g)
			<tr>
				<td>{{$g->id}}</td>
				<td>{{$g->name}}</td>
				<td>
					<img src="{{$g->feature_image}}" width="100" >
				</td>
				<td>{{$g->cate_id}}</td>
				<td>{{$g->price}}</td>
				<td>
					<a href="{{route('game.remove', ['id' => $g->id])}}" class="btn btn-sm btn-danger">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
			@endforeach
		@endif
	</tbody>
</table>
@endsection