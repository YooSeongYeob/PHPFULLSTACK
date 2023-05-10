// function delay() {
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime) {}
//     console.log('B')
// }
// console.log('A');
// delay();
// console.log('C');


// function delay2() {
//     return new Promise (function(resolve) {
//         const delayTime = Date.now() +2000;
//         while(Date.now() < delayTime) {}
//         resolve('B');
//     });
// }
// console.log('A');
// delay();
// console.log('C');


// 화살표 함수로 변환해서 사용한 것
// const delay2 = () => {
//     return new Promise((resolve) => {
//       const delayTime = Date.now() + 2000;
//       while (Date.now() < delayTime) {}
//       resolve('B');
//     });
//   };
  
//   console.log('A');
//   delay2();
//   console.log('C');
//--------------------------------------------
// 화살표 함수 쓰고 프로미스 객체 처리해줌
// function delay2() {
//     return new Promise((resolve) => {
//       const delayTime = Date.now() + 2000;
//       while (Date.now() < delayTime) {} // setTimeout(() => ){
//      // resolve......., 2000 };
//       resolve('B');
//     });
//   }
  
//   console.log('A');
//   delay2().then(() => {
//     console.log('B');
//   });
//   console.log('C');

// async도 돌고돌아 프로미스를 사용하게 됨  근간은 프로미스
// delay2().then(b => console.log(b)); 
// 리졸브일 때는 댄을 써줌
// function() 
//    console.log(b);
// }

// b => console.log(b);
// function(b) {
//    console.log(b);
//}


// async로 비동기 처리
// async function delay3() {
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime) {}
//         return 'B';
//     }

// console.log('A');
// delay3().then(b => console.log(b));
// console.log('C');

// await : async가 붙은 함수에서만 사용 가능
// function myDelay(ms) {
//     return new Promise( resolve => 
//         setTimeout(resolve, ms));
// }

// function getA() {
//     myDelay(1000);
//     return 'A';
// }

// function getB() {
//     myDelay(2000);
//     return 'B';
// }

// console.log(getA() + getB());
// A와B가 즉시 출력이 됨

//----------------------------------------


function myDelay(ms) {
    return new Promise( resolve => setTimeout(resolve, ms));
}

async function getA() {
    await myDelay(1000);
    return'A';
}

async function getB() {
    await myDelay(2000);
    return 'B';
}

// getA()
// .then(strA => console.log(strA));
// 'A : B'


// Promise 방식으로 출력한 것
// function getAll1(){
// getA()
// .then(strA => {
//     return getB()
//         .then(strB => console.log (`${strA} : ${strB}`))
// });
// }


// async를 이용할 경우 
// async function getAll2() {
//     const strA = await getA();
//     const strB = await getB();
    
//     console.log(`${strA} : ${strB}`);
// }

// getAll2();


// 병렬처리 방법 // 작업속도가 더 빨라짐
async function getAll3() {
    Promise.all([getA(), getB()])
    .then(all => console.log(all.join(' : ')));
    //.then(all => all.join(' : '));
}

getAll3()
// .then(strAll => console.log(strAll))
// .catch('error');