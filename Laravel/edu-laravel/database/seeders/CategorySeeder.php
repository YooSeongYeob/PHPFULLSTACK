<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    // 초기 데이터 생성 더미 데이터 생성에도 쓸 수는 있다
    // 1. 시더 클래스를 생성(database\seeders에 생성) : php artisan make:seeder CategorySeeder
    // 2. database\seeders\DatabaseSeeder->run() 안에 1에서 생성한 시더 클래스를 콜에 추가
    // 3. 1에서 생성한 시더 클래스에 레코드 추가 코드를 작성 해당 런 메소드 안에 작성하면 됨 
    // 4-1. 개별 시더 실행 : php artisan db:seed --class=CategorySeeder
    // 4-2. database\seeders\DatabaseSeeder->run()에 설정된 모든 시더 및 팩토리 실행 : php artisan db:seed

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //쿼리빌드를 이용해서 데이터베이스 입력
        DB::table('Categories')->insert([
             ['no' => '1', 'name' => '카테고리1']
            ,['no' => '2', 'name' => '카테고리2']
            ,['no' => '3', 'name' => '카테고리3']
            ,['no' => '4', 'name' => '카테고리4']
            ,['no' => '5', 'name' => '카테고리5']
            ,['no' => '6', 'name' => '카테고리6']
            ,['no' => '7', 'name' => '카테고리7']
            ,['no' => '8', 'name' => '카테고리8']
        ]);       
    }
}

// USE edu_laravel;

// CREATE TABLE categories (
// 	id BIGINT PRIMARY KEY AUTO_INCREMENT
// 	,NO CHAR(1) NOT NULL UNIQUE
// 	,name VARCHAR(30) NOT NULL UNIQUE
// 	,active_flg CHAR(1) NOT NULL DEFAULT('1')
// 	);
