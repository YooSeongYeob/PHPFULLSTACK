SELECT *
FROM employees
WHERE emp_no = 10001
	OR emp_no = 10005;
	
SELECT *
FROM employees
WHERE emp_no IN(10001, 10005);

SELECT *
FROM employees
WHERE first_name 
LIKE('%m')
;

SELECT emp_no, title
FROM titles
WHERE title
LIKE('engineer%')
;

SELECT DISTINCT emp_no
FROM dept_emp;

SELECT *
FROM employees
ORDER BY emp_no DESC;

SELECT *
FROM employees
LIMIT 10 OFFSET 4;

SELECT *
FROM employees
ORDER BY first_name ASC, last_name DESC;