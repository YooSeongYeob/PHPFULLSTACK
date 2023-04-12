<?php

// 1. POST Method 포스트는 쿼리스트링에 들어가는 게 아니라 바디에 들어간다.
// 바디에 들어간다는 것은 html 바디
// html에 저장을 해서 데이터를 보낸다 외부에서 확인할 방법이 없다.
// get 메소드랑 다르게 1. 외부에서 볼 수가 없다.
// 이 의미는 request 할 때의 데이터를 외부에서 볼 수가 없다.
// get은 스트링 쿼리에 url에 다 보이는데 post는 쿼리 스트링이 없다.
?>

<!-- form Tag를 이용 -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form Tag로 Request -->
    <form method="post" action="20_2_ex2_httppost.php">
        <input type="text" name="p_test1">
        <br>
        <input type="text" name="p_test2">
        <br>
        <input type="hidden" name="p_hidden1" value="aaa">
        <br>
        <button type="submit">Submit</button>
    </form>
    <!-- 회원정보 보호법 때문에 겟 말고 포스트 사용해야 함 -->
    <!-- 로그인 기능을 사용할 때 히든으로 제어하기 위해 사용 -->
</body>
</html>