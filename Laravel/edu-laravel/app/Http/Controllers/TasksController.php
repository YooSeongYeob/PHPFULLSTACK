<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * 리소스의 목록 페이지
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return'Task.index!!';
    }

    /**
     * Show the form for creating a new resource.
     * 리소스 생성을 위한 입력 폼 페이지
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Tasks.create!!';
    }

    /**
     * Store a newly created resource in storage.
     * 리소스 생성 처리 크리에이트 페이지에서 버튼 누르면 저장 처리해주는 메소드 / 유저한테 받은 데이터를 사용하겠다
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $a = $request->all();
        // return 'Tasks.store id : '.$a['id'].'<br>pw : '.$a['pw'];
        $a = $request->all();
        return 'Tasks.store id : '.$request->id.'<br>pw : '.$request->pw;
                    //                      [id]                      [pw]     이렇게도 가능한데 리퀘스트가 객체라서 대괄호 X    
    }

    /**
     * Display the specified resource.
     * 리소스 조회 (상세 페이지)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Tasks.show!! : '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     * 리소스 수정 폼페이지 (수정 입력하는 페이지로 가게 함)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Tasks.edit!! : '.$id;
    }

    /**
     * Update the specified resource in storage.
     *  리소스 수정 처리 (수정 버튼 눌렀을 때의 처리)
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // var_dump($request); // 어떤 게 있는지 한 번 보는 것
                            // 현업에서는 이렇게 찍어내는 거 위험해서 원래는 안 됨
        $arrAll = $request->all(); // 사용자가 전달하는 모든 데이터를 획득 (배열로 옴 / 모든 정보가 온다는 것은 아님)
        $arrOnly = $request->only(['id','name']); // 사용자가 전달한 데이터 중에 해당하는 데이터만 획득 (배열로 옴)
        $oneGet = $request->get('pw'); // 사용자가 전달한 데이터 중에 해당하는 데이터의 값만 획득

        // var_dump($arrAll); // 어떤 게 있는지 보기
        // var_dump($arrOnly);
        // var_dump($oneGet);


        return 'Tasks.update!! : '.$id;
    }

    /**
     * Remove the specified resource from storage.
     * 리소스 삭제 처리
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Tasks.destroy!! : '.$id;
    }
}
