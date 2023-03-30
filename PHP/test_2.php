<?php
    // $num=1 일 때 2일 때 그 외일 때 각각 출력

// $num =  50;


//     if($num <= 100  &&  $num >= 90 )
//     {
//         print "당신은 A+ 입니다. 당신의 점수는 $num 점입니다";
//     }

//  else if($num < 90 && $num >= 80)
//     {
//         print "당신은 A입니다. 당신의 점수는 $num 점입니다.";
//     }

//     else 
//     {
//         print "그외의 숫자.";
//     }


    $num= 90;

    switch($num)
    {
        case 100: 
            print "A+입니다.";
            break;
        case 90:
            print "A입니다.";        
            break;
        default:  
            print "D입니다.";
            break;
    }

    







?>