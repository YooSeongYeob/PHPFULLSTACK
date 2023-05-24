<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\CategorySeeder; // 시더 use 얘를 설정했으니 시더들이 밑에 데이터 삽입 호출을 하면 쭉 생성이 된다고 함

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 초기 데이터 삽입용 시더 호출
        // $this->call(CategorySeeder::class);


        // 더미 데이터 삽입용 팩토리 호출
        $cnt = 0;
        while( $cnt <= 5) {
            \App\Models\Board::factory(10000)->create();
            $cnt++;
        }
        // 1만 건씩 쪼개고 루프를 이용해서 돌림
        // forx while로 가능 반목문
        
        // \App\Models\User::factory(10)->create();
        // 해당 모델 클래스를 기준으로 팩토리를 만든다 몇 개를 만들건지
        
    }   
}
