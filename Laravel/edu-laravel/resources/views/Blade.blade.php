@extends('layout.layout') 
{{-- 상속 extends를 정의 --}}


{{-- 부모 탬플릿에 해당하는 yield 부분에 자리를 차지한다. --}}
@section('title', '자식 타이틀')
{{--  섹션은 자식한테 선언하게 된다 --}}
{{-- 블레이드 기법은 맨 끝에 세미콜론 x --}}

{{-- 부모랑 자식 중에 둘 다 같은 게 있으면
자식 껄 쓴다 근데 부모만 있으면 부모 껄 쓴다 
이게 바로 오버라이딩이다 --}}

{{-- 처리해야하는 코드가 많을 경우에는 @section ~ @endsection에 소스코드를 기재 --}}
@section('contents')
<h2>컨텐츠 섹션입니다.</h2>
<p>아아아아</p>
<p> 컨텐츠 끝</p>
@endsection
{{-- 2번째 인수를 지우고 엔드섹션으로 부모한테서 상속 받을 수 있다 --}}

    @section('test')
    <h2>자식의 섹션입니다</h2>
    <p>자식자식</p>
    @endsection


    {{-- 블레이드 탬플릿에서 제공하는 if 조건문 --}}
    {{-- @section('if')
    <hr>
    <h5>IF</h5>
    @if($data['gender'] === '남자')
        <span>남자남자</span>        
    @elseif($data['addr'] === '대구')
        <span>대구대구</span>
    @else
        <span>모든 조건 탈락</span>    
    @endif
    @endsection --}}

    {{-- 반복문 for문 --}}
    {{-- @section('for')
        <hr>
        <h5>FOR</h5>
        @for($i = 0; $i < 5; $i++)
            <span>{{$i}}</span>
        @endfor
    @endsection --}}


    {{-- foreach와 forelse의 경우, $loop 변수가 생성되고 사용할 수 있다. --}}
    {{-- 반복문을 실행시키는 객체다 이 루프라는 것 자체가 --}}
    {{-- 반복문 foreach --}}
    @section('foreach')
        <hr>
        <h5>FOREACH</h5>
       @foreach($data as $key => $val)
        <span>{{$loop->count.' >> '.$loop->iteration.'   '}}</span>    
        <span>{{$key.' : '.$val}}</span> 
        {{-- 이터레이션은 반복된 횟수를 나타냄 카운트는 데이터의 총 개수 루프는 데이터를 계속 돌리는 애 --}}
        <br>
       @endforeach
    @endsection



     {{-- 반복문 forelse문 데이터가 없으면 empty를 처리하고 종료 --}}
    @section('forelse')
        <hr>
        <h5>FORELSE</h5>
        @forelse($data2 as $key => $val)
            <span>{{$key.' : '.$val}}</span> 
        @empty
             <span>빈 배열이에요.</span> 
        @endforelse
    @endsection



    {{-- 기본적으로 자식이 먼저 상속 받은 탬플릿이 가장 나중에 실행이 됨 --}}
    {{-- 항상 섹션으로 묶어줘야 함 그래야 레이아웃이 흩어지지 않음 --}}

    {{-- {{}} 이게 블레이드 템플릿이라 함 --}}



    {{-- @switch($value)
        @case(value)
            
            @break
        $@default
            
    @endswitch --}}