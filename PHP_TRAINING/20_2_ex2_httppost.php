<?php
    var_dump($_POST); // 슈퍼 글로벌 변수
    // 원본데이터기 때문에 취급에 유의해야 한다.
    // 연상배열로서 사용 가능.
    // file_get_contents() 바디에 있는 값을 모두 가져온다
    // 하나의 문자열로 스트링으로 되어 있게 됨
    // 배열로 쓰기가 편함
    // "test=111&test2=222"
    // 메소드의 종류도 굉장히 많음 대표적으로는 4개인데 4개 더 있어서 8개 정도 됨
    // api 할 때 상세히 다뤄본다고 하심
    // 대부분 프로젝트는 get과 post로 이뤄져있음.
?>