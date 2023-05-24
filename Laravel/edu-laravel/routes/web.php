<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//--------------------
// 라우트 정의
//--------------------
// 문자열 리턴
// Route::get('/hi',function(){
//     return '안녕하세요';
// });

// 문자열로 리턴하지는 않고 보통은 뷰로 리턴한다
// 리다이렉트를 하거나 

// 뷰 리턴 ( 뷰 파일이 없으면 에러 발생, 디버그 모드 설정이 false면 500 에러, true면 에러의 상세정보 출력)
// 작업할 때는 디버그 설정 false로 해야 한다
// Route::get('/myview', function() {
//     return view('myview');
// });

//----------------------------
// HTTP 메소드 대응하는 라우터
// 여러 라우터에 해당될 경우 가장 마지막에 정의 된 것이 실행 
//----------------------------
Route::get('/home', function(){
    return view('home');
});

// GET 요청에 대한 처리 
Route::get('/method', function() {
    return 'GET Method!!';
});

// POST 요청에 대한 처리
Route::post('/method',function () {
    return 'POST Method!!';
});

// PUT 요청에 대한 처리
Route::put('/method', function() {
    return 'PUT Method!!';
});


// DELETE 요청에 대한 처리
Route::delete('/method', function() {
    return 'DELETE Method!!';
});

// MVC 모델에서는 어플리케이션에서 분류했었음
// 겟으로 오는지 포스트로 오는지 메소드명에 붙였는데
// 라라벨은 그렇게 안 해도 다 알아서 처리해줌 커널에서 처리를 함
// 커널로 구분을 하게 됨

// 겟(셀렉트) 포스트(db에 없는 정보를 디비 인서트) 풋(기존에 있던 데이터 업데이트) 딜리트(삭제) 메소드를 많이 사용함
// 패치라던가 다른 것도 있지만 
// 위에 4개 메소드만 사용
// 경우에 따라 겟, 포스트만 사용하기도 함


// 모든 요청에 대한 처리 겟, 포스트, 풋, 딜리트 상관없이 처리 함
Route::any('/method', function() {
    return 'ANY Method';
});
// ANY를 사용해도 프로그래밍 언어 특성상 
// 라우터의 정의된 순서에 따라서 실행 순서가 달라짐
// 애니가 최상단에 가면 애니가 무용지물이 된다
// 그래서 애니를 쓸 경우 가장 마지막에 라우트를 설정해줘야 함
// 중복되는 라우터 생성하면 안 됨
// ANY 자체를 잘 안 씀
// 각각의 역할이 다 있기 때문임
// 미들웨어의 기능을 사용해야 함 애니 말고

// 미들웨어는 이후에 배우게 됨

// 여러 메소드 중에 특정 메소드 요청에 대해서만 처리
Route::match(['get', 'post'], '/method', function() {
    return 'MATCH Method';
});
// 파라미터가 3개임 처음은 배열 처리하고 싶은 종류만 넣게 됨
// 겟이나 포스트 배열을 넣어주고 뒤에는 기존과 똑같이 메소드에 클로저를 작성

//-------------------------
// 라우트에서 파라미터 제어 
//-------------------------
// 파라미터 받는 방법 2가지인데 보내는 방법 리퀘스트 방법
// 쿼르스트링 겟 방법이 있고 세그먼트로 지정하는 방법
// 서브디렉터리를 세그먼트 방식이라고 함 localhost/home / 이 홈이 세그먼트

// 쿼리스트링으로 파라미터 획득
// 일단 겟 url 제일 뒤에 물음표 키는 값 형태
Route::get('/query', function(Request $request) {
     return $request->id.", ".$request->name;
});

// http://localhost/query?id=admin&name=kim&age=20 쿼리 스트링 방식

// 겟 포스트 풋 딜리트 메소드 방식과는 상관 없이 데이터 받아올 수 있음
// 변수를 데이터에 대해 정의해줌
// php 5. 번대에서 타입이 처음 도입 7버전에서 모든 타입에 대해 제공하게 됨
// 변수에 데이터 타입을 리퀘스트로 하겠다 지정해주는 것 
// 쿼리 스트링으로 온 건 바로 사용 불가
// 리퀘스트로 온 것을 받아주는 변수를 파라미터로 적어줘야 함
// Request는 클래스임 
// 클래스는 바로 사용 불가
// 포스트로 보내도 똑같은 방식으로 받아올 수 있음

