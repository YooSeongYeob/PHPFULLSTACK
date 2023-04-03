<?php
    $db_host = "localhost"; // host
    $db_user = "root";       // user
    $db_password = "root506";// password
    $db_name = "employees"; // DB name
    $db_charset = "utf8mb4";  // charset
    $db_dns    = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;

    // PDO Class로 DB 연동
    $obj_conn = new PDO( $db_dns, $db_user, $db_password);
    $db_option = array (
        PDO::ATTR_EMULATE_PREPARES    => false // DB의 Prepared Statement 기능을 사용하도록 설정
        ,PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws 하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch를 할 떄 연상배열로 Fetch를 하도록 설정
    );

    $obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option);
// $obj_conn = null;

//select 예제
// 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요.   
// $sql =  
//  "   SELECT   "
// ."	sal.salary "
// ."	,emp.emp_no "
// ."	,emp.birth_date "
// ." FROM "
// ." employees emp "
// ." INNER JOIN salaries sal "	
// ."			on emp.emp_no = sal.emp_no "
// ." WHERE "
// ." ( "
// ."	emp.emp_no = :emp_no1 "
// ."	OR emp.emp_no = :emp_no2 " 
// ."	) "
// ." AND sal.to_date >= now() ";
// $arr_prepare = 
//     array(
//         ":emp_no1" => 10001
//         ,":emp_no2" => 10002
//     );

// $stmt = $obj_conn -> prepare( $sql ); // prepare statement를 생성
// $stmt -> execute( $arr_prepare ); // 쿼리 실행
// $result = $stmt -> fetchAll(); // 쿼리 결과를 fetch
// var_dump( $result );

// foreach($result as $val)
// {
//     echo $val["salary"], "\n";
// }

// $obj_conn=null; // DB 파기

//INSERT 예제
$sql = 
    " INSERT INTO departments( "
    ." dept_no"
    ." ,dept_name"
    ." ) "
    ." VALUES ("
    ." :dept_no "
    ." ,:dept_name " 
    ." ) ";

$arr_prepare = 
        array(
            ":dept_no" => "d011"
            ,":dept_name" => "PHP풀스택"
        );

$stmt = $obj_conn -> prepare( $sql );
$result = $stmt -> execute ( $arr_prepare );
$obj_conn->commit();
var_dump( $result );

$obj_conn = null; // DB 파괴

// 세션이 서로 다른 곳에 붙어있고 세션이 다르면
// 한 곳에서 갱신한 정보가 다른 곳에 바로 적용이 안 되기 때
// 문에 최신 정보를 가져오고 싶으면 FLUSH PRIVILEGES을 입력하고
// 새로고침을 한다.

?>
