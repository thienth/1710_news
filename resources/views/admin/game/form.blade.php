@extends('layouts.metronic')
@section('title', 'Tạo mới game')
@section('content')
<div class="col-md-6 col-md-offset-3">
	<form id="gameForm" action="{{route('game.save')}}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{$model->id}}">
		<div class="form-group">
			<label>Tên: </label>
			<input class="form-control" type="text" name="name" value="{{$model->name}}" placeholder="Điền tên trò chơi">
		</div>
		<div class="form-group">
			<label>Danh mục: </label>
			<select name="cate_id" class="form-control">
				@foreach($cates as $c)
				<option value="{{$c->id}}">{{$c->name}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label>Đường dẫn: </label>
			<input class="form-control" type="text" name="slug" value="{{$model->slug}}" placeholder="Đường dẫn website">
		</div>
		<div class="form-group">
			<label>Ảnh đại diện: </label>
			<input class="form-control" type="file" name="feature_image">
		</div>
		<div class="form-group">
			<label>Giá: </label>
			<input class="form-control" type="text" name="price" value="{{$model->price}}" placeholder="Giá trò chơi">
		</div>
		<div class="form-group">
			<label>Mô tả: </label>
			<textarea name="description" class="form-control">{{$model->description}}</textarea>
		</div>
		<div class="text-center">
			<button class="btn btn-primary">Lưu</button>
			<a href="{{ route('game.list') }}" class="btn btn-danger">Huỷ</a>
		</div>

	</form>
</div>


@endsection
@section('js')
<script type="text/javascript">
	var checkSlug = true;
	$.validator.addMethod("thienth", function(value, element, option) {
		console.log(value, element, option)

		$.ajax({
			url: option[1],
			method: "POST",
			data: {
				id: option[0] == "" ? -1 : option[0],
				slug: value
			},
			dataType: "JSON",
			success: function(res){
				console.log(res);
			}
		})

	  return false;
	}, "Thienth Rule luon tra ve false");

	$('#gameForm').validate({
		rules: {
			name: {
				required: true,
				maxlength: 20
			},
			slug: {
				required: true,
				thienth: ['{{$model->id}}', '{{route('game.checkSlug')}}']
			},
			feature_image: {
				extension: "jpg|png|gif"
			},
			price: {
				required: true,
				min: 0
			}
		},
		messages: {
			name: {
				required: 'Vui lòng nhập tên trò chơi',
				maxlength: 'Độ dài không vượt quá 10 ký tự'
			},
			slug:{
				required: 'Vui lòng nhập đường dẫn'
			},
			feature_image: {
				extension: "Không đúng định dạng ảnh"
			},price: {
				required: 'Vui lòng nhập giá bán trò chơi',
				min: 'Giá không được nhỏ hơn 0'
			}
		}
	});
</script>
@endsection









