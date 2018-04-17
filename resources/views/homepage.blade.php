Hello world, {{$name}} - {{$age}} tuoi!
<p>
	Gioi tinh:  @if($gender == 1)
					Nam
				@elseif($gender == 2)
					Nu
				@else
					Khac
				@endif
</p>
<p>{!! $bio !!}</p>

@foreach ($arr as $element)
	<p>{{$loop->remaining}} => {{$element}}</p>
@endforeach
