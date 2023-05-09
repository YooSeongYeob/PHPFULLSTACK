// console.log('A');
// console.log('B');
// console.log('C');
// console.log('D');

// 비동기 처리 방식 


// console.log('A');
// setTimeout(() => {
//     console.log('B');
// }, 1000);
// console.log('C');


// A -> C -> B 로 출력됨 이것이 바로 비동기 방식
// 동기 방식은 순서대로 출력됨

// const a= 2;
// const b= 3;
// const sum = function () {
//     setTimeout(() => {
//         return a + b;
//     }, 1000);    
// }
// console.log(sum());  //(()) 괄호 안에 괄호는 출력한다는 뜻

// 비동기 처리에서 콜백 지옥이라는 것이 있다
// setTimeout(() => {
//     console.log('a');
//     setTimeout(() => {
//         console.log('b');
//         setTimeout(() => {
//             console.log('c');
//         }, 1000);
//     }, 2000);
// }, 3000);

// 비동기 방식이지만 동기 방식처럼 출력하게 하는 방법


// 로그인 콜백 지옥 체험 // id, pw, success, error 얘네는 파라미터
// new error는 새로운 에러를 생성하는 것임
// const login = {
//     chkInput( id, pw, success, error ) {
//         setTimeout(() => {
//                 if(id !=='' && pw !== '') {
//                     success({chkId: id, chkPw: pw});
//                 }
//                 else{
//                     error(new Error('잘못 입력하였습니다.'));
//                 }
//         }, 500);
//     }
//     ,loginUser(id, pw, success, error) {
//         setTimeout(()  => 
//         {
//             if(id === 'php506' && pw === '506') {
//              success(id);
//             }
//             else{
//                 error(new Error('없는 유저입니다.'));
//             }
//         }, 500);
//     }    
//     , chkAuth(id, pw, error) {
//         setTimeout(() => {
//             if( id === 'php506') {
//                 success({authId: id, auth: 'admin'});
//             } else {
//                 error(new Error('권한이 없습니다'));
//             }
//         }, 500);
//     }
// }


//     const id = '';
//     const pw = '';


// login.chkInput(
//     id
//     ,pw
//     ,chkData => {
//         login.loginUser(
//             chkData.chkId
//             ,chkData.chkPw
//             ,loginId => {
//                 login.chkAuth(
//                     loginId
//                     , authData => {console.log(`${authData.authId}유저님, 권한은 ${authData.auth}입니다.`)}
//                     , authError => {console.log(authError.message);}
//                 )
//             }
//             ,loginError => { console.log(loginError.message)}
//         )
//     }
//     ,chkError => {console.log(chkError.message);}
// );

// chkInput();


// 콜백 함수의 기본 원리이다

function myCallBack(i) {
    return i + 1;
}

function printNum(fn) {
    console.log(fn(4));
}

printNum(myCallBack);


// 아규먼트 myCallBack 콜백해주는 함수를 설정
// 이 마이콜백에 주소가 담김 