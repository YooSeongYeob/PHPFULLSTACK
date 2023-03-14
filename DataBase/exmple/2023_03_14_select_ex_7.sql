


SELECT *
FROM dept_emp
WHERE emp_no = 10010
  AND to_date >= NOW();
  
  
SELECT *, NOW()
FROM titles
WHERE emp_no = 10009
AND to_date >= NOW();



