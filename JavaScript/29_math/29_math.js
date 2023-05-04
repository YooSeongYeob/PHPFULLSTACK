// 수학과 관련된 개체에 대해 공부하는 날 2023 05/04

// console.log( Math.ceil(3.33) ); // 올림
// console.log( Math.round(3.5) ); // 반올림
// console.log( Math.floor(3.8) ); // 버림


// console.log( Math.random() ); // 랜덤
// random() : 0~1 안에서 소수점 내에서 숫자를 무작위로 가져온다고 함





// 예제
// random() 메소드를 이용해서 1~10까지 랜덤으로 나오게 해주세요.
// const numbers = Array(9).fill().map((item, index) => index + 1);
// [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
 
// const random = []; // 랜덤으로 추출된 숫자를 담을 배열

// while (numbers.length > 0) { // numbers 배열에서 하나씩 추출되면서 제거되므로 numbers가 1개 있을 때까지 반복문을 돌린다.
//    const num = Math.floor(Math.random() * numbers.length); // 첫번째 랜덤 숫자 범위 : 1 <= x <= 45이므로, Math.random() * (45 - 1 + 1) = Math.random() * 45
//    const newArr = numbers.splice(num, 1); // numbers 배열에서 해당 랜덤 넘버 추출
//    const value = newArr[0]; // numbers는 배열이므로 요소 값만 추출해 변수에 담는다.
//    random.push(value); // 추출한 값을 random 배열에 담는다.
// }

//console.log(random);


let ran = math.random();
// ran = 0.1111
console.log( Math.floor ( Math.random() *10 ) +1 );

console.log( ran );
for( let i = 0; i < 1000000; i++ ) {
    ran = i;
}
console.log( ran );


