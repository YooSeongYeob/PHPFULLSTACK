// 비동기 처리방식에서 프로미스를 많이 사용함 
// 어싱크 어웨이크랑 같이 현업에서 많이 사용됨

const promise1 = new Promise((resolve, rejact) => {
    const data = true;

    if(data){
       resolve('성공'); 
    }
    else {
        rejact('error');
    }
});

promise1 
.then(data => {console.log(data);}) // 성공적으로 수행했을 때 실행되는 코드
.catch(error => {console.log(error);}) // 실패했을 때 실행되는 코드 
.finally(()=> {console.log('파이널리');}) // 성공하든 실패하든 무조건 실행되는 코드


// 프로미스를 함수로 등록해서 사용한다고 함
function myPromise() {
    return new Promise((resolve, rejact) => {
        const data = true;

        if(data){
            resolve('성공');
        } else {
            rejact('error');
        }
});
}


// 깃허브로 이어서 작성하자
// chkInput(id, pw) {
//     return new Promise((resolve, rejact) => {
//         setTimeout(() => {
//             if(id !== '' && pw !== ''){

//             }
//         })
//     })
// }

const id = 'php506'
const pw = '506'

// Login.chkInput(id, pw)
// .then(chkData => Login.loginUser(chkData.chkId, chkData.chkPw))
// .then(loginId => Login.chkAuth(loginId))
// .then(authData => console.log(`${loginId.authId}유저님, ${authData.auth}권한입니다.`);)
// .catch(error => console.log(error.message);)

// 이 과정을 체이닝이라고 하고 에러가 나면 캐치로 처리를 하겠다
// 이것이 프로미스의 가장 기본적인 방법

// 개발자 모드에서 펜딩이 나오면 소스코드가 아직 실행 중인 것