<?php

// IF로 만들어주세요.
// 성적 
// 범위 : 
//         이상~미만
//         100점 : A+
//         90~99점 : A
//         80~90 : B
//         70~80 : C
//         60~70 : D
//         60미만 : F

//     출력 문구 : "당신의 점수는 XXX점입니다. <등급>"



// $grade = 100;

// if( $grade < 0 || $grade >100 )
// {
//     echo "잘못된 값을 입력했습니다.";
// }
// else 
// {
//     if( $grade === 100 ) 
//     { 
//         echo '당신의 점수는 100점입니다. <A+>';
//      }
//     else if ($grade >= 90 && $grade <= 99 )  
//     {
//         echo ' 당신의 점수는 ' .$grade. '점입니다. <A>' ; 
//     }
//     else if ($grade >= 80 && $grade < 90)  
//     {
//         echo ' 당신의 점수는 ' .$grade. '점입니다. <B> ' ;
//     }
//     else if ($grade >= 70 && $grade < 80)  
//     {
//         echo ' 당신의 점수는 ' .$grade. '점입니다. <C>';
//     }
//     else if ($grade >= 60 && $grade < 70)  
//     {
//         echo ' 당신의 점수는 ' .$grade. '점입니다. <D> ';
//     }
//     else if ($grade >= 0 && $grade < 60)  
//     {
//         echo ' 당신의 점수는 ' .$grade. '점입니다. <F> ';
//     }
// }
 



// if( $grade === 100 ) { 
//     echo '당신의 점수는 100점입니다. <A+>';
//  }
// else if ($grade >= 90 && $grade <= 99 )  {
//     echo ' 당신의 점수는 ' .$grade. '점입니다. <A>' ; 
// }
// else if ($grade >= 80 && $grade < 90)  {
//     echo ' 당신의 점수는 ' .$grade. '점입니다. <B> ' ;
// }
// else if ($grade >= 70 && $grade < 80)  {
//     echo ' 당신의 점수는 ' .$grade. '점입니다. <C>';
// }
// else if ($grade >= 60 && $grade < 70)  {
//     echo ' 당신의 점수는 ' .$grade. '점입니다. <D> ';
// }
// else if ($grade >= 0 && $grade < 60)  {
//     echo ' 당신의 점수는 ' .$grade. '점입니다. <F> ';
// }




// else if ($grade < 0 ) {
//     echo '잘못된 값을 입력했습니다. 당신의 점수는 ' .$grade.'점입니다.';
// }

// else if ($grade > 100) {
//     echo '잘못된 값을 입력했습니다. 당신의 점수는 ' .$grade.'점입니다.';
// }



$grade = 65;

if( $grade < 0 || $grade >100 )
{
    echo "잘못된 값을 입력했습니다.";
}
else 
{
    if( $grade === 100 ) 
    { 
        echo '당신의 점수는 100점입니다. <A+>';
     }
    else if ($grade >= 90  )  
    {
        echo ' 당신의 점수는 ' .$grade. '점입니다. <A>' ; 
    }
    else if ($grade >= 80 )  
    {
        echo ' 당신의 점수는 ' .$grade. '점입니다. <B> ' ;
    }
    else if ($grade >= 70 )  
    {
        echo ' 당신의 점수는 ' .$grade. '점입니다. <C>';
    }
    else if ($grade >= 60 )  
    {
        echo ' 당신의 점수는 ' .$grade. '점입니다. <D> ';
    }
    else if ($grade >= 0 )  
    {
        echo ' 당신의 점수는 ' .$grade. '점입니다. <F> ';
    }
}






// $num = 90;
// $str_f = "당신의 점수는";
// $str_blank = " ";
// $str_b= "점 입니다.";
// $grade = "";
// if( $num == 100 )
// {
//     $grade = "A+";
// }
// else if ( $num >= 90 && $num <100 )
// {
//     $grade = "A";
// }

// else {
//     $grade = "F";
// }

// echo $str_f.$str_blank.$num.$str_b."<".$grade.">";
// echo "당신의 점수는".$num."점입니다.<".$grade.">";


// 0~100까지만 입력 받았을 때, "당신의 점수는 xxx점입니다. <등급>"
// 이라고 출력하고 그 외의 값일 경우 "잘못된 값을 입력했습니다." 라고 
// 출력해주세요.



// else {
//     echo '모르겠다.';
// }


// if($score >= 95){
//     echo "점수 : ".$score." / 등급 : A+";
//   }else if($score >= 90){
//     echo "점수 : ".$score." / 등급 : A";
//   }else if($score >= 85){
//     echo "점수 : ".$score." / 등급 : B+";
//   }else if($score >= 80){
//     echo "점수 : ".$score." / 등급 : B";
//   }else if($score >= 75){
//     echo "점수 : ".$score." / 등급 : C+";
//   }else if($score >= 70){
//     echo "점수 : ".$score." / 등급 : C";
//   }else if($score >= 65){
//     echo "점수 : ".$score." / 등급 : D+";
//   }else if($score >= 60){
//     echo "점수 : ".$score." / 등급 : D";
//   }else{
//     echo "점수 : ".$score." / 등급 : F";
//   }











?>