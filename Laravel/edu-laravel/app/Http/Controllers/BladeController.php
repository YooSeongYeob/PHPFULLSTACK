<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index() {
        $arr = [
            'name' => '김미현'
            ,'gender' => '여자'
            ,'birthday' => '20081023'
            ,'addr' => '구미'
            ,'tel' => '01088542931'
        ];

        $arr2 = [];
        return view('blade')->with('data', $arr)->with('data2', $arr2);
        // 라라벨이 항상 체이닝을 통해 데이터를 처리한다고 함
        // 이 데이터를 첨가해서 불러올거야 체이닝 이런 식 옆으로 계속 체이닝 해서 사용 가능
    }
}
