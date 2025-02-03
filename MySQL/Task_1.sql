-- First >> Query all columns (attributes) for every row in the CITY table.
SELECT * FROM CITY;
-- Second >> Query all columns for a city in CITY with the ID 1661.
SELECT * FROM CITY WHERE ID = 1661;
-- Third >> Query a list of CITY and STATE from the STATION table.
SELECT CITY,STATE STATE FROM STATION;