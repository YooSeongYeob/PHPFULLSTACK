<?php
    // define("_ROOT") 디파인으로 상수 설정 다하고 인크루드로 실행한다

    $num = 94;  

    require_once("999_93_config.php"); // once를 쓰면 한 번 로딩 되면 고정되어 써짐
    require_once("999_".$num."_inc.php"); // 원래는 번호가 아니라 주소임 path가 들어가 있고 path만 계속 바뀐다 (ex -> src/htdocs)
    require_once(_PATH_91); 
    // 상수 설정을 config에 했는데 일단 불러와야 함 컨피그는 그래서 패스를 바로 찍어버림
    // define("TEST_INC", "90TEST");
    // include_once("999_91_i.php");
    // require_once("999_91_inc.php");
    // 상수는 딱 한번만 설정되고 바꿀 수 없음
    // 디파인에서 충돌나서 워닝 발생
    // 네이밍도 조심해야 함 의도치 않은 값이 들어갈 수 있음
    // 인크루드 특징 떄문에 충돌이 일어날 수 있음
    // 인크루드로 선언 두 파일이 같이 있기 때문에 파일명만 적어줌
                                    // 인크루드를 불러오는 시점부터 해당 파일의 소스코드가 시작이 된다
    // 인크루드 한 파일에 변수가 선언되어 있으면 그대로 가져와서 사용 가능

    // echo "\n";
    // echo " 999_90_inc : 시작 \n";
    // echo "999_91_inc : ".$inc91_int."\n"; // 변수가 초기화 안 되어 있어서 세번 째에 놔두면 실행이 안 됨
    // include_once("999_91_inc.php");
    // echo " 999_90_inc : 종료 \n";

    // 페이탈 에러가 나면 시스템이 즉시 정지해버림
    // 현업에서는 인크루드보다는 리콰이어드를 더 많이 사용함
  
    // 처리과정 순서 
    // 왜 하는지 
    // 가장 많이 사용하는 


    // 백엔드에서 인크루드를 하려는 상황이 오면 복잡한 것을 사용하지 않음 필요한 라이브 러리나 단순한 것들을 불러와서 인크루드만 해주면 됨
    // 복잡해진 시점이 오는 때까 프론트에서 사용할 떄 복잡해진다


    // 소스 코드는 분류화 해서 파일을 나눈 후 관리를 하므로 
    // include : 같은 파일 여러 번 불러올 수 있음 / 포함할 파일이 없어도 다음 코드 실행 (warning)
    // include_once : 같은 파일 한 번만 불러옴 / 포함할 파일이 없어도 다음 코드 실행 (warning)
    // require : 같은 파일 여러 번 불러올 수 있음 / 포함할 파일이 없으면 다음 코드 실행하지 않음 (Fatal)
    // require_once : 같은 파일 한 번만 불러옴 / 포함할 파일이 

    // config도 결국 include mvc 모델 config 가장 먼저 불러오고 include를 쓴다.
    // config는 필요할 때마다 가져와서 썼다가 넣었다가 하는거고
    // include는 한 번 빼서 쭈욱 그걸 쓴다

?>
