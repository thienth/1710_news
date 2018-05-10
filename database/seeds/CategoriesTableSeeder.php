<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
        	[
        		'name' => 'Chiến thuật',
        		'slug' => 'chien-thuat'
        	],
        	[
        		'name' => 'Đánh bài',
        		'slug' => 'danh-bai'
        	],
        	[
        		'name' => 'Quiz',
        		'slug' => 'quiz'
        	],
        	[
        		'name' => 'Thời trang',
        		'slug' => 'thoi-trang'
        	]
        ];
        DB::table('categories')->insert($cates);
    }
}
