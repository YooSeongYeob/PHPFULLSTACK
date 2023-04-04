<?php
include_once("./12_2_ex2_fnc_db_conn.php");

// TRY-catch 문 : 에러처리를 하기위한 문법

// try 
// {
    //code... // 우리가 실행하고 싶은 소스코드를 작성
// }
// catch(\Throwable $th) //보통은 Exception $e를 사용함
// {
    // 에러가 발샐했을 때 실행되는 소스코드를 작성
// }
// finally
// {
    // 정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
// }

try{
    $obj_conn = null;
    my_db_conn( $obj_conn);
    $sql = " SELECT * FROM employees WHERE emp_no = 1000000";
    $stmt = $obj_conn->query($sql);
    $result = $stmt->fetchAll();
    if( count( $result ) ===0 )
    {
        // throw exception : 에러를 강제로 일으키는 구문
        throw new Exception("쿼리 결과 0건"); //E99
    }
    var_dump( $result );
    echo "try\n";
}
catch(Exception $e)
{
    echo "----에러 발생----\n";
    echo $e->getmessage(); //$err_meg =//
    echo "\n----에러 발생----\n";
}
finally 
{   
    echo "Finally\n";
    $obj_conn = null;
}
    
echo "종료";
?>