<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    // migration 파일 생성 : php artisan make:migration create_boards_table
    // migration 실행(모든 migration 파일의 up()메소드를 실행) : php artisan migrate
    // php artisan migrate로 데이터베이스 만들기 가능 라라벨 자체에서 관리 가능해서 배포 작업이 편해짐
    // build 하는 작업이 굉장히 빨라짐
    // migration reset(모든 migration 파일의 down()메소드를 실행 : php artisan migrate:reset 마이그레이션 자체를 없애버려서 테이블을 드랍해버림)
    // migration rollback(가장 마지막에 실행한 migration의 내용을 롤백 : php artisan migrate:rollback 가장 최근의 시점으로 돌아가는 것) 

    // 시더-초기 데이터
    // 팩토리-랜더 테스트 데이터 많이 넣음

    //  border table 유저가 작성하는 거고 팩토리를 이용할거임 더미 데이터를 위해
    //  카테고리 테이블은 정해져있으니 시더로
    // 시더가 더 쉬움 


    // 시더 (초기 데이터 생성) : database\seeders의 각 클래스 파일 확인
    // 팩토리 (더미 데이터 생성) : database\factories의 각 클래스 파일을 확인

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->char('no', 1)->unique();
            $table->string('name', 30)->unique();
            $table->char('active_flg', 1)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
