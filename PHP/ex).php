<?php
try{
    $obj_conn = null;
    my_db_conn($obj_conn);
    $sql = "SELECT * FROM employees WHERE emp_no = 1000001"
    $stmt = $obj_conn->query($sql);
    $result = $stmt -> fetchAll();
    if (count($result) === 0)
    {
        //throw exception : 에러를 강제로 일으키는 구문
        throw new Exception("쿼리 결과 0건"); //E99 
    }
    var_dump(result);
    
}
?>
