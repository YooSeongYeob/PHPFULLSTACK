<?php

// 5월 2일 보강 PDO Class 

// pdo 클래스는 쓰이는 용도가 정해져 있다
// 어떤 흐름인지 정도만 파악
$db_option = array(
        PDO::ATTR_EMULATE_PREPARES     => false // 데이터베이스의 Prepared Statement 기능을 사용하도록 설정해준 것 쿼리를 먼저 세팅해두고 콜론콜론 해두고 값을 지정해서 쓰는 것 기본적으로 pdo를 쓰지만 마리아db로 사용할 수 있도록 변경한 것임
        ,PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws하도록 설정 에러 처리를 넘겨주는 것임 정지가 아니라 당장 처리가 아니라 다음 처리한테 넘겨주는 것임 만약에 대처할 처리 방안이 없다면 페이탈 에러가 발생함
        ,PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC //데이터베이스에 쿼리로 질의를 하는데 그때 가져오는 데이터를 연상배열로 하겠다 연상배열로 fetch 하도록 설정
); // 필요에 따라서 세팅을 안 하는 경우도 있음 또는 3개만 설정 // array로 () 선언하는 방법과 대괄호 []로 선언하는 방법 2가지가 있다.
// 1. DB 접속
// pdo 클래스를 뉴 해서 인스턴트화 시키면 자동으로 완료시켜준다
// 넘어오는 객체를 저장해야 하니
// $conn = new PDO(dns정보, db유저, 비밀번호, 있어도 되고 없어도 되는, [옵션]); //선언하고 파라미터로 값들을 넘겨줘야 함
// 1. DB 접속
$conn = new PDO( "mysql:host=localhost;dbname=board;charset=utf8mb4", "root", "root506", $db_option); //선언하고 파라미터로 값들을 넘겨줘야 함)
// 데이터베이스가 각자 로컬이니 옵션은 배열 타입으로 넣어도 되고 나중에 넣어도 됨 데이터 베이스 접속할 때 넣는 걸 추천하심
// 이 옵션을 파라미터로 넘겨주게 되면 pdo를 인스턴트화 시켜서 콘에 담음 이러면 데이터 베이스에 접속이 끝난 것이다.

// 데이터베이스에서 데이터를 가져올 때 쿼리를 만들어야 함

// 쿼리 작성 // 데이터베이스에서 질의를 하기 위함
//$sql = " SELECT * FROM board_info ";
// 해당 쿼리를 사용하여 DB 요청하고, Statement 객체를 받아옴
//$stmt = $conn->query( $sql ); // 스테이트먼트 객체의 정보가 다 담겨서
// Statement 객체의 정보를 fetchall을 해서 사용하기 쉽게 연상배열을 가져옴
// 그리고 result에 담았고 그 결과가 배열로 나타남
//$result = $stmt->fetchall();


//var_dump($result);
// 고정되어 있는 값은 딱히 설정 안 하고 프리페어로 바로 실행 가능

// 해당 SQL로 DB 요청
// 콘에 쿼리라고 하는 메소드가 있는데 만든 sql을 넘겨준다 
// 콘 쿼리 작업하고 나서 패치를 해야함

// pdo는 많은 기능이 들어가 있지 않다

// var_dump( $result );
// db를 접속하고 끊기도 해야 하니 DB 파기를 해준다.

// DB 파기
//$conn = null;
// 항상 false로 고정되어 있는 건 아니고 prepared statement 기능이 고정되어 있으면 true로 사용 가능 현업마다 세팅이 다 다르다 
// 기능의 옵션마다 다 다름 근데 다 구현되어 있어서 코딩 룰에 제시를 하고 코딩 룰에 따라 연산에 따라 작성하면 됨 
// 보통은 콘까지 복사 붙여넣기 해서 쿼리작성만 수시로 변경되어 사용하고 stmt에 쿼리가 아니라 prepare를 쓸 때도 있음 

