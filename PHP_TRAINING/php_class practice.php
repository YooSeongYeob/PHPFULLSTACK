<?php
    /* 객체(object)란 데이터와 함수가 결합되어 있는 것이다. 객체지향(object oriented) 분야의 용어로는 데이터를 멤버 변수(attribute)로 부르고 함수를 
    멤버 함수(method)로 부른다. 객체지향 프로그램(OOP: object-oriented programming)에서 동종의 객체들을 하나의 그룹으로 묶어 정의하는데 
    이를 클래스(class)라 한다. 클래스가 필요한 이유는 비슷한 객체들을 쉽게 생성할 수 있기 때문이다. 

    9.1 접근제어 지시자 
    PHP에서 class를 선언할 때 class_student1.php 코드와 같이 프로그래밍 할 수 있다.
    멤버 변수와 함수를 선언할 때 변수와 함수 앞에 public 선언을 했다. 이것은 클래스 멤버들의 접근을 결정하는 접근제어 지시자이다. 
    php에서는 public, protected, private 세 개의 키워드를 제공한다. 
    public은 클래스 멤버 변수와 함수를 어디서든 접근할 수 있도록 허용한 지시자이고, 
    protected는 클래스 자신과 클래스를 상속 받은 클래스에서만 접근할 수 있도록 선언한 것이며 private은 클래스 내에서만 접근할 수 있도록 허용한 지시자이다.
    */      

    class student // 우선 class를 선언해줬습니다.
    {
        public $studentID; // 접근제어 지시자를 public을 선언을 해줬습니다.
        public $studentName; // 변수를 학생 아이디와, 학생 이름을 선언해줬습니다. 지금 168쪽 예제를 공부하고 있는데 이 코드들이 무엇을 의미하는지 모르겠지만 
                            // 계속 해보겠습니다.

        public function printStudent($id, $name) // public function 이라는 것이 나왔습니다. 이 함수를 메소드라고 부르던데 일단 해보겠습니다. 그런데
                                                // id와 name은 printStudent로 묶어져있습니다.
        {
            print "ID : ".$id."\n";  // print로 id와 name을 설정해줬습니다. 그런데 이 id와 name은 
            print "name : ".$name."\n";
        }
    }


$object = new student;                                       // 여기까지 하였는데 object 객체명을 변수로 주고 
$object->studentID = 20171234;                               // new student; 를 줬는데 new가 뭐였는지 지금 고민하고 있는 중입니다.
$object->studentName = "Alice";

$object->printStudent($object->studentID,$object->studentName);


?>