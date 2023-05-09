// setTimeout(function() {
//     console.log('A');
// }, 3000);
// setTimeout(function() {
//     console.log('B');
// }, 2000);
// setTimeout(function() {
//     console.log('C');
// }, 1000);



// 1. 콜백함수를 이용해서 A, B, C 순서로 콘솔에 출력해주세요.
// setTimeout(function() {
//     console.log('A');
//     setTimeout(function() {
//         console.log('B');
//         setTimeout(function() {
//             console.log('C');
//         }, 3000);
//     }, 2000);
// }, 1000);

// 2. promise를 이용해서 A, B, C 순서로 콘솔에 출력해주세요.
//    ( Promise를 함수로 등록해서 구현 )

// const printLetter = (letter) => {
//     return new Promise((resolve) => {
//       console.log(letter);
//       resolve();
//     });
//   };
  
//   printLetter('A')
//     .then(() => printLetter('B'))
//     .then(() => printLetter('C'));

//---------------------------------------
// ms는 시간 딜레이 // str은 출력할 문자  
//---------------------------------------

//    function printDelay(ms, str) {
//         return new Promise((resolve) => {
//           setTimeout(() => {
//             console.log(str);
//             resolve();
//           }, ms);
//         });
//       };   
    //   printDelay( 3000, 'A', )
    //     .then(() => printDelay(2000, 'B'))
    //     .then(() => printDelay(1000, 'C'));
 

    const printLetter = (letter, delay) => {
        return new Promise((resolve) => {
          setTimeout(() => {
            console.log(letter);
            resolve();
          }, delay);
        });
      };
      
      printLetter('A', 3000)
      .then(() => printLetter('B', 2000))
      .then(() => printLetter('C', 1000));

// 위의 코드에서는 printLetter 함수를 정의하여 
// 해당 글자(letter)와 딜레이 시간(delay)을 받아서 
// Promise를 반환합니다. printLetter 함수 내부에서는 
// setTimeout 함수를 사용하여 지정된 딜레이 시간 후에 
// 해당 글자를 콘솔에 출력하고, Promise를 해결(resolve)합니다.

// 마지막으로, printLetter 함수를 연속적으로 호출하여 
// A, B, C를 순서대로 출력합니다. 각 printLetter 
// 함수 호출은 앞선 Promise가 해결된 이후에 실행되도록 
// then 메소드를 사용하여 체이닝합니다.