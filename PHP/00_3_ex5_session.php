<?php

session_name("kim");
session_start();

// session 파기
// session_destroy(); // 아예 연결 끊어버려서 접속이 안 됨

// var_dump($_SESSION);

// session 정보 삭제
unset($_SESSION["del"]); // 세션 특정 요소를 삭제 unset 단독 사용
// 다 지우는 건 session_unset([]); 전체 정보 삭제

// 로그아웃 과정
?>