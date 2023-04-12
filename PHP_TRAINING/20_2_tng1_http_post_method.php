<!-- 
//1. Post Method를 사용자가 입력한 데이터를 HTTP Request로 합니다.
//2. 입력한 데이터의 상세 내역은 아래와 같습니다.   
//2 - 1. key : id, pw, name, birth_date 포스트 메소드 이용해서
//3. 유저가 입력하지 않은 데이터도 함께 전송 (히든)
//3 - 1. key : h_page, val : h1
//4. 각각의 데이터들을 출력 var_dump랑 print_r 말고 echo로 출력
-->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="20_2_tng1_http_post_method.php">
    <input type="text" name="id">
    <input type="text" name="name">
    <input type="password" name="pw">
    <input type="date" name="birth_date">
    <input type="hidden" name="h_page" value="h1">
    <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php
$arr_post = $_POST; // 클래스 안에 들어있는 함수를 메소드라고 부름
// 얘는 매소드가 아니라 변수임.

foreach($arr_post as $key => $val)
{
    echo $key." : ".$val."<br>";
}
?>