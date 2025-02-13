-- first >> Write a query identifying the type of each record in the TRIANGLES table using its three side lengths. Output one of the following statements for each record in the table:
-- Equilateral: It's a triangle with  sides of equal length.
-- Isosceles: It's a triangle with  sides of equal length.
-- Scalene: It's a triangle with  sides of differing lengths.
-- Not A Triangle: The given values of A, B, and C don't form a triangle.
SELECT CASE 
    WHEN A + B <= C OR A + C <= B OR B + C <= A THEN 'Not A Triangle'
    WHEN A = B AND B = C THEN 'Equilateral'
    WHEN A = B OR B = C OR A = C THEN 'Isosceles'
    ELSE 'Scalene'
END
FROM TRIANGLES;

-- second >> Query an alphabetically ordered list of all names in OCCUPATIONS, immediately followed by the first letter of each profession as a parenthetical (i.e.: enclosed in parentheses). For example: AnActorName(A), ADoctorName(D), AProfessorName(P), and ASingerName(S).
--Query the number of ocurrences of each occupation in OCCUPATIONS. Sort the occurrences in ascending order, and output them in the following format:
-- [There are a total of [occupation_count] [occupation]s.] where [occupation_count] is the number of occurrences of an occupation in OCCUPATIONS and [occupation] is the lowercase occupation name. If more than one Occupation has the same [occupation_count], they should be ordered alphabetically.
SELECT CONCAT(name,'(',LEFT(Occupation,1),')') FROM OCCUPATIONS ORDER BY name;

SELECT CONCAT('There are a total of ',COUNT(Occupation),' ',LOWER(Occupation),'s.')
FROM OCCUPATIONS 
GROUP BY Occupation
ORDER BY COUNT(Occupation),Occupation;

-- third >> Given the table schemas below, write a query to print the company_code, founder name, total number of lead managers, total number of senior managers, total number of managers, and total number of employees. Order your output by ascending company_code.
SELECT c.company_code,c.founder,COUNT(DISTINCT(l.lead_manager_code)),COUNT(DISTINCT(s.senior_manager_code))
,COUNT(DISTINCT(m.manager_code)),COUNT(DISTINCT(e.employee_code))
FROM Company c
JOIN Lead_Manager l ON l.company_code = c.company_code
JOIN Senior_Manager s ON s.company_code = c.company_code
JOIN Manager m ON m.company_code = c.company_code
JOIN Employee e ON e.company_code = c.company_code
GROUP BY c.company_code,c.founder
ORDER BY c.company_code;

-- fourth >> You are given a table, Projects, containing three columns: Task_ID, Start_Date and End_Date. It is guaranteed that the difference between the End_Date and the Start_Date is equal to 1 day for each row in the table.
--If the End_Date of the tasks are consecutive, then they are part of the same project. Samantha is interested in finding the total number of different projects completed.
   --Write a query to output the start and end dates of projects listed by the number of days it took to complete the project in ascending order. If there is more than one project that have the same number of completion days, then order by the start date of the project.
SELECT 
    MIN(Start_Date), 
    MAX(End_Date)
FROM (SELECT 
        Start_Date, 
        End_Date, 
        ROW_NUMBER() OVER (ORDER BY Start_Date) AS days
    FROM Projects) AS NumberedProjects
GROUP BY (Start_Date - days)
ORDER BY  COUNT(*),MIN(Start_Date);

-- fifth >> Query the average population for all cities in CITY, rounded down to the nearest integer.
SELECT FLOOR(AVG(POPULATION)) FROM CITY;

-- sixth >> Harry Potter and his friends are at Ollivander's with Ron, finally replacing Charlie's old broken wand.
--Hermione decides the best way to choose is by determining the minimum number of gold galleons needed to buy each non-evil wand of high power and age. Write a query to print the id, age, coins_needed, and power of the wands that Ron's interested in, sorted in order of descending power. If more than one wand has same power, sort the result in order of descending age.
SELECT Wa.id,WP.age,Wa.coins_needed,Wa.power 
FROM Wands Wa
JOIN Wands_Property WP ON Wa.code = WP.code
WHERE WP.is_evil = 0 AND Wa.coins_needed = (
    SELECT MIN(coins_needed) FROM Wands 
    WHERE power = Wa.power AND Wa.code = code)
