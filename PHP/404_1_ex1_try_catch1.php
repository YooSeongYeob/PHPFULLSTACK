<?php
// 아래 쿼리를 이용해서 DB 접속 > data획득 후 출력해주세요
// try-catch로 에러처리를 해주세요.
// 에러가 날 경우의 해당 Exception의 에러메시지를 출력해주세요.
// 정상 종료일 경우 "정상종료"라고 출력해주세요.
include_once("./12_2_ex2_fnc_db_conn.php");

$sql1 = " SELECT * FROM department ";
$sql2 = " SELECT * FROM dept_manager ";

try{
    $obj_conn=null;
    my_db_conn($obj_conn);
    $stmt = $obj_conn->query($sql1);
    $stmt2 = $obj_conn->query($sql2);
    $result = $stmt->fetchAll();
    $result2 = $stmt2->fetchAll();

    if( count ($result) === 0)
    {
        throw new exception("쿼리 결과 x건");
    }
    var_dump($result);
    echo "try\n 정상종료\n";
}
catch(Exception $e)
{   
    echo "\n----에러 발생----\n \n";
    if($e -> getmessage() === "쿼리 결과 0건")
    {
        echo "데이터 0건 \n";
    }
    else{
        echo $e->getmessage();
    }
    echo "----에러 발생----\n";
    }
 
finally
{
    echo "finally \n";
    $obj_conn = null;
}
echo "종료 \n \n";

//------- dept_manager -------

// try{
//     $obj_conn=null;
//     my_db_conn($obj_conn);
//     $sql1 = " SELECT * FROM dept_manager ";
//     $stmt = $obj_conn->query($sql2);
//     $result = $stmt->fetchAll();
//     if( count ($result) === 0)
//     {
//         throw new exception("쿼리 결과 10건");
//     }
//     var_dump($result);
//     echo "try\n";
// }
// catch(exception $e)
// {
//     echo "----에러 발생----\n";
//     echo $e->getmessage(); 
//     echo "\n----에러 발생----\n";
// }
// finally
// {
//     echo "finally \n";
//     $obj_conn = null;
// }
// echo "종료";
// ?>
