<?php
    // 문자열 나누기 또는 자르기
    // $str_tng = "안녕하세요. PHP입니다.";
    // echo mb_substr($str_tng, -7), "\n";

    // $str_y= "안녕하세요. PHP입니다.";
    // echo mb_substr($str_tng, 3, 5);

    // 문자열의 빈 공간 지우기

    // $str_trim = "       abcd        \n ";
    // echo trim($str_trim);
    // echo trim($str_trim);
    // echo "aaa";

    // $str_trim = "       abcd       ";
    // echo rtrim($str_trim), "\n";
    // echo ltrim($str_trim), "\n";

    // 문자열의 길이를 구하는 함수

    // $str_len = "가나다라";
    // echo mb_strlen($str_len);

    // 스트링은 멀티바이트를 권장한다.

    // 문자열 포맷에 따라 출력하는 함수
    // printf("안녕하세요. %s입니다. %d", "PHP", 1234);
    
    // define("WELCOME", "안녕하세요. %s님.");
    // printf(WELCOME, "홍길동");
    
    // 기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
    // 에러 번호 : 에러종류
        // 1 : 시스템 
        // 2 : 로그인 
        // 3 : 접속


// define("ERROR_MSG", "ERROR(%d) : %s ERROR가 발생했습니다.\n");
// printf(ERROR_MSG, 1, "시스템");
    // echo "\n";   
// printf(ERROR_MSG, 2, "로그인");
    // echo "\n";  
// printf(ERROR_MSG, 3, "접속");   
    
    // 계행을 넣을 때도 회의를 거쳐서 추가시켜준다.



    // define("11221", "SYSTEM 에러가 발생했습니다");
    // printf("시스템 에러"); 

    // define("11223", "LOGIN 에러가 발생했습니다");
    // printf("로그인 에러"); 

    // define("11222", "접속 에러가 발생했습니다");
    // printf("접속 에러"); 

    // 문자열을 분리하는 함수 
    // $str_sscanf = "가나다라 50 abcd";
    // sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en); 
    // echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";


    // 문자열 반복해서 찍어주는 함수

    // echo str_repeat("가나", 3 );

    // 문자열을 특정 문자열로 분리하는 함수 : explode()
    // $str_expl = "홍길동,27세,남자,의적,조선";
    // $arr_expl = explode(",", $str_expl);

    // print_r($arr_expl);


    // 배열을 특정 문자열로 합치는 함수 : implode()

    // $str_impl = implode("123", $arr_expl);
    // echo $str_impl;    

//  "I am always Hello."에서 "Hello"를 "Happy"로 바꾸어 출력
//  프로그램을 구현해주세요.

// $str_txt = "I am always Hello"; 
// $go = str_replace("Hello", "Happy", $str_txt);
// echo $go;

$str = "I am always Hello.";
// $str_expl = explode("Hello", $str_all);
// $str_impl = implode("Happy", $str_expl);
// echo $str_impl;


// if나 포문으로도 가능
// var_dump($str_expl);


// 함수명 : my_str_replace
// 리턴값 : String $ result_str

// function my_str_replace($pram_str)
// {
//     $str_expl = explode("Hello", $pram_str);
//     $result_str = implode("Happy", $str_expl);
//     return $result_str;
// }

// echo my_str_replace($str_s);

function my_str_replace($pram_str, $param_separator, $param_ch)
{
    $arr_expl = explode($pram_str, $param_separator);
    $result_str = implode($param_ch, $arr_expl);
    
    return $result_str;
}

// echo my_str_replace($str, "am", "apple");

echo my_str_replace("Hello", "Happy", $str);


?>