-- First >> Query the names of all the Japanese cities in the CITY table. The COUNTRYCODE for Japan is JPN.
SELECT NAME FROM CITY WHERE COUNTRYCODE = 'JPN';

/*Second >> Query the following two values from the STATION table:
1-The sum of all values in LAT_N rounded to a scale of 2 decimal places.
2-The sum of all values in LONG_W rounded to a scale of 2 decimal places.*/
SELECT ROUND( SUM( LAT_N ), 2 ) , ROUND( SUM( LONG_W ), 2 ) FROM STATION;

-- Third >> Query the list of CITY names from STATION that do not start with vowels. Your result cannot contain duplicates.
SELECT DISTINCT(CITY) FROM STATION WHERE LOWER(CITY) NOT REGEXP '^[aeiou]';

-- Fourth >> Query the list of CITY names from STATION that do not end with vowels. Your result cannot contain duplicates.
SELECT DISTINCT(CITY) FROM STATION WHERE LOWER(CITY) NOT REGEXP '[aeiouAEIOU]$';

-- Fifth >> Query the list of CITY names from STATION that do not start with vowels and do not end with vowels. Your result cannot contain duplicates.
SELECT DISTINCT(CITY) FROM STATION WHERE LOWER(CITY) NOT REGEXP '^[aeiou]' AND LOWER(CITY) NOT REGEXP '[aeiou]$';

-- Sixth >> Query the average population for all cities in CITY, rounded down to the nearest integer.
SELECT FLOOR( AVG( POPULATION ) ) FROM CITY;

-- Seventh >> Write a query to identify the top 2 Power Users who sent the highest number of messages on Microsoft Teams in August 2022. Display the IDs of these 2 users along with the total number of messages they sent. Output the results in descending order based on the count of the messages.
SELECT sender_id , COUNT(sender_id) FROM messages WHERE sent_date BETWEEN '2022-08-01 00:00:00' AND '2022-08-31 23:59:59'
GROUP BY sender_id ORDER BY COUNT(sender_id) DESC LIMIT 2;

-- Eighth >> This is the same question as problem #1 in the SQL Chapter of Ace the Data Science Interview!Assume you have an events table on Facebook app analytics. Write a query to calculate the click-through rate (CTR) for the app in 2022 and round the results to 2 decimal places.
SELECT app_id,
  ROUND(100.0*SUM(CASE WHEN event_type = 'click' THEN 1 ELSE 0 END)
  /SUM(CASE WHEN event_type = 'impression' THEN 1 ELSE 0 END ),2) 
FROM events
WHERE timestamp BETWEEN '2022-01-01' AND '2022-12-31'
GROUP BY app_id;