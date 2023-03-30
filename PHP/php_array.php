<?php
    // 배열 기본 구조
    // $week = array("sun", "mon", "Tue", "Wed", "Thu", "Fri
    // ", "Sat");

    // $weekend = array($week[6], $week[0]);
    // print $weekend[0] . ', '. $weekend[1]
    
    // 멀티 타입 배열
    // $multitype = array(20, 3.14, 'A', "Bob");
    // print "$multitype[0] \n";
    // print "$multitype[1] \n";
    // print "$multitype[2] \n";
    // print "$multitype[3] \n";

    ///

    // $numbers = array(10,20,30,40,50,60,70,71,89);
    // print_r($numbers); 

    // $numbers = array (1=>10, 3=>20, 5=>30, 0=>40);
    // print_r($numbers);

    // 사람들의 이름을 인덱스로 하여 배열을 사용
    // $freshman = array(
    //     "David" => "computer",
    //     "Alice" => "Math",
    //     "Elsa"  => "Physics",
    //     "Bob"   => "Music",
    //     "Chris" => "Electronics"       
    // );

    // print_r($freshman);


    // $freshman = array( 
    //         "David" => "Computer",
    //         "Alice" => "Math",
    //         "Elsa" => "Physics",
    //         "Bob"  => "Music",
    //         "Chris" => "Electronics"
    // );

    // print_r($freshman["Alice"]);


    // $freshman = array(

    //         "David" => "Computer",
    //         "Alice" => "Math",
    //         "Elsa" => "Physics",
    //         "Bob"  => "Music",
    //         "Chris" => "Electronics"
    
    // );

    // $freshman["Frank"] = "History";
    // print_r($freshman);

    
    $freshman = array(
        "David" => "Computer",
        "Alice" => "Math",
        "Elsa" => "Physics",
        "Bob" => "Music",
        "chris" => array("Electronics", "Statistics")
    );

    print_r($freshman)
    

?>