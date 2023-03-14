SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no;


SELECT emp_no, AVG(salary) AS AVG_s
FROM salaries
GROUP BY emp_no HAVING AVG_s >= 30000 AND AVG_s <=50000;


SELECT title ,COUNT(title)
FROM titles 
GROUP BY title HAVING COUNT(title) >=10000;

SELECT CONCAT(last_name, ' ', first_name) AS fullname
from employees;


SELECT *
FROM dept_manager
WHERE dept_no in 
                 (
             			SELECT dept_no 
							FROM dept_manager
             			WHERE emp_no = '110344'
				     ) ;
				     
				     
SELECT *
FROM dept_manager
WHERE emp_no in 
                 (
             			SELECT emp_no 
							FROM dept_manager
             			WHERE dept_no = 'd009'
				     ) ;
				     
				     
				     
SELECT *
FROM dept_manager
WHERE emp_no = ANY(
             			SELECT emp_no 
							FROM dept_manager
             			WHERE dept_no = 'd009'
				     ) ;  
				     
				     
SELECT *
FROM dept_manager
WHERE emp_no = ALL (
             			SELECT emp_no 
							FROM dept_manager
             			WHERE dept_no = 'd009'
				     ) ;  
				     
				     
SELECT emp_no, first_name, last_name, gender  
FROM employees 
WHERE emp_no 
            	IN (
						SELECT emp_no
						FROM salaries
						GROUP BY emp_no 
						HAVING AVG(salary) >= 70000
						);
						
						
SELECT emp_no, last_name
FROM employees
WHERE emp_no IN (
					SELECT emp_no
					FROM titles
					WHERE to_date >= NOW()
					AND title = 'senior engineer'
					);