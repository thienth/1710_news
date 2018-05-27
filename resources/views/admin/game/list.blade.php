@extends('layouts.metronic')
@section('title', 'Danh sách game')
@section('content')
<form class="form-inline" role="form">
    <div class="form-group">
      
      <input type="text" class="form-control" value="{{$keyword}}" name="keyword" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-info">
    	<span class="glyphicon glyphicon-search"></span>
    </button>
  </form>
<table class="table table-stripped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên game</th>
			<th>Ảnh</th>
			<th>Danh mục</th>
			<th>Gía</th>
			<th>
				<a href="{{route('game.add')}}" class="btn btn-success">
					<span class="glyphicon glyphicon-plus"></span>
					 Add
				</a>
			</th>
		</tr>
	</thead>
	<tbody>
		@if($games !== null)
			@foreach($games as $g)
			<tr>
				<td>{{$g->id}}</td>
				<td>{!! $g->name !!}</td>
				<td>
					<img src="{{asset($g->feature_image)}}" 
						onerror="this.src='{{asset('default-image.jpg')}}'" 
					 width="100" >
				</td>
				<td>{{$g->cate_id}}</td>
				<td>{{$g->price}}</td>
				<td>
					<a href="{{route('game.edit', ['id' => $g->id])}}" class="btn btn-primary btn-sm">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
					<a href="{{route('game.remove', ['id' => $g->id])}}" class="btn btn-sm btn-danger">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
			@endforeach
			<tr>
				<td class="text-right" colspan="5">
					{{$games->links()}}
				</td>
			</tr>
		@endif
	</tbody>
</table>
@endsection