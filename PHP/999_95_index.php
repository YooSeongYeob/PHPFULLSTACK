<?php
    $flg_header = "index";
?>
 <!-- 변수 설정 초기화 html 쭉 적고 인크루드 헤더 해주고  -->


<!-- include랑 define  -->
<!-- 어떻게 연산하냐에 따라서 다르다 -->
<!-- 단지 컴퓨터가 읽어들이는 것은 순차적으로 위에서부터 -->


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            height: 500px;
            background-color: aqua;
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

<!-- 리스트페이지에서 
     db common 인크루드 해서 그 안의 함수를 이용해서 데이터베이스를 연결
     그리고나서 처리해서 받아와서 html 화면에 뿌린거고 
인덱스 인크루드 해당 파일 불러오고  -->


<!--  한 파일은 하나의 기능만 객체지향으로 -->