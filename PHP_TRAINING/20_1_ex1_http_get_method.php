<?php
// http://localhost/mini_board/src/board_update.php?board_no=1
//  여기까지 도메인//  여기까지 패스라고 부름      //
// board_no=1은 쿼리 스트링이라고 함

// 1. Get Method로 데이터를 넘겨주는 방법 1
//     -Query String에 키와값을 세팅해준다. 
//     url을 직접 쳐서 해당 페이지로 이동했을 때 겟 메소드로 http 통신한다고 함
// http://localhost/20_1_ex2_httpget.php?aaa=1 aaa가 키 1이 밸류
// http://localhost/20_1_ex2_httpget.php?aaa=1&bbb=2  &는 앤드 쿼리스트링은 무한정 쓸 수 없음
// 겟 방식 통신은 1~2개로 값 설정한다고 함
//URL 통신 연결 방법
?>  

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--    1-2. form Tag를 이용하는 방법  -->
    <form method="get" action="20_1_ex2_httpget.php">
        <input type="text" name="test1" value="testValue1">
        <input type="text" name="test2" value="testValue2">
        <button type="submit">Submit</button>
    </form> 
    <!-- http://localhost/20_1_ex1_http_get.php?test1=testValue1 -->
 <!--폼 태그를 메소드 겟으로 만들어서 통신 연결 -->
 <!-- http://localhost/20_1_ex2_httpget.php?test1=testValue1&test2=testValue2 출력 됨 -->
 <br>
 <br>
 <br>
 <a href ="http://localhost/20_1_ex2_httpget.php?aaa=1">A태그</a>
 <!-- 겟 메소드를 이용한 http 통신 -->
</body>
</html>