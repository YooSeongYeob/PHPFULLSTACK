<?php

//우리가 작성한 DB Connect 함수(my_db_conn)를 이용해서 아래 데이터를 
//출력해주세요.


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


$sql = 
    // 1. 전체 월급의 평균 

" SELECT AVG(salary) "
." FROM salaries "


// 새로운 사원 정보를 employees 테이블에 등록해주세요.
."INSERT INTO employees" 
." ( " 
." emp_no "
." ,birth_date "
. ",first_name "
." ,last_name "
."	,gender   "
." 	,hire_date "
." ) "
." VALUES "
." ( "
."	1000001  "
."	,DATE(19940424) "
."	,'SeongYeob'  "
."	,'Yoo' ."
."	,'M'  ."
."	,NOW()  ."
." ) ."


// 3. 2에서 등록한 사원의 이름을 "길동" 성은 "홍"으로 변경해주세요.

." UPDATE employees "
." SET last_name = '홍', first_name = '길동' "
." WHERE emp_no = '1000001' "


// 4. 2.에서 등록한 사원을 삭제해주세요.

." DELETE "
." FROM employees ."
." WHERE emp_no = '1000001' ";

$arr_prepare = 
        array();

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();
var_dump( $result );

$obj_conn = null; // DB 파괴

?>