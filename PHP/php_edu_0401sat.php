<?php
    //콘솔에 출력

    // print "프린트";
    // echo "에코";

    // print_r(array(1,2,3));
    // var_dump(array(3,4,5));

    // 바덤프나 프린트알은 내부구조를 보여줘서 보안상
    // 문제가 되기 때문에 납품단계에서는 지워줘야 한다.
    // 서큐리티 적으로 문제가 생긴다.
    // 프린트보다 에코가 더 빠름 에코를 자주 이용
    // 프린트알은 키값과 밸류 순수한 값
    // 바덤프는 어디서 실행됐는지 사이즈랑 데이터 유형까지 다
    // 보여준다.

    // 변수 : 정보들을 저장하는 장소
    // $1int = 1 $int$ int@ int- $인트 이런 형태들은 사용X
    // 한글로 사용하면 버그가 발생한다. 절대 사용 X
    // (영아, 숫자, _만 사용할 것)
    // $int_i = 1;
    // echo $int_i;
    // $sum = $int_i + 5;

    // 스네이크 기법 : 영어 소문자만 작성, 단어 사이의
    // 연결은 '_'로 작성하는 방법
    // php는 스네이크 기법 사용 (예 : $arr_food)
    // /자바는 카멜 기법 : 영어만 
    // 사용, 단어사이의 첫글자로 대문자로 작성 (예 : $arrFood)
    // 변수는 소문자로 작성 모든 문자를 대문자로 쓰는 건 상수
    // define 상수 명령어

    // 숫자 10을 변수 $i_ten에 저장하고, 숫자 5를 
    // 변수 $i_five, 숫자8을 $i_eight, 숫자 3을 $i_three 
    // 에 저장하고 아래 연상을 해주세요.
    // 10 - 5 + 8 하고, 3으로 나눈 나머지를 구해주세요.
    // $i_ten = 10;
    // $i_five = 5;
    // $i_eight = 8;
    // $i_three = 3;

    // $result_i = ($i_ten - $i_five + $i_eight) % $i_three;
    // echo $result_i;
    
    //i가 인테저?의 약자이다.
    
    // echo $i_ten - $i_five + $i_eight / $i_three;
    
    //증가 연산자, 감소 연산자
    // $i_increase = 0;
    // $i_decrease = 0;

    // ++$i_increase; // 전위 증가 연산자
    // $i_increase++; // 후위 증가 연산자

    // --$i_decrease; // 전위 감소 연산자
    // $i_decrease--; // 후위 감소 연산자
    // echo $i_increase;

    // $i_increase= 0;
    // echo ++$i_increase , "\n";
    // echo $i_increase++ , "\n";

    // echo $i_increase;

    // 대입 연산자

    // 산술 대입
    // $i = 0;

    // $i = $i + 2;
    // $i += 2;

    // $i -=2;
    // $i *=3;
    // $i /=4;
    // $i = 6;
    // $i %=5;

    // 문자열도 대입 연산자가 이렇게 있음.
    // $str = "aa";
    // $str = $str."aa";
    // $str .="bb";
    
    // echo $str;

    // 비교 연산자
    // 조건문, 반복문, 삼항연산자 외에도 굉장히 많이 사용
    // $a < $b : a가 b보다 작다, b가 a보다 크다
    // $a > $b : a가 b보다 크다, b가 a보다 작다

    // $a <= $b : a가 b보다 작거나 같다, b가 a보다 크거나 같다
    // $a <= $b : a가 b보다 크거나 같다, b가 a보다 작거나 같다

    // $a != $b : a와 b가 값이 다르다
    // $a !== $b : a와 b가 값과 데이터 형식이 다르다


    // $a == $b : a와 b가 값이 같다
    // $a === $b : a와 b가 값과 데이터 형식이 같다


    // $a = 1;
    // $b = "1";
    // var_dump($a != $b); // 값만 비교 같다라고 판단해서 거짓
    // var_dump($a !== $b); // 값과 데이터 형식 비교 

    // var_dump ( false === 0 );
    // var_dump ( true === 1);

    // 코드를 짤 때는 값과 데이터 형식까지 비교해야한다.
    // 그렇게 해야 버그가 줄어든다. 의도치 않은 프로그램의
    // 행동을 버그라고 한다.

    // 논리 연산자
    
    // && (and 연산자) : 모든 조건이 만족해야할 때 사용
    // $i = 1;
    // var_dump( $i === 1 && $i <= 1 && $i > 0 );
    
    // $i= 1;
    // var_dump( $i === 1 || $i < 1 || $i > 0 );
    // || (or 연산자) : 여러 조건 중 하나만 만족할 때 사용
    // 모든 조건이 거짓이어야 거짓이 되는 연산자

    // ! (not 연산자) : 결과를 반전시킬 때 사용
    // $i = 1;
    // var_dump( !($i === 2) );

    // 삼항연산자 : 조건 ? 참일 경우 : 거짓일 경우
    // $i = 1;
    // $str ="";
    // $i < 0 ? $str= "000" : $str= "111";
    // echo $str;

    // 삼항 연산자를 이용해서 짝수일 때는 짝수를 출력
    // 홀수 일 때는 "홀수를 출력하는 프로그램을 만들어주세요.

    // $i = 1;
    // $str= "";
    // $i%2 === 0 ? $str = "짝수" : $str = "홀수";
    // echo $str;
    // 주의할 점은 데이터 형식까지 비교하는 연산자 사용할 것

    //----------------------------------------------
    // 보강 2
    //----------------------------------------------

    // if 문 
    // $i = 1;
    // if ( $i % 2 === 0 )
    // {
    //     echo "짝수";
    // }    
    // else 
    // {
    //     echo "홀수";
    // }

