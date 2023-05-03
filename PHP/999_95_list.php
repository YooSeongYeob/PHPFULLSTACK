<?php
    $flg_header = "list";
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            height: 500px;
            background-color: orange;
        }
        header {
            height: 200px;
            background-color: red;
        }
    </style>
    <title>index</title>
</head>
<body>
    <?php include_once("999_95_header.php"); ?>
    <div class="container">
        Body
    </div>    
</body>
</html>


<!-- 겟이든 포스트든 통신이 요청이 오면 리퀘스트가 오면 모든 정보가 문자열로 온다 str 스트링으로 
근데 우리는 쓸 때 $_get이런 걸로 썼었다 php가 str으로 온 걸 자동으로 배열로 담아줌 변수 하나로만 연상배열로서 사용하는 거임 그냥
http https api 통신이든 무조건 문자열로만 데이터가 넘어온다  php에서는 자동으로 배열로 만들어줄 뿐 get post 사용하는 것 뿐임
rest api delete put 방식 str을 따로 베열로 만들어 써야 함 그떄는 get post로 쓰지 않음
쿼리스트링 물음표하고 뒤에 키 = 값 구분이 & 엔드 키 = 값 이 앞에는 url /
긴 거는 그냥 데이터가 많은 것 뿐  우리가 편하게 파싱 작업 변환 작업을 거쳐서 
사용해야 함 주로 겟 포스트 사용함 보안 떄문에 포스트를 더 많이 사용함 -->