// URL 세그먼트로 지정한 파라미터 획득하는 방식
Route::get('/segment/{id}', function($id){
    return 'SEGMENT ID : '.$id;
});
// 이런 형태로 보내겠다는 의미
// api 형태로 많이 넘어오는 방식이라고 함
// http://localhost/segment/17 or asdad or 안녕하세요 이런 방식

// route가 url로 접속하겠다라는 말
// 세그먼트 파라미터를 지정했을 때 값이 없으면 404 error 뜸
// 쿼리스트링과의 차이점임

// URL 세그먼트로 지정 파라미터 획득 : 기본값 설정
Route::get('/segment2/{id?}', function($id = 'base') {
    return 'segment2 ID :'.$id;
}); 
// 클로저 방식

// http method로 통신을 못하는 부분이 있기 때문에
// api 통신이 필수

// 타이핑트를 주고 리퀘스트를 하면 라라벨이 알아서 세팅을 함 
// 겟이든 풋이든 포스트 쿼리스트링 세그먼트 ,딜리트 상관 없이 설정해주는 기능이다

// id?가 키 값임
// Route::get('/segment2/{id?}', function(Request $request) {
//     return 'segment2 ID :'.$request->id;
// }); 
// 클로저보다 이 방법을 더 많이 쓴다고 함
// Request 방식으로도 세그먼트 파라미터를 획득 가능
// 세그먼트 파라미터가 없어도 404 error가 발생 안 함


//--------------------
// 라우트의 이름 지정
//--------------------


Route::get('/names/home', function() {
    return view('nameshome');
});

Route::get('/names', function() {
    return 'names.index !!!';
})->name('names.index');
// 알리아스로 이름을 지정해주고 찾는 것을 추천한다고 하심

// 컨트롤러로 만들면 라우터 일일이 하나씩 안 만들어도 된다고 함


//-----------------------------------
// 라우트 매칭 실패시 대체 라우트 정의
// 가장 마지막에 정의 : 보통 에러 처리를 마지막에 정의
//-----------------------------------
Route::fallback(function() {
    return '잘못된 경로로 접속하셨습니다.';
});

// 라우트의 그룹화와 공통 경로 설정방법
//-----------------------------------
// 라우트의 그룹 및 공통경로 설정
//-----------------------------------
// 공통 경로  
Route::prefix('users')->group(function(){
    Route::get('/login', function() {
        return 'Login!!';
    })->name('users.login');
    Route::get('/logout', function() {
        return 'Logout!!';
    })->name('users.logout');
    Route::get('/registration', function() {
        return 'Registration!!';
    })->name('users.registration');
});

// middleware Route::middleware('auth')->
// 컨트롤러라 라우터 사이에서 미들웨어가 암호화 갱신 세션 실행, 인증처리(로그인 권한 있는지 없는지)
// 체크해줌


//-------------
// 서명 라우터
//-------------
use Illuminate\support\Facades\URL;
Route::get('makesign', function() {
    // 일반적인 URL 링크 생성하기
    $baseUrl = route('sign');
    // $baseUrl = route('invitation',['inviation' => 5816, 'group' => 678]);
    // 서명된 URL 링크 생성하기
    $signUrl = URL::signedRoute('sign'); //('invitation',['inviation' => 5816, 'group' => 678]);
    // 유효기간이 있는 서명된 URL 링크 생성하기 
    $limitSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(10));
    return $baseUrl."<br><br>".$signUrl."<br><br>".$limitSignUrl;
});


    // Route::get('/invitations/{invitation}/{group}', function() {
    Route::get('/sign', function() {
        return 'Sign!!';
    }) ->name('sign')->middleware('signed');


//--------------------
// 컨트롤러
//--------------------
// 커맨드로 컨트롤러랑 모델을 만들어서 의존성을 높인다
// 커맨드로 컨트롤러 생성 - PHP artisan make:controller TestController
// 컨트롤러 쓸 때는 use 사용해줘야 함
use App\Http\Controllers\TestController; // 얘까지 적용해야 컨트롤러가 호출이 됨
Route::get('/test', [TestController::class,'index'])->name('tests.index');


// 커맨드로 컨트롤러 생성 - php artisan make:controller TasksController --resource
// 리소스 안 쓰면 빈 컨트롤러임
use App\Http\Controllers\TasksController;
Route::resource('/tasks', TasksController::class); // 네임 설정해주고 겟 포스트 딜리트 풋 신경 안 써도 다 해결해줌 의존성을 해결해주는 프레임워크



use App\Http\Controllers\BladeController;
Route::get('blade', [BladeController::class,'index'])->name('blade.index');


