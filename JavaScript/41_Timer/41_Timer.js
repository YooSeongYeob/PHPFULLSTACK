// 타이머 함수 

// 1. setTimeout() / clearTimeout()
// const timeOut = setTimeout(() => console.log('A'), 2000);
// clearTimeout(timeOut); // 타이머 제거

// 2. setInterval() / clearInterval()
// const myInterval = setInterval(() => console.log('A'), 1000); // 인터벌 세팅
// clearInterval(myInterval); // 인터벌 제거



// 1~5를 1초마다 콘솔에 출력해주세요.
// 1
// 2
// 3
// 4
// 5


// const yeobTime = setTimeout(() => console.log(1), 1000); 
// const yeobInterval = setInterval(() => console.log(1), 1000);


// let i=1;
// let testInterval = setInterval(function() {
// console.log(i)(i<=5, i++);
// }, 1000 );
// setTimeout(function(){
// clearTimeout(testInterval);
// }, 5000 );
// 망한 코드임 밑에 완성한 코드랑 비교하기 위해 주석처리 한 것 


let i = 1;
let testInterval = setInterval(() => {  // (function() {내용}, 1000);
  console.log(i);
  i++;
  if (i > 5) {
    clearInterval(testInterval);
  }
}, 1000);


// for(i = 1; i < 6; i++) {
//     setInterval(() => {
//     console.log(i);
//     }, 1000);
// }

// setInterval(() => {
//     console.log(1);
// }, 1000);
// setInterval(() => {
//     console.log(2);
// }, 1000);
// setInterval(() => {
//     console.log(3);
// }, 1000);
// setInterval(() => {
//     console.log(4);
// }, 1000);
// setInterval(() => {
//     console.log(5);
// }, 1000);


// if(i++ === 5) {
//     clearInterval(testInterval); // i가 5일 때 인터벌 제거
// }


// setTimeout(() => {   // (function() {내용}, 5000);
//  clearInterval(testInterval);
//}, 5000); // 엥 이건 뭐임?... 관련 없네 ㅋㅋ


// 변수 선언: 변수 i를 초기화하고 1로 설정하였습니다. 
// 이 변수는 반복 횟수를 나타내는 용도로 사용됩니다.

// setInterval 함수: setInterval 함수는 주어진 콜백 함수를 
// 주기적으로 실행하는데 사용됩니다. 콜백 함수는 주어진 시간 간격(1초)마다 
// 실행되며, i의 값을 출력하고 i를 증가시킵니다. 그리고 i가 5보다 큰 경우 
// clearInterval을 호출하여 반복을 중지합니다.

// setTimeout 함수: setTimeout 함수는 주어진 콜백 함수를 지정된 시간 후에 
// 실행하는데 사용됩니다. 이 코드에서는 5초 후에 clearInterval을 호출하여 
// 반복을 중지합니다.

// 코드 리뷰 결과, 주어진 목적에 따라 코드는 정상적으로 동작할 것으로 보입니다. 
// 변수 i를 활용하여 반복 횟수를 제어하고, setInterval과 setTimeout 함수를 
// 적절히 활용하여 원하는 동작을 수행하고 종료할 수 있습니다.