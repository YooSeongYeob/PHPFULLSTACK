<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- 자식 탬플릿에 해당하는 section에게 자리를 양도, 만약에 자식 탬플릿에 해당 section이 없으면 2번째 인수를 사용한다 --}}
    <title>@yield('title','부모 타이틀')</title>
</head>
<body>
    {{--  다른 탬플릿을 포함하는 방법  --}}
    @include('layout.inc.header')
    {{-- 뷰가 있는 위치를 기준으로 확인 --}}

    @yield('contents') 
    {{-- 부모한테 일드로 속성을 제시 --}}

    {{-- @section~ @show 자식 탬플릿에 해당 section이 정의 되어있지 않으면 부모의 것이 실행 --}}
    @section('test')
    <h2>부모의 섹션입니다</h2>
    <p>부모부모</p>  
    @show


    @yield('if')
    @yield('for')
    @yield('foreach')
    @yield('forelse') {{-- php에는 없는 개념 --}}

    {{-- 2번째 인수로 값을 세팅하고, 해당 파일에서 변수로서 사용 가능 --}}
    @include('layout.inc.footer', ['key1'=>'key1로 세팅'])






</body>
</html>