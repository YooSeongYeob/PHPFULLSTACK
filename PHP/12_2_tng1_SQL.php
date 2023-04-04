<?php

//우리가 작성한 DB Connect 함수(my_db_conn)를 이용해서 아래 데이터를 
//출력해주세요.
// include_once("./12_2_ex2_fnc_db_conn.php");

// 1. 전체 월급의 평균 
// SELECT AVG(salary)
// FROM salaries;


// 2. 새로운 사원 정보를 employees 테이블에 등록해주세요.

// INSERT INTO employees (
// 	emp_no
// 	,birth_date
// 	,first_name
// 	,last_name
// 	,gender
// 	,hire_date
// )
// VALUES
// (
// 	1000001
// 	,DATE(19940424)
// 	,'SeongYeob'
// 	,'Yoo'
// 	,'M'
// 	,NOW()
// );


// 3. 2에서 등록한 사원의 이름을 "길동" 성은 "홍"으로 변경해주세요.

// UPDATE employees
// SET last_name = '홍', first_name = '길동'
// WHERE emp_no = '1000001';


// 4. 2.에서 등록한 사원을 삭제해주세요.

// DELETE
// FROM employees
// WHERE emp_no = '1000001';

function my_db_conn(&$param_conn)
{
    $db_host     = "localhost";  // host
    $db_user     = "root";       // user
    $db_password = "root506";    // password
    $db_name     = "employees";  // DB name
    $db_charset  = "utf8mb4";    // charset
    $db_dns      = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $db_option   = array (
         PDO::ATTR_EMULATE_PREPARES   => false // DB의 Prepared Statement 기능을 사용하도록 설정
        ,PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws 하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch를 할 떄 연상배열로 Fetch를 하도록 설정
    );

    $param_conn = new PDO( $db_dns, $db_user, $db_password, $db_option);
}

$obj_conn = null; // PDO Class 

// DB Connect
my_db_conn($obj_conn); 

// $obj_conn = null; // DB Connection 파기 


//-----------------SQL----------------


// $sql = 
//     // 1. 전체 월급의 평균 

//    " SELECT  "
// ." AVG(salary) "
// ." FROM "
// ." salaries "
// ." WHERE "
// ." to_date >= now()";


// my_db_conn($obj_conn);
// //------------querry 메소드로 하는 방법-------------
// $stmt = $obj_conn->query( $sql );
// $result = $stmt -> fetchAll();
// var_dump( $result );

// $obj_conn = null;
//------------prepare 메소드로 하는 방법----------
// $arr_prepare = 
//         array();
// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// $result = $stmt->fetchAll();
// var_dump( $result );

// $obj_conn = null; // DB 파괴


// 새로운 사원 정보를 employees 테이블에 등록해주세요.
// "INSERT INTO employees (" 
// ."   emp_no "
// ."  ,birth_date "
// . " ,first_name "
// ."  ,last_name "
// ."  ,gender   "
// ."  ,hire_date "
// ." ) "
// ." VALUES ( "
// ."	 :emp_no  "
// ."	,:birth_date "
// ."	,:first_name  "
// ."	,:last_name "
// ."  ,:gender "
// ."	,:hire_date "
// ." ) .";

// $arr_prepare =
//     array(
//         ":emp_no" => 1000001
//         ,":birth_date" => 19940424
//         ,":first_name" => "길동"
//         ,":last_name"  => "홍"
//         ,":gender" => "M"
//         ,":hire_date" => "now"
//     );

    // $arr_prepare = 
    //     array();

// $str_a = "";
// $int_a = 0;
// $obj_conn = null; // DB 파괴
// my_db_conn( $obj_conn );
// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// // $result = $stmt->fetchAll();
// $obj_conn->commit();
// // var_dump( $result );
// $obj_conn = null; // DB 파괴

// 셀렉트만 페치올 
// 인서트 딜리트 업데이트는 패치할 필요가 없다.
// 그러므로 바덤프 리절트를 사용해줄 필요가 없다.

// // 3. 2에서 등록한 사원의 이름을 "길동" 성은 "홍"으로 변경해주세요.
// $sql =
//  " UPDATE employees "
// ." SET "
// ." fisr_name = :first_name "
// .", last_name = :last_name "
// ." WHERE " 
// ." emp_no = :emp_no"
// ;
// $arr_prepare =
//     array(
// ":first_name" => "길동"
// ,":last_name" => "홍"
// ,":emp_no   " => 1000001
//     );

    // $obj_conn = null; // DB 파괴
    // my_db_conn( $obj_conn );
    // $stmt = $obj_conn->prepare( $sql );
    // $stmt->execute( $arr_prepare );
    // // $result = $stmt->fetchAll();
    // $obj_conn->commit();
    // // var_dump( $result );
    // $obj_conn = null; // DB 파괴

// // 4. 2.에서 등록한 사원을 삭제해주세요.
// $sql = 
//     " DELETE FROM employees "
//     ." WHERE "
//     ." emp_no = '1000001' "
//     ;
//     $arr_prepare =
//         array(
//     ":emp_no   " => 1000001 //v002 del
            //. hire_date <= now()" v002 add
// );

// $obj_conn = null; // DB 파괴
// my_db_conn( $obj_conn );
// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// // $result = $stmt->fetchAll();
// $obj_conn->commit();
// // var_dump( $result );
// $obj_conn = null; // DB 파괴

?>