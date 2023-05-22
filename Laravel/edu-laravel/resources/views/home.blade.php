<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1>HOME!!</h1>
    <br>
    <br>
    <br>
    <form action="/method" method="post">
        @csrf <!-- @csrf 공격을 설정해줘야지 차단을 당하지 않는다 -->
        <button type="submit">POST></button>
    </form> 
    <br>
    <form action="/method" method="post">
        @csrf <!-- @csrf 공격을 설정해줘야지 차단을 당하지 않는다 -->
        @method('PUT')
        <button type="submit">PUT></button>
    </form> 
    <br>
    <form action="/method" method="post">
        @csrf <!-- @csrf 공격을 설정해줘야지 차단을 당하지 않는다 -->
        @method('DELETE')
        <button type="submit">DELETE></button>
    </form> 
</body>
</html>
<!-- response를 탈취하는 공격임 가장 흔히 일어나는 서큐리티 문제임
 라라벨을 사용하지 않았을 때에도 토큰을 이용해서 서큐리티 구현을 해줬어야 함
 이러한 공격 대비를 하지 못했기 때문에 페이지가 안 뜬 이유임
원래는 세션으로 구현을 해야 함 모든페이지마다 다 설정되어야 함
공격에 대한 대응해야 함 -->
<!-- 풋 딜리트는 api에서 많이 사용 특히 rest api -->

