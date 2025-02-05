-- First >> Query all columns for all American cities in the CITY table with populations larger than 100000. The CountryCode for America is USA.
SELECT * FROM CITY WHERE POPULATION > 100000 AND COUNTRYCODE = 'USA';

-- Second >> Query the names of all American cities in the CITY table with populations larger than 120000. The CountryCode for America is USA.
SELECT NAME FROM CITY WHERE POPULATION > 120000 AND COUNTRYCODE = 'USA';

-- Third >> Query all attributes of every Japanese city in the CITY table. The COUNTRYCODE for Japan is JPN.
SELECT * FROM CITY WHERE COUNTRYCODE = 'JPN';

-- Fourth >> Write a query that prints a list of employee names (i.e.: the name attribute) from the Employee table in alphabetical order.
SELECT name FROM Employee ORDER BY name; -- ASC by default

-- Fifth >> Write a query that prints a list of employee names (i.e.: the name attribute) for employees in Employee having a salary greater than $2000 per month who have been employees for less than 10 months. Sort your result by ascending employee_id.
SELECT name FROM Employee WHERE salary > 2000 AND months < 10 ORDER BY employee_id;

-- Sixth >> Query the Name of any student in STUDENTS who scored higher than  Marks. Order your output by the last three characters of each name. If two or more students both have names ending in the same last three characters (i.e.: Bobby, Robby, etc.), secondary sort them by ascending ID.
SELECT name FROM STUDENTS WHERE marks > 75 ORDER BY RIGHT(name, 3), ID;

-- Seventh >> Write a query to determine which parts have begun the assembly process but are not yet finished.
SELECT part,assembly_step FROM parts_assembly WHERE finish_date IS NULL;