<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Mail;

class RegisterController extends Controller
{
    public function index(){
		return view('auth.register');
    }

    public function createUser(Request $rq){
    	$rq->validate([
    		'name' => 'required|max:50',
    		'email' => 'required|email|unique:users',
    		'password' => 'required',
    		'cfpassword' => 'required|same:password'
    	],
    	[
    		'name.required' => 'Vui lòng nhập tên',
    		'name.max' => 'Tên không vượt quá 50 ký tự',
    		'email.required' => 'Vui lòng nhập email',
    		'email.email' => 'Vui lòng nhập đúng định dạng email',
    		'email.unique' => 'Email đã tồn tại',
    		'password.required' => 'Vui lòng nhập mật khẩu',
    		'cfpassword.required' => 'Vui lòng nhập nhắc lại mật khẩu',
    		'cfpassword.same' => 'Mật khẩu và nhắc lại mật khẩu không khớp',
    	]
    	);
    	$model = new User();
    	$model->fill($rq->all());
    	$model->password = Hash::make($rq->password);
    	$model->active = 0;
    	$model->verify_token = str_random(40);
    	if($model->save()){
    		Mail::send('emails.verify_user', ['model' => $model], function ($message) use ($model) {
    		    $message->from('admin@gmail.com', 'Quản trị viên');
    		
    		    $message->to($model->email, $model->name);
    		
    		    $message->subject('Xác nhận đăng ký tài khoản');
    		
    		});
    		return 'Vui lòng kiểm tra email để xác nhận đăng ký tài khoản';
    	}else{
    		return view('auth.register');
    	}
    }

    public function verify($token){
    	$user = User::where('verify_token', $token)->first();
    	if($user){
    		$user->active = 1;
    		$user->save();
    		return 'Chúc mừng bạn đã xác nhận tài khoản thành công! Vui lòng đăng nhập!';
    	}

    	return 'Đường dẫn không tồn tại!';
    }
}
