<?php
    //1. Get Method로 사용자가 입력한 데이터를 HTTP Requests를 합니다.
    //2. 입력한 데이터의 상세 내역은 아래와 같습니다.   
    // 2 - 1. key : id, pw, name, birth_date 겟메소드 이용해서
    // http request를 해줍니다.
    // 각각의 데이터들을 출력 var_dump랑 print_r 말고 echo로 출력
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
    <form method="get" action="20_2_tng_http_get_method.php">
    <p><input type="text" name="id" ></p>
    <p><input type="datetime-local" name="birth" value="1994-04-24T17:56"></p> 
    <p><input type="password" name="pw"   ></input></p>    
    <p><input type="text" name="name"></input></p>    
    <button type="submit">Submit</button>
    </form>
    <!-- 리로드는 컨트롤 + F5 -->
</body>
</html>
<?php
$get_method = $_GET; // 클래스 안에 들어있는 함수를 메소드라고 부름
//얘는 매소드가 아니라 변수임.

foreach($get_method as $key => $val)
{
    echo $key," : ".$val,"\n";
}
// 이러면 한 파일 안에서 작업하여 출력 가능
?>