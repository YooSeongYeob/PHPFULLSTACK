SELECT emp_no, last_name
FROM employees
WHERE emp_no IN {
					SELECT emp_no
					FROM titles
					WHERE to_date >= NOW()
					AND title = 'senior engineer'
					);