ORDER BY Wa.power DESC,WP.age DESC;

-- seventh >> Ketty gives Eve a task to generate a report containing three columns: Name, Grade and Mark. Ketty doesn't want the NAMES of those students who received a grade lower than 8. The report must be in descending order by grade -- i.e. higher grades are entered first. If there is more than one student with the same grade (8-10) assigned to them, order those particular students by their name alphabetically. Finally, if the grade is lower than 8, use "NULL" as their name and list them by their grades in descending order. If there is more than one student with the same grade (1-7) assigned to them, order those particular students by their marks in ascending order.
SELECT 
    (CASE WHEN Marks >= 70 THEN Name
    ELSE NULL
    END),Grade,Marks
FROM Students 
JOIN Grades ON Students.Marks <= Grades.Max_Mark AND Students.Marks >= Grades.Min_Mark
ORDER BY 
    Grade DESC,
    (CASE WHEN Marks >= 70 THEN Name
    ELSE Marks
    END);

-- eighth >> Two pairs (X1, Y1) and (X2, Y2) are said to be symmetric pairs if X1 = Y2 and X2 = Y1.
--Write a query to output all such symmetric pairs in ascending order by the value of X. List the rows such that X1 ≤ Y1.
SELECT X , Y FROM (
    SELECT X , Y , COUNT(*) AS pairs FROM Functions
    GROUP BY X , Y
) AS t
WHERE (Y , X) IN (SELECT X , Y FROM Functions) AND X < Y || (X = Y AND pairs >= 2)
ORDER BY X;

-- ninth >> Query the Western Longitude (LONG_W) for the largest Northern Latitude (LAT_N) in STATION that is less than 137.2345 . Round your answer to 4 decimal places.
SELECT ROUND(LONG_W,4) FROM STATION
WHERE LAT_N = (SELECT MAX(LAT_N) FROM STATION WHERE LAT_N < 137.2345 );

-- tenth >> Write a query to output the names of those students whose best friends got offered a higher salary than them. Names must be ordered by the salary amount offered to the best friends. It is guaranteed that no two students got same salary offer.
SELECT s.Name FROM Students s
JOIN Friends f ON f.ID = s.ID
JOIN Packages p1 ON p1.ID = s.ID
JOIN Packages p2 ON p2.ID = f.Friend_ID
WHERE p2.Salary > p1.Salary
ORDER BY p2.Salary;

-- eleventh >> Samantha interviews many candidates from different colleges using coding challenges and contests. Write a query to print the contest_id, hacker_id, name, and the sums of total_submissions, total_accepted_submissions, total_views, and total_unique_views for each contest sorted by contest_id. Exclude the contest from the result if all four sums are 0ز
SELECT c.contest_id, 
       c.hacker_id, 
       c.name, 
       SUM( 
           (SELECT SUM(total_submissions)
           FROM Submission_Stats ss
           WHERE ss.challenge_id = ch.challenge_id)
       ) AS ts , 
       SUM( 
           (SELECT SUM(total_accepted_submissions )
           FROM Submission_Stats ss
           WHERE ss.challenge_id = ch.challenge_id)
       ) AS tas , 
       SUM(
           (SELECT SUM(total_views)
           FROM View_Stats v
           WHERE v.challenge_id = ch.challenge_id)
       ) AS tv , 
       SUM(
           (SELECT SUM(total_unique_views )
           FROM View_Stats v
           WHERE v.challenge_id = ch.challenge_id)
       ) AS tuv
FROM Contests c
JOIN Colleges col ON c.contest_id = col.contest_id
JOIN Challenges ch ON col.college_id = ch.college_id
GROUP BY c.contest_id, c.hacker_id, c.name
HAVING ts > 0
    OR tas > 0
    OR tv > 0
    OR tuv > 0
ORDER BY c.contest_id;