<?php

include_once("./12_2_ex2_fnc_db_conn.php"); // 불러오는 파일 중복 방지
// 이렇게 하면 펑션을 못 찾겠다고 하는 것을 해결

my_db_conn($obj_conn); 

// $obj_conn = null; // DB Connection 파기 



//---------------SQL--------------------
$sql = 
    " SELECT "
    ."  *  "
    ." FROM "
    ." employees "
    ." LIMIT  :limit_start ";

$arr_prepare = 
        array(
            ":limit_start" => 5
        );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();
var_dump( $result );

$obj_conn = null; // DB 파괴