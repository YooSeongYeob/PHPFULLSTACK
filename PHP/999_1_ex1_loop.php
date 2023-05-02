<?php
//1. while + if 조합된 거 
// $i=0;
// while( $i <= 4)
// {
//     if( $i === 1 )
//     {
//         echo "1입니다.";
//     }
//     else if($i ===4 )
//     {
//         echo "4입니다. \n \n";
//     }
//     ++$i;
// }

// do {

// }
// while

// for 

// foreach + if 조합 

// $arr_assoc = ["a" => 1, "b" => 2, "c" => 3 ];
// var_dump(arr_assoc);

// $arr_ass = array( "a" => 1, "b" => 2, "c" => 3);
// foreach($arr_ass as $key => $val)
// {
//     // echo "$key : $val\n";
//     if( $key === "c" || $val === 2 )
//     {
//         echo "if";
//     }
// }  //// push test
 
// 이중 루프
// for ( $i = 2; $i <= 9; $i++ )
// {
//     echo "$i 단\n";
//     for($x = 1; $x <= 9; $x++)
//     {
//         echo "$i * $x =", $i*$x, "\n";
//     }
//     echo "\n"; 
//     // 현업에서는 이중루프를 잘 사용하지 않음

// }

// loop 하고 조건문 형식을 
// 가장 많이 보게 됨

// 1 ~ 100 숫자 중에 짝수의 합을 구해주세요.
// $sum=0;
// $i=0;
// for ($i = 1; $i<=100; $i++)
//     if($i %2 == 0)
//     {
//             $sum += $i;
//     }
//     echo $sum;

$sum= 0; 
$i= 0;
// for ($i=1; $i<=100; $i++)
// {
//     if($i %1 == 0)
//     {
//         $sum += $i;
//     }
//     echo $sum;
// }

// 곱하기로 하는 방법도 있지만
// 더하기보다 연산이 느리다고 함
// for( $i = 1; $i*2 <= 100; $i++)
// {
//     $sum += $i * 2;
// }
// echo $sum;

$arr_test =
    array(
    1
    ,2
    ,array(
            "info_a" => 3
            ,"info_b" => 4
            ,"info_arr" => 
                array(
                    "f_1" => 5
                    ,"f_2" => 7

                )
        )
        
    );

    // echo $arr_test["info"]["info_a"];
    echo $arr_test[2]["info_arr"]["f_1"];
?>