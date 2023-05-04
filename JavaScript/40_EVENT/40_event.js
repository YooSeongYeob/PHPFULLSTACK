// 인라인 이벤트 등록
// html 파일의 11행, 13행 참조
onclick


// 프로퍼티 리스너
// 해당요소를 변수에 담고 어떤 이벤트에 등록하는 거다
const btn1 = document.querySelector('#btn1');
btn1.onclick = function() {
    location.href = "http://www.google.com";

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
}