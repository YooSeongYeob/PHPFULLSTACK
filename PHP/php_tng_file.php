<?php

  // 파일을 여는 방법 : fopen( 파일 위치, 파일
    // 여는 방식 파라미터가 이렇게 2개 들어감.)

    // $f_food = fopen("./SAM/food.txt", "r" ); // r : 읽기 전용
    // $f_food = fopen("./SAM/food.txt", "w" ); // w : 쓰기 전용(포인터가 파일 시작 부분부터 시작)
        //파일이 다 날아가버림. w는 잘 안 씀
        // $f_food = fopen("./SAM/food.txt", "a" ); // a : 쓰기 전용(포인터가 파일의 끝 부분에서 시작)


// var_dump($f_food);

//파일을 한 줄씩 읽어오는 방법 : fgets( open한 파일 )
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);

// while(!feof($f_food))
// {
//     print fgets($f_food);
// }
// 위의 방법이 선호됨

// while($line = fgets($f_food))
// {
    // print $line;
// }



// $f_food = fopen("./SAM/food.txt", "a" );
// 파일에 내용 추가 : fputs(open한 파일명, 추가할 내용)
// fputs($f_food, "\n돈가스1");
// fputs($f_food, "\n돈가스2");
// fputs($f_food, "\n돈가스3");



// 파일을 닫는 방법 : fclose(오픈한 파일명) 안 닫으면 메모리 박살 남

// fclose($f_food);


// 파일명 : gugudan.txt
// 파일위치 : SAM 
// 내용은 아래와 같습니다.
// 2단
// 2 * 1 = 2
// 2 * 2 = 4
//...
// 2 * 9 = 18


// $y_gugudan = fopen("./SAM/gugudan.txt", "w");


// for ($i =2; $i <3; $i++)
// {
//     for($j = 1; $j <10; $j++)
//     {
//         fputs($y_gugudan, $i." * ".$j." = " .$i*$j. "\n");
//     }
// }

// echo는 루프에서 저장 출력이 안 된다
// fputs를 이용하자!

// fclose($y_gugudan);

//선생님이 보여주신 예제

// $f_gugudan = fopen(../~~)
// $print_gugudan = "";
// for($dan =2; $dan <=9; $dan++)
// {
    // $print_gugudan .=$dan. "단\n";
    // for($num =1; $num <=9; $num ++)
    // {
        // $result = $dan."*".$num."=".$dan*$num."\n";
        // $print_gugudan .=$result;
    // }
// }
// fputs($f_gugudan, $print_gugudan);
// fclose($f_gugudan);


//구구단을 함수로 구현
// function fnc_gugumake($dan)
// {
//     $gugu_ans.= $dan."단\n";

//     for ($i=0; $i < 10; $i++)
//     {
//         $gugu_ans.="dan * $i = ".$dan*$i. "\n";
//     }
//     return $gugu_ans;
// }

// fputs($f_gugudan,fnc_gugumake(2));
// fclose($f_gugudan);


// "국밥"과 "크림우동" 사이에 "스테이크"를 추가해주세요
/*
백반 
국밥
스테이크 
크림우동
연어초밥
*/

// 하다가 망한 것
// $f_food = array("백반", "국밥", "크림우동","연어초밥");
// $add = "스테이크";

// function insert_array($f_food, $add)
// {
//     $add=array((3)=>"스테이크");
// }

// $f_food = insert_array($f_food,3,$add);

// print_r($f_food);


$f_food2 = file("./SAM/Food.txt");
$print_food = "";
    foreach ($f_food2 as $val)
    {
        if( trim($val) === "국밥") //빈 공간을 제거해주기 위해 trim
        {
            $print_food .="스테이크\n".$val;
        }
    else
        {
        $print_food .= $val;
        }
    }
    print $print_food;
    $f_food2 = fopen("./SAM/food.txt", "w");
    fputs($f_food2, $print_food);
    fclose($f_food2);
?>