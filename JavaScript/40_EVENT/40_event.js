// 인라인 이벤트 등록
// html 파일의 11행, 13행 참조
// onclick


// 프로퍼티 리스너
// 해당요소를 변수에 담고 어떤 이벤트에 등록하는 거다
const btn1 = document.querySelector('#btn1');
btn1.onclick = function() {
location.href = "http://www.google.com";
}
    // querySelector() 메소드
    // onclick 프로퍼티
    // btn1 객체

    // if( tt ) console.log('tt'); // 처리해야할 게 하나만 있을 때 중괄호 생략 가능
                                // C 언어 개발자들이 많이 사용함 임베디드에서 많이 사용함 
                                // 자동차 전자 제어 장치나 회로
                                // 자원이 많이 없어서 1바이트라도 줄여야 함
                                // 빈 공간이 다 바이트이다
    // if( tt ) {
    //     console.log('tt');
    // }

    // const tt = "우리는 \"지구"\"다.";   
    // \/\/ html 이스케이프 문자 대부분의 프로그래밍 언어는 \ 역슬러쉬로 이스케이프를 한다
    // 쌍따옴표 안에 쌍따옴표를 쓸려면 이스케이프 문자를 쓰면 된다 


// 이벤트를 만들고 실행하는 과정

const btn2 = document.querySelector('#btn2');
// document.getElementById('btn2'); // 다른 방법임

// 현재창에서 열기
// btn2.addEventListener('click', () => {
// location.href = http://www.daum.net
//  });
 


// 팝업창에서 열기
let newwindow = null;
btn2.addEventListener('click', () => {
   newwindow = open('http://www.daum.net','', 'width=500 height=500');
});



// 팝업창 닫기
const btn3 = document.getElementById('btn3')
    btn3.addEventListener('click', () => {
    newwindow.close();
  })

//   const btn3 = document.getElementById('btn3')
//   btn3.addEventListener('click', popUpClose(newwindow));

// newwindow.close();



// 이벤트 삭제
// removeEventListener(eventType, function)
// addEventListener()로 등록한 이벤트의 아규먼트와 같은 아규먼트를 세팅해야 삭제됩니다.
// btn3.removeEventListener('click', () => {
//     newwindow.close();
// }) 부르는 명칭이 인자라고도 하고 인수라고도 한다 영어로는 아규먼트 파라미터로 퉁치는 사람도 있다
// 파라미터는 팝업클로즈를 호출 함수 옆에 newwindow는 아규먼트 win은 파라미터

// btn3.removeEventListener('click', popUpClose(newwindow));

// function popUpClose(win) {
//     win.close();
// }



// 이벤트 타입
// 1. 마우스 이벤트
// - mousedown = 마우스가 요소 안에서 클릭이 눌러질 때
const div1 = document.querySelector('.div1');
div1.addEventListener('mousedown', () => alert('div1 클릭'));
// - mouseup - 마우스 포인터가 요소 안으로 진입했을 때
// - mouseenter - 마우스 포인터가 요소 안으로 진입했을 때
div1.addEventListener('mouseenter', () => alert('div1 진입'));
