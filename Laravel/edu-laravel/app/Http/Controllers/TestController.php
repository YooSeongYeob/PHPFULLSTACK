<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        return view('test')->with('name','미스터 존');
    }
}

// width는 헬프함수임 뒤에는 키 그 뒤에는 실질적인 값
// 비지니스 로직들은 컨트롤러에서 처리
// 뷰를 통해 화면에 출력
