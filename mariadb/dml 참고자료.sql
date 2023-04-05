CREATE TABLE student_info (
	std_no INT PRIMARY KEY 
	,std_name VARCHAR(30) NOT NULL	
	,std_gender CHAR(1) NOT NULL
	,std_addr VARCHAR(100) NOT NULL 	
	,std_entry_date DATE NOT NULL
);

CREATE TABLE student_grade (
	sub_name varchar(30)  
	,std_no INT 
	,sub_grade INT NOT NULL
	, CONSTRAINT PRIMARY KEY (sub_name, std_no)
);

ALTER TABLE student_grade
ADD FOREIGN KEY(std_no) REFERENCES student_info(std_no);

-- 셀렉트 속도를 증가시키기 위해서 인덱스를 사용합니다.

DROP TABLE student_info;



ROLLBACK;

COMMIT;

-- 물리적인 구현은 하지 않더라도 마리아디비
-- erd는 논리적인 설계

SELECT * FROM employees
WHERE first_name ='길동'
OR last_name = '홍';


SELECT * FROM employees
WHERE emp_no = 1000001;

만들 테이블은 
게임 목록 테이블 
컬럼 들어갈지 최소 6개 
왜 설정헀는지 
erd로 그리고 

하이디 테이블까지 

그 테이블을 삭제하는 것까지 