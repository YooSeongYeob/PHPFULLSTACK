<?php
    // 쿠키를 세팅하는 것과 쿠키를 사용하는 것 2가지 방법만 있음
    // 함수나 메소드 없음 setcookie 말고는 관련 함수 없음

    // cookie 작성 
    setcookie("name", "Yoo SeongYeob", time() + 30  );
    setcookie("age", "26", time() + 300  );

    // setcookie("age","", 0) // 딜리트가 없기 때문에 빈 문자열과 0초를 세팅해줘야 함
    // 쿠키를 바로 삭제하는 일은 잘 없고 유효시간 정해두고 유효시간 만큼 보존할 수 있도록 세팅해주는 것

    // 로그아웃
?>