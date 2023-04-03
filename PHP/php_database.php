<?php
    //DB 접속 연결
    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
    
    // var_dump($dbc);
    
    // 쿼리 요청
    // $result_query = mysqli_query($dbc, "SELECT emp_no, first_name From employees LIMIT 1;");

    // var_dump($result_query);

    // $result_row= mysqli_fetch_row($result_query);
    // var_dump($result_row);
    // $result_row= mysqli_fetch_row($result_query);
    // var_dump($result_row);

    // while($temp_row = mysqli_fetch_assoc($result_query))
    // {
    //     var_dump($temp_row["first_name"]);
    // }
        
   
    // array는 현업에서는 잘 안 쓴다.


    // 사원의 10005 이하 사원의 사번, 이름(성 이름), 성별, 생일


    $result_query = mysqli_query($dbc, "SELECT emp_no, first_name, last_name, gender, birth_date FROM employees WHERE emp_no <= 10005 ORDER BY emp_no asc ;");
    mysqli_close($dbc); //db 연결 종료 리소스 때문에 먼저 종료
    
    if( mysqli_num_rows($result_query)===0)
    {
        echo "데이터가 0건 입니다.";
    }
    
    else 
{
 while($temp_wow = mysqli_fetch_assoc($result_query))
    {
        echo $temp_wow["emp_no"], "\n";
        echo $temp_wow["last_name"], "\n";
        echo $temp_wow["first_name"], "\n";
        echo $temp_wow["gender"], "\n";
        echo $temp_wow["birth_date"], "\n \n";
        echo implode( " ", $temp_wow), "\n";

    }
    
}
// 플래그를 이용하는 방법
$flg_cnt = false;
while ($tmp_row = mysqli_fetch_assoc($result_query))
{
    echo implode(" ", $temp_row), "\n";
    $flg_cnt = true;
}
if (!$flg_cnt)
{
    echo "데이터가 0건 입니다.";
}

// DB 연결
$dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
//var_dump($dbc);

// 쿼리 요청
// $result_query = mysqli_query

$i = 5;
$result = null;
// Prepared Statement :
$stmt = $dbc -> stmt_init(); // statement를 세팅
$stmt -> prepare ("SELECT emp_no, first_name FROM employees Limit ?");
$stmt -> bind_param("i", $i); // prepare 세팅
$stmt -> execute(); // DB에 쿼리 질의 실행
$stmt -> bind_result( $col1 ,$col2 ); // 질의 결과를 각 아규먼트($col, $col2)에 저장하기 위한 세팅
// $stmt -> fetch(); // bind_result에서 세팅한 아규먼트에 값을 저장(한 번 실행될 때마다 한 레코드씩 저장)
// var_dump( $col1, $col2 );

// ------- 이하 연상배열로 가져오는 방법 ------
$result = $stmt -> get_result(); // 질의 결과를 저장

//패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법
//----질의 결과를 
while($row = $result -> fetch_assoc())
{
    var_dump($row);
    // echo $row["first_name"], "\n";
}



// while ($stmt->fetch());
// {
    // echo "$col1 $col2 \n";
// }



// DB 연결 종료

?>