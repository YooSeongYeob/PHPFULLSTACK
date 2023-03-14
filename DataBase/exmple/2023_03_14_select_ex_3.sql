SELECT *
FROM employees
WHERE first_name 
LIKE('%m')
; 


SELECT emp_no, title 
FROM titles
WHERE title
LIKE('%engineer%')
;


SELECT DISTINCT *
FROM dept_emp;

SELECT *
FROM employees
LIMIT 20 OFFSET 30;

SELECT *
FROM employees
ORDER BY emp_no DESC; 

SELECT *
FROM employees
ORDER BY first_name ASC, last_name DESC;