// $i = 1;
// if ( $i === "1" )
// {
//     echo "문자열 1입니다.";
// }
// else if ( $i === 1 )
// {
//     echo "숫자 1입니다.";
// }
// else
// {
//     echo "1이 아닙니다.";
// }

// 과목의 종류는 국어, 영어, 수학, 과학
// 평균점수가 60점 이상이고, 각 과목별 점수가 40점 이상일 때
// "합격"을 출력 그 외는 "불합격"을 출력하는 프로그램을 만들어
// 주세요.


// $korean = 90; 
// $english = 80;
// $math= 60;
// $science= 80;

// $avg = ($korean + $english + $math + $science) / 4;
//  echo $avg;


// 1유형

// if(
//     $avg >= 60 ||
//     (
//         $korean >= 40 && $english >= 40
//         && $math >= 40 && $science >= 40
//     )
// )
// {
//     echo "합격!";
// }
// else 
// {
//     echo "불합격!";
// }


// 2유형

// if ($avg>=60 && $korean >= 40 && $english >= 40 && 
//     $math >=40 && $science >=40 )
//     {
//         echo "점입니다 당신은 합격입니다!";
//     }
// else
// {
//     echo "점입니다 당신은 불합격입니다!";
// }



// switch문
// $str_loc 에 지역명을 저장하고,
// 서울은 "서울사람", 대구는 "대구사람", 부산은 "부산사람",
// 그 외는 "타 지역 사람"을 출력하는 프로그램을 switch문으로
// 작성해주세요.

// $str_loc = "대구";

// switch ($str_loc)
// {
//     case "서울";
//          echo "서울 사람입니다.";
//     break; 

//     case "대구";
//          echo "대구 사람입니다.";
//     break; 

//     case "부산";
//         echo "부산 사람입니다.";
//     break; 

//     case "일본";
//         echo "오레와 니혼진데스.";
//     break; 

//     case "화성";
//         echo "화성 갈끄니까아.";
//     break;

//     default;
//         echo "타 지역 사람";
//     break;
// }


// 반복문 : while, for, do_while, foreach
// 루프 조심히 쓰자
// while : 조건을 체크하고 연산을 실행하는 루프.
// $i = 1;
// while( $i === 1)
// {
//     echo $i;
//     break;
// }


// do_while : 연산을 실행하고 조건을 체크하는 루프.
// $i = 1;
// do
// {
//     echo $i;
// } while( $i !== 1 );


// for문 : 시작과 끝을 우리가 지정해주는 루프. (루프의 횟수를 지정 가능)
// 어디서부터 어디까지 돌아라~
// for($i = 0; $i < 2; $i++)
// {
//     echo "$i \n"; 
// }


// ---< for문 연습문제 >---
// 1~50까지, 반복문을 이용해서 더하는 프로그램을 만들어 주세요.

