-- Create an activity.sql inside s05 project and create the SQL code for the following:
-- 1. Return the customerName of the customers who are from the Philippines

SELECT customerName FROM customers WHERE country = 'Philippines';


-- 2. Return the contactLastName and contactFirstName of customers with name "La Rochelle Gifts"

SELECT contactLastName, contactFirstName FROM customers WHERE customerName = 'La Rochelle Gifts';

-- 3. Return the product name and MSRP of the product named "The Titanic"

SELECT productName, MSRP FROM products WHERE productName = 'The Titanic';


-- 4. Return the first and last name of the employee whose email is "jfirrelli@classicmodelcars.com""

SELECT firstName, lastName FROM employees WHERE email = 'jfirrelli@classicmodelcars.com';


-- 5. Return the names of customers who have no registered state

SELECT customerName FROM customers WHERE state IS NULL OR state = '';

-- 6. Return the first name, last name, email of the employee whose last name is Patterson and first name is Steve

SELECT firstName, lastName, email FROM employees WHERE lastName = 'Patterson' AND firstName = 'Steve';

-- 7. Return customer name, country, and credit limit of customers whose countries are NOT USA and whose credit limits are greater than 3000
SELECT customerName, country, creditLimit FROM customers WHERE country NOT LIKE 'USA' AND creditLimit > 3000;

-- 8. Return the customer numbers of orders whose comments contain the string 'DHL'
SELECT customerNumber FROM orders WHERE comments LIKE '%DHL%';

-- 9. Return the product lines whose text description mentions the phrase 'state of the art'
SELECT productLine FROM productlines WHERE textDescription LIKE '%state of the art%';
-- Motorcycles

-- 10. Return the countries of customers without duplication
SELECT DISTINCT country FROM customers;
-- 24


-- 11. Return the statuses of orders without duplication
SELECT DISTINCT status FROM orders;
-- 6

-- 12. Return the customer names and countries of customers whose country is USA, France, or Canada
SELECT customerName, country FROM customers WHERE country IN ('USA', 'France', 'Canada');
-- 51

-- 13. Return the first name, last name, and office's city of employees whose offices are in Tokyo
SELECT employees.firstName, employees.lastName, offices.city
FROM employees
JOIN offices ON employees.officeCode = offices.officeCode
WHERE offices.city = 'Tokyo';
-- 2

-- 14. Return the customer names of customers who were served by the employee named "Leslie Thompson" 
SELECT customers.customerName
FROM customers
JOIN employees ON customers.salesRepEmployeeNumber = employees.employeeNumber
WHERE CONCAT(employees.firstName, ' ', employees.lastName) = 'Leslie Thompson';
-- 6

-- 15. Return the product names and customer name of products ordered by "Baane Mini Imports"
SELECT products.productName, customers.customerName
FROM customers
JOIN orders ON customers.customerNumber = orders.customerNumber
JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber
JOIN products ON orderdetails.productCode = products.productCode
WHERE customers.customerName = 'Baane Mini Imports';
-- 32

-- 16. Return the employees' first names, employees' last names, customers' names, and offices' countries of transactions whose customers and offices are located in the same country
SELECT E.firstName AS EmployeeFirstName, E.lastName AS EmployeeLastName, C.customerName, O.country AS OfficeCountry
FROM employees E
JOIN offices O ON E.officeCode = O.officeCode
JOIN customers C ON E.employeeNumber = C.salesRepEmployeeNumber
WHERE O.country = C.country;
-- 60


-- 17. Return the product name and quantity in stock of products that belong to the product line "planes" with stock quantities less than 1000.
SELECT productName, quantityInStock FROM products WHERE productLine = 'Planes' AND quantityInStock < 1000;
-- 2

-- 18. Return the customer's name with a phone number containing "+81".
SELECT customerName FROM customers WHERE phone LIKE '%+81%';
-- 2



