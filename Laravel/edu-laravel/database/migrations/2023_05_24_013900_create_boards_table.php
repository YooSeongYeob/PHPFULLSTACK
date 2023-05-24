<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 생성 : php artisan make:migration create_boards_table
    // migration 실행 : php artisan migrate
    // 옵션으로 해당 설정만 가능하게 해둠


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글 번호(PK), 제목, 내용, 삭제 일자, 삭제여부, 작성일, 수정일
            $table->id('bno'); // big_int, pk, auto_increment
            $table->char('category', 1)->index(); // index 추가 - index는 속도 빠르게 하기 위해 설정해주는 것 mariaDB도 같음 검색속도 엄청 빠름 15% 이하만 효과적 15% 넘어가면 풀 스캔 해버림 시스템이
            $table->string('btitle', 100); // varchar = string (varchar 생성해줬고, not null 기본 값)
            // varchar 기본값은 200자
            $table->string('bcontent', 4000); // varchar = string (varchar 생성해줬고, not null 기본 값)
            // varchar 최대 4000자, 그 이상은 블록데이터 사용하라고 함
            $table->timestamps(); // created_at, updated_at을(를) 생성, null 허용
            $table->timestamp('deleted_at')->nullable();
            $table->char('deleted_flg', 1)->default('0'); // char(1), default '0', notnull임 nullable을 안 줬기 때문 문자열인지 숫자인지 중요하다고 함
            // char(캐릭터) > enum(이넘) > int(인트) 처리 속도 캐릭터가 제일 빠름 액티브 플래그는 1이 활성화 0이 비활성화 컬럼명에 따라 의미하는 숫자가 다름 0과 1
        });
    }

    // migration 파일 생성 : php artisan make:migration create_boards_table
    // migration 실행(모든 migration 파일의 up()메소드를 실행) : php artisan migrate
    // php artisan migrate로 데이터베이스 만들기 가능 라라벨 자체에서 관리 가능해서 배포 작업이 편해짐
    // build 하는 작업이 굉장히 빨라짐
    // migration reset(모든 migration 파일의 down()메소드를 실행 : php artisan migrate:reset 마이그레이션 자체를 없애버려서 테이블을 드랍해버림)
    // migration rollback(가장 마지막에 실행한 migration의 내용을 롤백 : php artisan migrate:rollback 가장 최근의 시점으로 돌아가는 것) 


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};