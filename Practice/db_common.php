<?php
    function db_conn(&$param_conn)
    {
        $host = "localhost";
        $user = "root";
        $pass = "root506";
        $charset = "utf8m4";
        $db_name = "board";
        $dns = "mysql:host=".$host.";dbname=".$db_name.";charset=".$charset;
        $pdo_option = 
        array(
            PDO::ATTR_EMULATE_PREPARES    => false
            ,PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
            ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        
    try 
    {
        $param_conn = new PDO( $dns, $user, $pass, $pdo_option );
    }
    catch( Exception $e)
    {
        $param_conn = null;
        throw new Exception( $e->getMessage() );
    } 
}
     
// --------------------------------------------------
// 함수명  :  select_board_info_paging 
//   기능  : 페이징_ 게시판 정보 검색
// 파라미터: Array &$param_arr
// 리턴값  : Array $result
// -------------------------------------------------- 
?>