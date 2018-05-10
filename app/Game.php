<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

	// trong trường hợp website có sử dụng nhiều hơn 1 db
	// tiến hành tạo connection mới trong file config/database.php
	// Model thuộc về connection nào thì tạo biến $connection và gán gía trị bằng tên connection vào đây.
	// protected $connection = 'mysql2';
    protected $table = 'games';

    // public $primaryKey = 'PK';
    // public $primaryKey = ['PK1', 'PK2'];
    
    // Thêm vào trong trường hợp bảng không có 2 cột updated_at và created_at
    // public $timestamps = false;
    
}
