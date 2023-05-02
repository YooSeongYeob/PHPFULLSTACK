// 함수 // php와 비슷하지만 작성 기법이 다르다

// 함수 선언문
function add( a, b ) {
    return a + b;
} // 자주 사용

// 자바스크립트는 함수 표현이 여러가지다


//함수 표현식
let add2 = function( a, b ) {
    return a + b; 
} // 자주 사용


// 화살표 함수 (애로우 함수) : 리턴 값만 있는 경우 한 줄로 표현이 가능
let test1 = () => "안녕";
let add3 = ( a, b ) => a + b; // 가끔 보임

// php에서 사용하던 함수 기법과 위에 것과 동일함
// function test1() {
//     return "안녕";
// }


// 익명 함수
// function add( a, b ) {
//     return a + b;
// }
// 이름이 없어서 익명함수라고 부름 단독으로 쓰려면 에러가 난다 사용하려면
// 함수 표현식을 이용하여 변수에 담거나 콜백함수로 매개변수에 담거나 해야 한다


// Function 생성자 함수
// Function class를 이용해서 함수를 생성해서 사용하는 방법 쓰기가 어려움
let add4 = Function('a', 'b', 'return a + b;'); // 잘 사용 안 함
