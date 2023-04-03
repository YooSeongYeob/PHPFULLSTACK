<?php
    // 아래 쿼리로 결과를 출력하는 프로그램을 만들어 주세요.
    //select emp_no salary FROM salaries WHERE to_date =? AND salary >=? ORDER BY salary DESC LIMIT ?
    
    //---------prepare 세팅 값----------
    //to_date : "9999-01-01"
    //salary : 50000
    //LIMIT : 5


$dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
$p_to_date = "9999-01-01";
$p_salary = 50000;
$p_LIMIT = 5;

$stmt = $dbc -> stmt_init();//mysqli_stmt_prepare를 사용하기 위한 객체를 초기화 하고 리턴해줍니다.
$stmt->prepare("SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY Salary DESC LIMIT ? "); 
$stmt->bind_param("sii", $p_to_date, $p_salary, $P_LIMIT); //prepared statement의 값을 세팅
$stmt->execute(); // 쿼리를 실행

// $stmt -> bind_result( $col1 ,$col2 ); 

$result = $stmt -> get_result(); //DB의 쿼리 결과를 저장 
while($row = $result -> fetch_assoc()) //fetch_assoc는 연상배열로 불러오겠다.
{
    echo "emp_no :".$row["emp_no"]."salary :".$row["salary"]."\n";
}
mysqli_close($dbc);
// $dbc->close(); //DB Close
?>