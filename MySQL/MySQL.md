## What is the Database and why does it exist?


#### A database is information that's set up for easy access, management and updating. Computer databases typically store aggregations of data records or files that contain information such as sales transactions, customer data, financials and product information.Databases are used for storing, maintaining and accessing any sort of data.

## What is the SQL?


#### SQL is a (S)tructre (Q)uery (L)anguage for accessing and manipulating databases.

## What is the history of MySQL?


#### MySQL was created by a Swedish company, MySQL AB, founded by Swedes David Axmark and Allan Larsson, along with Finnish Michael "Monty" Widenius. Original development of MySQL by Widenius and Axmark began in 1994. The first version of MySQL appeared on 23 May 1995.

## What are the most 5 famous DBs in the world now?and why?


#### 1 - MySQL : is a free, open source relational database management system (RDBMS)
#### 2 - MariaDB : is a community-developed, free and open source relational database management system. It is a fork of MySQL
#### 3 - Microsoft SQL Server : is a commercial relational database management system. It is available in multiple editions, divided into three main categories: mainstream, specialized and discontinued editions.
#### 4 - Oracle DBMS : is a commercial, multi-model database management system. It is also known as Oracle Database or just Oracle. It is commonly used for running: online transaction processing (OLTP) and data warehousing (DW).
#### 5 - PostgreSQL : is a free, open source relational database management system (RDBMS). It was initially developed as a successor of the Ingres database, developed at the University of California, Berkeley.best use in machine learning.

## What is RDBMS?


#### RDBMS : A relational database management system is a program used to create, update, and manage relational databases. Some of the most well-known RDBMSs include MySQL, PostgreSQL, MariaDB, Microsoft SQL Server, and Oracle Database.

## RDBMS VS DBMS


#### RDBMS stores data in the form of tables, whereas DBMS stores data in the form of files. Single users are supported by DBMS, whereas multiple users are supported by RDBMS. Client-server architecture is not supported by DBMS, although it is supported by RDBMS.

## Naming conventions


#### Naming conventions are a set of guideline that make strong foundations for such a consistent system. These guidelines ensure that the names of database entities are readable, easy to use in queries and do not collide with names of other defined entities or keywords.

## primary keys vs unique keys


#### A primary key : is a unique identifier that differentiates each row in a table. It strictly prohibits NULL and duplicate values, thereby maintaining the integrity of the table. A primary key doesn't allow either Duplicate or NULL values. Moreover, it can serve as a foreign key in other tables.

#### A unique key : is a distinctive attribute used to prevent duplicate values in a column. Its main function is to enforce uniqueness within a column. However, unlike a primary key, a unique key can accept a NULL value.

## constraints in MySQL.


#### SQL constraints are used to specify rules for data in a table like :
#### NOT NULL - Ensures that a column cannot have a NULL value
#### UNIQUE - Ensures that all values in a column are different
#### PRIMARY KEY - A combination of a NOT NULL and UNIQUE. Uniquely identifies each row in a table
#### FOREIGN KEY - Prevents actions that would destroy links between tables
#### CHECK - Ensures that the values in a column satisfies a specific condition
#### DEFAULT - Sets a default value for a column if no value is specified
#### CREATE INDEX - Used to create and retrieve data from the database very quickly

## indexing in MySQL.


#### Indexes are used to find rows with specific column values quickly. Without an index, MySQL must begin with the first row and then read through the entire table to find the relevant rows. The larger the table, the more this costs. If the table has an index for the columns in question, MySQL can quickly determine the position to seek to in the middle of the data file without having to look at all the data. This is much faster than reading every row sequentially.

## 🌟Difference between MySQL and Postgresql.


#### MySQL and PostgreSQL are two of the most widely used open-source relational database management systems. MySQL is known for its speed and ease of use, making it ideal for web applications and read-heavy workloads. PostgreSQL called “Postgres,” offers advanced features and strong data integrity by making it suitable for complex queries and transactions.

## Relations (one to one, one to many, many to many).


#### One-to-one: A record in one table is related to one record in another table. One-to-many: A record in one table is related to many records in another table. Many-to-many: Multiple records in one table are related to multiple records in another table.

## Write-ahead logging.


