<p>Xin chào, {{$model->name}}</p>
<p>Chào mừng bạn đã đến với t3h shop game.</p>
<p>
	Dưới đây là đường dẫn để xác nhận tài khoản của bạn:
</p>
<p>
	<a href="{{ route('verify_user', ['token' => $model->verify_token]) }}">Click here!</a>
</p>