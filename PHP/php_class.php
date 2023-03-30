<?php
    // CLASS : 동종의 객체들이 모여있는 집합

    // class student
    // {
        // 접근제어 지시자 : public, private, protected
        // public $std_name;  //어디서든 접근 가능
        // private $std_id; // Student Class 내에서만 접근 가능
        // protected $std_age; // 상속 Class 내에서만 접근 가능
        // 현업에서 이 3개를 다 사용한다.
        // 클래스 멤버 변수

//         public function print_student($param_std_name, $param_std_age)
//         {
//             $result_name =  "이름 : " .$param_std_name; 
//             $result_age = "나이 : " .$param_std_age."세";
//             echo $result_name;
//             echo "\n";
//             echo $result_age;
//         }


//         public function set_std_id($param_id)
//     {
//         return $this->$std_id;
    

//     public function  
//     $this -> $std_id;
// }
//     }

    //class를 선언
    // $obj_Student = new Student;
    // class의 method를 호출
    // $obj_Student -> print_student("홍길동", 27);
    // class의 멤버변수 사용방법
    // echo $obj_student->std_name;
    // $obj_Student->std_name = "갑돌이";
    // echo $obj_student->std_name;

    // $obj_student->$std_id = "갑순이";
    // 지시자가 private이기 떄문에 접근 권한이 ㅇ벗다.
    // $obj_Student->$std_id = "갑돌이id";


    //private 객체를 사용할 수 있는 방법
    



    // $obj_student->$std_name;

    // Class 안에 있는 function을 method라고 부릅니다.
    // print_student("aaa", 15);


    // class print_student
    // {
    //     public $studentId;
    //     public $studentName;

    //     public function printStudent($id, $name)
    //     {
    //         print "ID :".$id;
    //         print "name: ".$name; 
    //     }
    
    // }

    // $object = new student;
    // $object -> studentId = 111;
    // $object -> studentName = "갑돌이";
    // $object -> printStudent;

// $car_name :  차 이름을 저장하는 멤버 변수
// $car_color : 차 색깔을 저장하는 멤버 변수

// method명 : car_make
// parameter : 
                // string $param_name
                // string $param_color

// 기능 : 멤버변수에 값을 세팅


// method 명 : car_out
// parameter : 없음
// 기능 : 자동차 이름과 색깔을 출력 
        // (형식 : $car_color."색".$car_name)

class Car
{
    private $car_name;
    private $car_color;

    public function car_make($param_car_color, $param_car_name)
    {
        $this -> car_name = $param_car_name;    
        $this -> car_color = $param_car_color;  
    }


    public function car_out()
    {
     print $this -> car_color; 
     print $this -> car_name;
    }
}

    $obj_car = new Car;
    $obj_car -> car_make("차 색깔: red ",  " 차 이름: Ferrari");
    $obj_car -> car_out();
    
?>