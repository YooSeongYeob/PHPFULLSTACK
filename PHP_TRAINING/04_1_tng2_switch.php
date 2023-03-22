<?php           
     

    // 성적 범위 :
    // 100 : A+
    // 90 : A 
    // 80 : B
    // 70 : C 
    // 60 : D  
    // 그외 : F



     $val= 100;

     switch ( $val ) {
         
        case $val==100:
             echo "당신의 점수는 점입니다. <A등급>";
             break; 
         
             case $val==90:
                echo "당신의 점수는 점입니다. <B등급>";
                break; 
         
                case $val==80:
                    echo "당신의 점수는 점입니다. <C등급>";
                    break; 
       
                    case $val==60:
                        echo "당신의 점수는 점입니다. <D등급>";
                        break; 


            default:
             echo "F입니다.";
             break;
         }
     




?>