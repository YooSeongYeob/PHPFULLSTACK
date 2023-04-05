<?php
//******************************************************
    // 함수명:
    // 기능:
    // 이력: // new dddddddd v001 // 
             // fun_print_str v002 //  
//******************************************************


// function str($str_num)
// {

// for($i = 1; $i <=$str_num;$i++)
// {
// echo "*";
// }
// echo "\n";
// }
// str(3);
// str(2);
// str(1);
//------------------------------밑에부터 다르게 수정--------
// function fun_print_str($param_num) // v002 del
// function fun_print_str($param_num, $param_str)//v002 add //$param_str = "*"
// {
// //첫 번째 파라미터는 무조건 있어야 하고 그 이후에 파라미터를 등록 안 넘어가면 저 별로 출력
//     for( $i = 1; $i <=$param_num; $i++ )
//     {
//         // echo "*"; // v002 del 
//         echo $param_str; // v002 add
//     }
//     echo "\n";
// }
// fun_print_str(5,"★");
// fun_print_str(4,"♬");
// fun_print_str(3,"♥");
// fun_print_str(2,"◎");
// fun_print_str(1,"♣") ;

// fun_print_str(3);
// fun_print_str(2);
// fun_print_str(1); // $param_str="*" 일 때 사용.

// 위 함수를 내가 원하는 문자로 찍고 싶다는 요청이 옴.


//----------------------레퍼런스 함수----------------------

// function fnc_reference2( &$param_Str )
// {
//     echo "2번 : $param_Str \n"; 
//     $param_Str = "fnc_reference2에서 값 변경";
//     echo "3번 : $param_Str \n";
// }   
// $str = "aaa";
// echo "1번 : $str \n"; // 1번은 $str을 가리키고 있을 뿐
// fnc_reference2( $str );
// echo "4번 : $str \n";

//---------------Class----------------
// class Food
// {
    // 접근 제어 지시자
    // public       : 어디서든(class 밖에서도) 접근이 가능
    // private      : 해당 class 내에서만 접근이 가능
    // protected    : class 자기 자신과 상속 class 내에서만 접근이 가능 


    // 멤버 변수
    // private $str_name;
    // private $int_price;
//     protected $str_name;
//     protected $int_price;

//     // 메소드
//     public function __construct( $param_name, $param_price )
//     {
//         $this -> str_name = $param_name ; // 외부에서 접근할 수 없도록 프라이빗 접근제어지시자가 설정되어 있기 때문
//         $this -> int_price = $param_price ;
//     }
//     public function fnc_print_food() // 노란색은 지시자
//     {
//         $str = $this -> str_name." : ".$this->int_price."원\n";
//         echo $str;
//     }
//     public function set_int_price($param_price)
//     {
//         $this->int_price=$param_price;
//     }   
// }



// $obj_food = new Food("탕수육", 10000);
// echo $obj_food -> str_name;
// class 밖에서 접근하려니 접근이 안 됨 프라이빗이기 때문에
//$obj_food->fnc_print_food(); //얘를 주석처리 해야 결과 값 하나만 보임
// 이렇게 작성해주면 함수가 잘 출력된다.


// * Food Class의 멤버 변수 $int_price의 값을 12000 바꿔주세요.
// echo "\n";
// $obj_food->set_int_price(12000);
// $obj_food->fnc_print_food();

// $obj_food->int_price=12000; X

// 상속 : 부모 클래스의 객체들을 자식 클래스가 상속 받아
// 사용할 수 있다.

// class koreanFood extends Food

// {   
//     protected $side_dish;

//     public function __construct( $param_name, $param_price, $param_side_dish)
//     {
//         $this->str_name = $param_name;
//         $this->int_price = $param_price;
//         $this->side_dish = $param_side_dish;
//     }

// // 오버라이딩 : 부모클래스에서 정의된 메소드를 자식 클래스에서 재 정의하는 것
// public function fnc_print_food()
// {
//     // $str = $this -> str_name." : ".$this->int_price."원 : ".$this->side_dish.\n";
//     parent::fnc_print_food();
//     $str = "반찬 : ".$this->side_dish."\n";
//     echo $str;
// }
// }
// $obj_korean_food = new koreanFood("치킨", 20000, "치킨무");
// $obj_korean_food -> fnc_print_food();

//------------php.180p<9.5 함수 오버라이딩>-------------

// class People
// {
//     protected $name;
//     protected $age;

//     function printPeople()
//     {
//         print "Name :".$this->name."\n";
//         print "Age :".$this->age."\n";
//     }
// }

// class student extends People
// {
//     private $studentID;
    
//     function __construct($name, $age, $id)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->studentID = $id;
//     }
//     function printPeople()
//     {
//         print"-student-\n";
//         parent::printPeople();
//         print"id:".$this->studentID."\n";
//     }
// }

// class Professor extends People
// {
//     private $office_no;

//     function __construct($name, $age, $no)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->office_no = $no;
//     }
//     function printPeople()
//     {
//         print "-Professor- \n";
    
//     parent::printpeople();
//     print"Office_no : $this->office_no. \n";
//     }
// }

// class staff extends printPeople
// {
//     private $title;
    
//     function __construct($name, $age, $title)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->title = $title;
//     }
//     function printPeople()
//     {
//         print "-staff-\n";
//         parent::printPeolple();
//         print "title :".$this->title."\n";
//     }
// }

// $object1 = new student("Yoo", "30", "20230228");
// $object2 = new professor("Park", "35", "20230228");
// $object3 = new staff("Kim", "22", "20230228");

// $object1->printPeople();
// print "\n";
// $object2->printPeople();
// print "\n";
// $object3->printPeople();
// print "\n";

class People
{
    protected $name;
    //private $name;

    public function set_name($param_name)
    {
        $this->name = $param_name;
    }

    public function people_print()
    {
        echo "이름 : $this->name \n";
    }

}

class Student extends People 
{
    protected $id;

    function set_id( $param_id )
    {
        $this->id = $param_id;
    }
    function student_print()
    {
        parent::people_print();
        echo "아이디 : $this->id \n";
    }
}

$obj_std = new Student();
$obj_std -> set_name("유성엽");
$obj_std -> set_id("1234567");
$obj_std -> student_print();
?>