//------------다른 방법임 ----------------//
//$sql = " SELECT  * FROM board_info WHERE board_no = :board_no ";
// 콜론을 사용하여 프리페어드를 세팅함 
// 배열로 미리 선언해서 배열로 프리페어드 세팅 값을 넘겨주는 방법이 있고
// 하나하나 따로 세팅하는 방법이 있음
//$arr_prepare = array(
//    ":board_no" => 1
//);

// prepare를 설정하려면 prepare stmt의 값을 받는데

//$stmt = $conn->prepare( $sql ); // 해당 쿼리를 세팅해서 Statement 객체를 반환 // 쿼리를 닮아서 sql을 세팅하고 먼저 세팅을 하고 db에 요청
//$stmt->execute( $arr_prepare ); // execute에서는 해당 prepared Statement 데이터를 이용해서 DB에 요청// arr_prepare 정보 값도 같이 넘겨줘야 함
// 그 결과가 statement 객체에 다 담겨있으면 그 정보를 가져와야 함
//$result = $stmt->fetchAll(); //DB가 응답한 정보를 fetch해서 연상배열로 반환 // 이 결과를 어디에 담아야 하니 리절트를 사용
// var_dump($result);
//$conn = null; // 데이터베이스 연결한 것을 파기해줘야 함

// 데이터 베이스 접속하려면 pdo class를 인스턴트화 시켜야 함

// update
//$title  = "PDO Class";
//$no = 1;
//$sql = " update board_info set board_title = :board_title WHERE board_no = :board_no ";
// prepared를 세팅할 값이 2개가 됨
// prepare를 배열로 세팅해서 한 번에 세팅하는 방법이 있지만 이 방법은 다른 방법임
//$conn->beginTransaction(); // 이떄부터 Transaction 시작
// 쿼리로 prepared 담을 쿼리를 세팅
//------------ 하나하나 세팅해주는 방법임-----------
//$stmt = $conn->prepare( $sql ); // 선언해줌
//$stmt->bindParam( ":board_title", $title, PDO::PARAM_STR ); //prepared statement를 세팅
//$stmt->bindParam( ":board_no", $no, PDO::PARAM_INT ); //prepared statement를 세팅하여 지정한 콜론이 들어가게 됨

// 레퍼런스 파람은 값을 직접 넘겨주지 못하고 변수로 넘겨줘야 함
// 콜론 보더 타이틀을 지정해주고 피디오 클래스를 세팅하고 스트링 타입이야!
// 1은 갱신해주는 값 

//$stmt->execute(); // 데이터베이스에서 질의해서 받아온 데이터
//$conn->commit(); // excute가 성공적으로 완료되면 커밋을 해줘야 함 commit : Transaction 종료
//$conn = null; // DB 연결 파기 
// excute할 때는 세팅이 이미 다 됐기 때문에 파라미터로 뭘 넘겨줄 필요가 없다
// 그 결과를 연상배열로 가져와야 한다

//$result = $stmt->fetchAll(); // 연상배열로 나타내줌

// var_dump( $result );

// 업데이트는 트랜잭션을 실행해서 커밋까지 해줘야 함

// SELECT * FROM board_info WHERE board_no = 1;
// FLUSH PRIVILEGES; 프리빌리지스 마리아 DB에서 갱신할 때 진짜 중요
// $title = "PDO INSERT";
// $content = "tttt";
$sql = " INSERT INTO board_info(board_title, board_contents, board_write_date) VALUES(:board_title, :board_contents, now() )";
$arr_prepare = [
    ":board_title" => "PDO INSERT" 
    ,":board_contents" => "tttt"
];
$conn->beginTransaction(); // Transaction 시작
$stmt = $conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$conn->commit(); //commit Transaciton 종료
$conn = null; // DB 연결 파기
// 데이터베이스 쿼리 작성하는 방법 공부하자
// PDO 설정 이전에 데이터베이스 쿼리 파악이 먼저 되어야 한다
?>