// $i=0;
// $sum=0;
// for($i=1; $i<51; $i++)
// {
//     $sum = $sum + $i;
// }

// echo $sum;

// 반복문 for로 하는 게 제일 쉽다.

// $i = 1;
// $result_sum = 0;
// while($i <= 50)
// {
//     $result_sum += $i;
//     ++$i;
// }
// echo $result_sum;

//----------------------------------------------
// 보강 3
//----------------------------------------------

// $arr_i = array(1, 2, 3);
// var_dump($arr_i);
// echo $arr_i[1];

// 연상배열
// 키 값 : std_no, std_name, std_age, std_gender
// $arr_acc = array (
    // "번호" => "18"
    // ,"이름" => "유성엽"
    // ,"나이" => "30"
    // ,"성별" => "남자"
    // ,"std_secret_info" 
        // => array(
            // "std_city_no" => 0716
            // ,"std_addr" => "대구 중구 중앙대로"    
        // )   
// );

    // echo $arr_acc["std_secret_info"]["std_addr"];
    // echo $arr_acc["나이"];
    // print_r($arr_acc);
    // echo $arr_acc["이름"];

    // foreach문 : 배열을 루프해서 연산을 하고 싶을 때

    // foreach ($variable as $key => $value)
    // {
    //     #code...
    // }
   
    // $arr_acc = array (
    //     "번호" => "18"
    //     ,"이름" => "유성엽"
    //     ,"나이" => "30"
    //     ,"성별" => "남자"
    // );
    // foreach ($arr_acc as $key => $val)
    // {
    //     echo "$key : $val \n";
    // }

    // 루프를 작동시켜서 나이만 출력되게 프로그래밍

        
        // foreach ($arr_acc as $key => $val)
        // {
        //     if( $key === "나이")
        //         {
        //          echo $val;
        //         }
        // }

        //     foreach ($arr_acc as $key => $val)
        // {
        //     if( $key === "나이")
        //         {
        //          $arr_acc[$key] += 10;
        //         }
        // }

        // print_r($arr_acc);



//------*** 함수 : 재사용성 증가, 인적자원의 비용이 줄어듬
// 또한 가독성 증가로도 이어진다.
        


//-----------------------------------------
// 함수명   : clean_class_room
// 기능     : 이름과 구역을 받아 청소지정 문자열을 반환
// 파라미터 : $param_name string
//            $param_loc string
// 리턴     : $result_str string 어떤 변수명에 어떤 타입
// 만약 리턴이 없으면 없다라고 적어줌
//-----------------------------------------
// function clean_class_room( $param_name, $param_loc)
// {
    // $result_str = $param_name."씨, ".$param_loc."을/를 청소해주세요.\n";
    // echo $result_str;
    //  return $result_str;
// }
// $result = clean_class_room("봉정","책상");
// echo $result;
//         clean_class_room("봉정", "책상");
//         clean_class_room("동호", "바닥");
//         clean_class_room("미현", "창문");
//         clean_class_room("수지", "책상");
//         clean_class_room("성엽", "바닥");
//         clean_class_room("진영", "창문");
//         clean_class_room("주영", "책상");
//         clean_class_room("민진", "책상");

        // echo "봉정씨,"; 
        // echo "책상을 청소해주세요.\n";

        // echo "동호씨,"; 
        // echo "책상을 청소해주세요.\n";

        // echo "혁재씨,";
        // echo "창문을 청소해주세요.\n";
        
        // echo "주영씨,"; 
        // echo "바닥을 청소해주세요.\n";

        // echo "진영씨,"; 
        // echo "창문을 청소해주세요.\n";

        // echo "성엽씨씨,"; 
        // echo "창문을 청소해주세요.\n";

        // echo "유정씨,"; 
        // echo "바닥을 청소해주세요.\n";

    //-----------------------------------------------------
    // 함수명   : my_sum_all
    // 기능     : 1부터 지정숫자까지의 합을 구해서 리턴
    // 파라미터 : $param_int    int
    // 리턴     : $result_int   int
    //-----------------------------------------------------

    function my_sum_all($param_int)
    {
      $result_int = 0;
      for ( $i= 1; $i <= $param_int; $i++)
      {
        $result_int += $i;
      }
      return $result_int;
    }
     echo my_sum_all(5);
?>