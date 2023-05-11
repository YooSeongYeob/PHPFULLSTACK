<?php

// 세션은 항상 사용하기 전에 세션 스타트를 해줘야 함

// session명 지정, 지정하지 않으면 세션명이 "PHPSESSID"로 지정됩니다.

// session 시작 // 시작하기 전에 이름 지정해야 함
session_name("kim");
session_start();


var_dump($_SESSION);
var_dump($_COOKIE); // 세션과 쿠키가 잘 나오는지 확인 먼저
var_dump("세션ID : ".session_id()); // session ID를 반환


// 해당하는 세션 아이디로 동일한 세션이 있는지 확인하고
// 세션 킴으로 실행을 하면 세션에서 확인한다
// 2번째 저장이 되는 건 쿠키에 저장이 된다

// 확인 과정


?>