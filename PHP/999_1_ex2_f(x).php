<?php
// 함수명   : fnc_sum
// 기능     : 파라미터를 더한 값을 리턴
// 파라미터 : INT $param_a
//            INT $param_b
// 리턴값   : INT $sum;


// function fnc_sum($param_a, $param_b)
// {
//     $sum = $param_a + $param_b;
//     return $sum;
// }
// $result = fnc_sum(7, 7);
// print $result;

// 펑션에 선언되어 있기 때문에 함수 밖에서는
// echo 사용 불가능.


//----가변 파라미터---- 
// function fnc_sum2( ...$param_numbers )
// {
    // $sum = 0;
    // foreach ( $param_numbers as $val)
    // {
    //     $sum += $val;
    // }

//-----------
// 위의 방법도 있고 어레이 썸 밑에 
// 방법도 있다.

    // return array_sum ($param_numbers);
// }
// echo fnc_sum2(3,4,5,6);

// $result = fnc_sum(7, 7);
// print $result;

// function fnc_global()
// {
//     global $global_i;
//     $global_i=0;
// }

// $global_i = 5;
// // fnc_global();

// echo $global_i;


// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }
// fnc_static();
// fnc_static();
// fnc_static();

// function fnc_reference(&$param_str)
// {
//     $param_str="fnc_reference";
// }
// $str = "aaa";
// fnc_reference($str);
// echo $str;

// & 앤드는 레퍼런스를 선언
// 현업에서 굉장히 많이 쓴다고 함. 

//-----------------------------------------
// 함수로 순차적으로 별 1씩 증가시켜 만들기 
//-----------------------------------------

//*
//**
//***
//****
//*****
// 함수를 하나 만들고, 호출하여 별 찍기

function fnc_static()
{
    static $static_i = "*";
    echo $static_i;
    $static_i++;
}

fnc_static()."\n \n";


?>