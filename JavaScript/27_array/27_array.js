// 자바스크립트의 어레이는 객체이다. PHP에서는 배열 
// 어레이로 제어한다고 함

// let arr = [1, 2, 3, 4, 5];

// 배열에 값 추가하는 것
// $arr[] = 1; 이런 식으로 값을 추가했었음 (PHP 방식)

// 자바스크립트에서는 푸시 메소드를 이용해서 추가한다
// push() 메소드 : 배열에 값 추가 
// arr.push(6);


// delete : 배열의 값 삭제 (인덱스는 남아 있다)
// delete arr[5];


// arr[] = 숫자 형태로 쓰면
// 숫자가 커질수록 한계가 있고 삭제를 했을 때 0 1 2 3 4 5로 나올 때 5를
// 삭제하게 되면 다음엔 5를 생략하고 6부터 시작하는 문제점이 있어서 
// 푸시 메소드를 쓰는 것이다.


// array의 특정값을 자르는 방법은 따로 있다
// 딜리티는 웬만하면 잘 안 씀
// 이것을 해결하기 위해 splice() 메소드를 사용한다


// splice() 메소드 : 배열의 요소를 삭제 또는 교체를 한다
// 맨 첫 번째 매개변수가 방 번호 뒤에는 몇 개 자를래? 라는 의미
// 예시- arr.splice(2, 1); 
// arr.splice(2, 0, 3);
// arr.splice(3, 0, 5); 중간에 매개변수를 0으로 주면 삭제를 안 하고 세 번쨰
// 매개변수 때 추가를 해준다

// arr = [1, 2, 3, 4, 5];
// arr.splice(2, 1); // 배열에서 arr[2]가 삭제
// arr.splice(2, 0, 3); // 배열의 arr[2]에 값이 3인 인덱스를 추가
// arr.splice(2, 1, 3) // 배열의 arr[2]의 값을 3으로 변경
// arr.splice(2,1,3,5,6,7); // 3번 째 매개변수부터는 가변파라미터로 모든 값을 추가

// arr.length 프로퍼티임 메소드 아님 배열의 제일 최신 길이로 늘려준다
// 예시 - arr.splice(arr.length, 0, arr.length); (6, 0, 6)이랑 같은 개념
// 이렇게 arr.splice(arr.length, 0, 10, 11, 12, 13); 숫자를 한 꺼번에 늘릴 수도 있다


// indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용 ( 0 1 2 3 같은 키 값으로 반환되어 받아진다 )
// let arr2 = [1, 2, 3, 4, 5];

// arr2 = [1, 2, 3, 4, 3, 5, 6, 6, 1]; // let arr2를 갱신해준 것임

// arr2.lastIndexOf(1); 방 번호를 통해 가장 마지막 키 값을 반환 받음


// slice() 메소드 : 숫자로 키 값을 조절해서 문자열을 잘라서 출력해줄 수 있음


// 예제
// let fileName = 'javaScript.log.php';
// fileName = 'ttt.aa.b'; // 검증 방법임

// let arrStr = ['j', 'a', 'v'...];

// 아래처럼 콘솔에 출력해주새요. ( Slice()메소드를 이용 )
// javaScript
// log
// php


// - 정답 - ( slice 메소드 이용 )
// fileName.slice(11, 14)
// 'log'
// fileName.slice(0, 10);
// 'javaScript'
// fileName.slice(15)
// 'php'


// - 정답 - ( indexOf 메소드 이용 )
// fileName.indexOf('javaScript');
// 0
// fileName.indexOf('log');
// 11
// fileName.indexOf('php');
// 15


// - 정답 - ( lastIndexOf 메소드 이용 )
// fileName.lastIndexOf('javaScript');
// 0
// fileName.lastIndexOf('log');
// 11
// fileName.lastIndexOf('php');
// 15


// const first_dot = fileName.indexOf( '.' );
// const last_dot = fileName.lastIndexOf( '.' );
// const first_str = fileName.slice( 0, first_dot );
// const middle_str = fileName.slice( first_dot + 1, last_dot );
// const last_str = fileName.slice( last_dot + 1 );
// console.log( first_str );
// console.log( middle_str );
// console.log( last_str );


// const last_str = fileName.slice( -( fileName.length - (fileName.lastIndexOf( '.' ) + 1) ) );
// const last_str = fileName.slice( -( fileName.length - (last_dot + 1) ) );


