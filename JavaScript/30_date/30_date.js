// DATE 객체를 불러오자
// const NOW = new Date('2023-04-30 15:20:30.123');

// getFullyear() : 연도만 가져오는 메소드
// console.log( "연도 : " + NOW.getFullYear() );

// getMonth() : 월을 가져오는 메소드 ( +1을 해줘야 현재 월과 같아진다 )
// console.log( "월 : " + (NOW.getMonth() + 1 ) );

//getDate() : 날짜를 가져오는 메소드
// console.log( "일 : " + NOW.getDate() );

// getDay() : 요일을 가져오는 메소드 ( 일요일 = 0 ~ 토요일 = 6 )
// console.log( "요일 : " + NOW.getDay() );

// getTime() : 1970/01/01 기준으로 얼마가 지났는지 밀리 초를 가져온다
// console.log( "시간(Linux) : " + NOW.getTime() );

// getHours() : 시간을 가져오는 메소드
// console.log( "시 : " + NOW.getHours() );

// getMinutes() : 분을 가져오는 메소드
// console.log( "분 : " + NOW.getMinutes() );

// getSeconds() : 초를 가져오는 메소드
// console.log( "초 : " + NOW.getSeconds() );

// getMilliseconds() : 밀리 초를 가져오는 메소드
// console.log( "밀리 초 : " + NOW.getMilliseconds() );



// 예제
// 기준일 : 2022년 9월 30일 19시 20분 10초
// 오늘 날로부터 며칠 전인지 출력해주세요.
const today = new Date();
const baseDate = new Date('2022-09-30 19:20:10');

const oneDay = 24 * 60 * 60 * 1000; // = 86400000

const diffDays = Math.round(Math.abs((today - baseDate) / oneDay));

console.log(`오늘로부터 ${diffDays}일 전입니다.`);
/*
위 자바스크립트 코드는 현재 시간(today)과 
2022-09-30T19:20:10 날짜(baseDate) 사이의 날짜 차이를 계산하여 
diffDays 변수에 저장한 후, console.log를 사용하여 결과를 출력하는 
코드입니다. 
*/
