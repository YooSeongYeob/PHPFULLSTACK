<?php
    // echo($_GET); 
    // $post_get = $_GET;
    // echo $post_get["test1"];
    // echo $post_get["test2"];
    // echo $post_get["test3"];

$get_method = $_GET; // 클래스 안에 들어있는 함수를 메소드라고 부름
//얘는 매소드가 아니라 변수임.

foreach($get_method as $key => $val)
{
    echo $key," : ".$val,"\n";
}

?>