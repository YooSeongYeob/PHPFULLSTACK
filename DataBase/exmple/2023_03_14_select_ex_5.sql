SELECT count(emp_no)
FROM employees
WHERE emp_no = 10001;

SELECT AVG(salary)
FROM salaries;

SELECT MAX(salary)
FROM salaries;

SELECT MIN(salary)
FROM salaries;

SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title) >= 100000;
