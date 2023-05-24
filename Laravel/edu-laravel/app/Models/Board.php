<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    // 모델 생성 : php artisan make:model board -mfs
    // [-mfs] 옵션으로 migration, factory, seeder를 한 번에 생성

    // 팩토리만 사용한다고 하면 나머지는 다 디폴트 값으로 정의 됨
    // 테이블 정의(정의하지 않을 경우에는 클래스 명의 복수형을 암묵적으로 정의하고 인식) 
    protected $table ='boards'; // 변수 명 정해져있다고 함


    // PK 정의 (정의하지 않을 경우에는 'id' 컬럼을 PK로 인식 ) 
    protected $primaryKey ='bno';

    // 대량 할당을 이용한 취약성 대책 
    // 1. 화이트 리스트 방식 : 수정할 수 있는 컬럼을 설정
    // protected $fillable = ['컬럼1','컬럼2']; // 수정이 가능한 컬럼들의 이름 기재

    // 2. 블랙리스트 방식 : 수정할 수 없는 컬럼을 설정
    // protected $guarded = ['컬럼1','컬럼2'];
    protected $guarded = [];
    
    // 둘 중에 하나만 설정해야 함 그렇지 않으면 에러가 남 (라라벨이 그냥 그렇게 정함)

    // 편법 protectd $guarded = []; 아예 배열 비워버림
    // 대신 ORM을 잘 짜야 함

    // 엘로퀀트나 쿼리빌드 둘 중에 하나 사용하면 됨
    // 팩토리 아니면 쓸 일 없다 함
}
