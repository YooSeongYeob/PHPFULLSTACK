<?php
    // "999_90_inc.php"에서 require한 파일
    // define("TEST_INC", "TEST"); // 값을 테스트로 줌 // 디파인은 상수 설정
    echo " 999_91_inc : 시작 \n";
    $inc91_int = 91;
    // echo "999_91_inc : ".$inc91_int. "\n";
    echo "999_91_inc : "._PATH_SRC. "\n"; // "999_90_inc.php"에서 이미 config 파일을 require 했으므로, 상수 상수 '_PATH_SRC'는 
    echo " 999_91_inc : 종료 ";

    
    // 인덱스로 시작 인덱스 안에서 컨피그를 불러오고 또 컨피그 안에서 91번 파일을 불러오고
    // 91번 파일은 실행이 되는 것이다.
?>