// fileName.slice(0,fileName.indexOf('.'));
// fileName.slice(fileName.indexOf('.')+1,fileName.lastIndexOf('.'));
// fileName.slice(fileName.lastIndexOf('.')+1);
// console.log(fileName.slice(0,fileName.indexOf('.')));
// console.log(fileName.slice(fileName.indexOf('.')+1,fileName.lastIndexOf('.')));
// console.log(fileName.slice(fileName.lastIndexOf('.')+1));

// 마리아db 문자열 합칠 때 사용하던 concat.
// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열에 합쳐서 새 배열을 반환합니다


let arrCon1 = [1, 2, 3];
let arrCon2 = [10, 20, 30];
let arrCon4 = [100, 200, 300];
let arrCon3 = arrCon1.concat( arrCon2, arrCon4 );
// console.log( arrCon3 );

// 쩜쩜이 가변파라미터를 의미함

// includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별해준다
let arrInc = [1, 2, 3, 4];
// console.log( arrInc.includes( 2 ) ); // 값이 있으면 true가 나온다 없는 숫자를 넣으면 false가 나옴 
// 불리언으로 트루, 펄스로 넘겨주는 메소드라고 함


// 자바스크립트 정렬은 sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환해줍니다

// 아스키코드?
// 10진수 16진수로 나열해서 나타내는 방법

const arrSort = [6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40];
// arrSort.sort(); // [100, 3, 3, 40, 5, 5, 6, 7, 8, 80, 92]

// 숫자로 입력했지만 실제로는 문자열로 인식
// 그 중에서 제일 앞 글자가 제일 먼저 왔음 제일 앞글자가 기준 그 다음 글자가 기준

// arrSort.sort(  
//    function( a, b ) // 익명함수임 a= 6 b =3 서로 빼기를 해서 양수가 되면 위치를 바꿈  
//    {
//        return a - b;
            // b - a; 는 내림차순 역순으로도 정렬이 된다
            // 간단한 함수는 화살표 함수로 많이 표현함
//    }
// );

// arrSort.sort( ( a, b ) => a - b ); // 오름차순 정렬

// arrSort.sort( 
//    function(a, b) {
//        return a - b;
//    }
// ); // 동일한 방식이다

// arrSort.sort( ( a, b ) => b - a ); // 내림차순 정렬

// 이걸 콜백 함수라고 함 함수를 부르고 거기서 또 함수를 부르고 연산을 하는 것
// FN이란 펑션
// arrSort
// (11) [3, 3, 5, 5, 6, 7, 8, 40, 80, 92, 100] 이런 식으로 정렬이 됨



// join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열로 만들어 준다
// 자주 쓰일 수 있는 메소드라고 하심
// const arrJoin = [ "안녕", "하세", "요" ];
// arrJoin.join(); // '안녕,하세,요'
// arrJoin.join(''); // '안녕하세요'
// arrJoin.join('/'); // '안녕/하세/요'



// every() 메소드 : 배열의 모든 요소들이 주어진 함수를 통과하는지 판별 다 통과하면 true 하나라도 통과 못하면 false로 결과가 출력이 됨
// const arrEvery = [1, 2, 3, 4, 5];
// let result = 
//    arrEvery.every( function( val ) {  // result에 담아주기
//                        return val <= 5;
//                 });

// every를 이용해서 모든 요소를 2로 나눴을 때 나머지가 0인지 판별해주세요.
// let result_1 = arrEvery.every( val => val % 2 === 0); // val 파라미터 넘버가 아니라 불리언 트루 펄스임 0이랑 같은지 비교했으니 그건 항상 트루 펄스 리턴이 그래서 트루거나 펄스
// 매개변수가 한 개일 때는 괄호 생략 가능 2개 이상부터는 괄호 더 씌워줘야 한다
// console.log(result_1)


// arrEvery.every(
//     function ( val ) {
//         return val % 2 === 0;
//     }
// );
// 함수를 넘겨주는 게 아니라 파라미터의 주소 값을 넘겨준다고 함 
// This라는 개념에서 함수가 어딨냐에 따라서 this가 뭘 가리키는지가 달라진다고 하심
// 함수를 파라미터 주소를 넘겨주는 것 함수를 넘겨주는 것이 아님 
// console.log(result)


// some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별
// 하나라도 통과하면 true // 하나라도 만족하지 못하면 false
// 다 만족해도 true

// const arrSome = [1, 2, 3, 4, 5];
// let result2 = arrSome.some( val => val >= 5 );
// console.log(result2);


// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1, 2, 3, 4, 5];
let result3 = arrFilter.filter( val => val >= 3 );
console.log(result3);