#### In computer science, write-ahead logging (WAL) is a family of techniques for providing atomicity and durability (two of the ACID properties) in database systems. A write ahead log is an append-only auxiliary disk-resident structure used for crash and transaction recovery. The changes are first recorded in the log, which must be written to stable storage, before the changes are written to the database.The main functionality of a write-ahead log can be summarized as:Allow the page cache to buffer updates to disk-resident pages while ensuring durability semantics in the larger context of a database system.Persist all operations on disk until the cached copies of pages affected by these operations are synchronized on disk. Every operation that modifies the database state has to be logged on disk before the contents on the associated pages can be modifiedAllow lost in-memory changes to be reconstructed from the operation log in case of a crash.

## What are normalization and denormalization? Explain their differences.


#### The goal of normalization is to minimize data redundancy and dependency by organizing data into well-structured tables. Denormalization involves combining tables that have been normalized to improve query performance and simplify data retrieval.

## What is Multi-Version Concurrency Control (MVCC) in DBMS?


#### Multi-Version Concurrency Control is a technology, utilized to enhance databases by resolving concurrency problems and also data locking by preserving older database versions. When many tasks attempt to update the same piece of data simultaneously, MVCC causes a conflict and necessitates a retry from one or more of the processes.

## What is SQL Trigger?


#### A trigger is a stored procedure in a database that automatically invokes whenever a special event in the database occurs. By using SQL triggers, developers can automate tasks, ensure data consistency, and keep accurate records of database activities. For example, a trigger can be invoked when a row is inserted into a specified table or when specific table columns are updated.

## How can you take the backup of a database?

#### While the exact strategy varies widely between infrastructure, requirements, and data types, most database backup types fall into three major categories — full, differential, and incremental. Though some organizations leverage more advanced variations of these backups, knowing these three is good to get started.

### Full database backups

#### While almost every backup strategy aims to create a full database backup, in this case, a “full database backup” refers to a single process. In other words, if your backup strategy uses a full database backup, you make a complete backup every time you backup your database.

**Pros:** Making a complete copy of your database every time ensures all data is accounted for and shortens recovery times.  
**Cons:** Full database backups can be extremely resource-intensive, especially for frequent backups or on infrastructure with limited bandwidth.

### Incremental database backup

#### If a database only receives a few select updates between backups, it rarely makes sense to copy the entire database every time you create one.

Incremental database backups solve this problem by creating backups in small parts or increments rather than all at once. These increments are simply the changes since the last backup, with most organizations utilizing the “modified” timestamp on files to check which data was changed. 

Incremental backups are usually the more efficient solution. Leading tools like Fivetran utilize CDC replication to move large datasets in near-real time.

**Pros:** Incremental backups require very few resources, allowing for more frequent updates, real-time replication, and less disk space.  
**Cons:** May present a small room for error if some changed data isn’t captured. However, this is very rare.

### Differential database backup

#### Most organizations still make occasional full backups to ensure data integrity and accuracy. Differential backups make several incremental backups between each full backup to leverage the best of both worlds.

Here, each incremental backup is saved until the next full backup, allowing for a complete record of changes over a certain period. This provides similar accuracy as full data backups without consuming the same number of resources. 

**Pros:** Differential backups provide more detailed information about data changes without sacrificing as many resources as full backups.  
**Cons:** More backup copies still require more storage than incremental backups.


## Resources
#### https://www.techtarget.com/searchdatamanagement/definition/database

#### https://www.w3schools.com/sql/sql_intro.asp

#### https://en.wikipedia.org/wiki/MySQL

#### https://www.stackscale.com/blog/popular-database-management-systems/

#### https://cloud.google.com/learn/what-is-a-relational-database

#### https://unacademy.com/content/cbse-class-11/difference-between/dbms-and-rdbms/

#### https://testbook.com/key-differences/difference-between-primary-key-and-unique-key

#### https://www.w3schools.com/mysql/mysql_constraints.asp

#### https://dev.mysql.com/doc/refman/8.4/en/mysql-indexes.html

#### https://www.geeksforgeeks.org/difference-between-mysql-and-postgresql/

#### https://dzone.com/articles/how-to-handle-a-many-to-many-relationship-in-datab

#### https://en.wikipedia.org/wiki/Write-ahead_logging 

#### https://blog.purestorage.com/purely-educational/denormalized-vs-normalized-data/

#### https://www.geeksforgeeks.org/what-is-multi-version-concurrency-control-mvcc-in-dbms/

#### https://www.geeksforgeeks.org/sql-trigger-student-database/

#### https://www.fivetran.com/learn/database-backup


