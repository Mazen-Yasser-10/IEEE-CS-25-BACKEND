## Request lifecycle


### First Steps

#### The entry point for all requests to a Laravel application is the public/index.php file. All requests are directed to this file by your web server (Apache / Nginx) configuration. The index.php file doesn't contain much code. Rather, it is a starting point for loading the rest of the framework.
#### The index.php file loads the Composer generated autoloader definition, and then retrieves an instance of the Laravel application from bootstrap/app.php. The first action taken by Laravel itself is to create an instance of the application / service container.

### HTTP / Console Kernels

#### The method signature for the HTTP kernel's handle method is quite simple: it receives a Request and returns a Response. Think of the kernel as being a big black box that represents your entire application. Feed it HTTP requests and it will return HTTP responses.

### Service Providers

#### One of the most important kernel bootstrapping actions is loading the service providers for your application. Service providers are responsible for bootstrapping all of the framework's various components, such as the database, queue, validation, and routing components.

## Routing in Laravel


#### All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by Laravel using the configuration specified in your application's bootstrap/app.php file. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group, which provides features like session state and CSRF protection.

#### For most applications, you will begin by defining routes in your routes/web.php file. The routes defined in routes/web.php may be accessed by entering the defined route's URL in your browser. For example, you may access the following route by navigating to http://example.com/user in your browser

## Facades


#### Throughout the Laravel documentation, you will see examples of code that interacts with Laravel's features via "facades". Facades provide a "static" interface to classes that are available in the application's service container. Laravel ships with many facades which provide access to almost all of Laravel's features.

#### Laravel facades serve as "static proxies" to underlying classes in the service container, providing the benefit of a terse, expressive syntax while maintaining more testability and flexibility than traditional static methods. It's perfectly fine if you don't totally understand how facades work - just go with the flow and continue learning about Laravel.

## Blade Templates and how it works


#### Blade is Laravel’s built-in template engine that allows developers to write dynamic HTML with embedded PHP in a more readable and maintainable way. Unlike traditional PHP templates, Blade provides template inheritance and reusable components, making development much more efficient.

## What is the ORM ,why it is so useful


#### An Object-Relational Mapper (ORM) is a tool that bridges the gap between an application’s object-oriented programming language and a relational database. It allows developers to interact with the database using high-level programming abstractions rather than writing raw SQL queries. In essence, an ORM maps objects in code (such as classes and attributes) to database tables and columns, enabling developers to work with data as if they were working with native objects rather than rows and tables.

### Advantages of Using an ORM

#### Improved Productivity and Code Readability
#### ORMs allow developers to work with familiar language constructs (objects and methods), leading to quicker development cycles and more readable, maintainable code. Instead of writing SQL, you interact with database data as objects.

#### Database Abstraction and Portability
#### ORMs abstract away database-specific details, allowing the same code to work with different database systems (e.g., MySQL, PostgreSQL, SQLite). If you need to switch databases, you often need only minimal changes in your codebase, if any.

#### Automated Schema Management
#### Many ORMs support automatic table creation and migrations, which help manage database schema changes as the application evolves. This reduces the need for manually handling schema scripts and improves version control over the database structure.

#### Reduction of Boilerplate Code
#### ORMs can reduce the amount of repetitive code needed for common operations, like inserting or updating records. Instead of writing complex SQL queries, you can use simple ORM methods, making code concise and easy to maintain.

#### Enhanced Security
#### By avoiding direct SQL and using ORM functions to interact with the database, ORMs inherently protect against SQL injection attacks. They use parameterized queries or prepared statements, which help prevent attackers from injecting malicious SQL code.

#### Automatic Query Optimization and Caching
#### Many ORMs provide built-in optimizations like lazy loading (loading data only when necessary), eager loading (loading related data in advance), and caching mechanisms that can significantly improve performance without the need for manual optimization.

#### Easier Database Testing
#### ORMs enable easier testing by allowing developers to use in-memory databases (like SQLite in memory mode) or mock databases that are easy to set up and manage within tests. This makes it simpler to isolate database behavior in unit tests without needing a full database setup.

## Defining relationships in Eloquent models


#### Database tables are often related to one another. For example, a blog post may have many comments, or an order could be related to the user who placed it. Eloquent makes managing and working with these relationships easy, and supports several different types of relationships:

##### 1 - One To One
##### 2 - One To Many
##### 3 - Many To Many
##### 4 - Has Many Through
##### 5 - Polymorphic Relations
##### 6 - Many To Many Polymorphic Relations

### Defining Relationships
#### Eloquent relationships are defined as methods on your Eloquent model classes. Since, like Eloquent models themselves, relationships also serve as powerful query builders, defining relationships as methods provides powerful method chaining and querying capabilities.

## Attaching, syncing, detaching related records


#### 1 - attach
#### The attach method is primarily used in many-to-many relationships to add records to the pivot table that connects two models. 

#### 2 - detach
#### Conversely, the detach method allows we to remove records from a many-to-many relationship's pivot table.

#### 3 - sync
#### The sync method is a powerful way to synchronize the records in a many-to-many relationship. It takes an array of related model IDs as its argument and ensures that the pivot table contains only those records. Any existing records not in the provided array will be removed.

## The N+1 query problem in Laravel


#### The N+1 query problem occurs when an application makes one initial query to the database followed by an additional query for each result obtained from the first query. This typically happens in object-relational mapping (ORM) frameworks when dealing with relationships between models.

## Resources

#### https://laravel.com/docs/12.x/lifecycle#lifecycle-overview

#### https://laravel.com/docs/12.x/routing#the-default-route-files

#### https://laravel.com/docs/12.x/facades#introduction

#### https://dev.to/icornea/laravel-blade-template-engine-a-beginners-guide-54bi

#### https://medium.com/@karthickrajaraja424/what-is-the-purpose-of-an-orm-and-what-are-its-advantages-ae3882e9e91e

#### https://laravel.com/docs/5.5/eloquent-relationships

#### https://medium.com/@rajvir.ahmed.shuvo/understanding-sync-attach-and-detach-in-laravel-managing-relationships-with-eloquent-394a7cf7fabd

#### https://loadforge.com/guides/optimizing-laravel-applications-by-detecting-n1-queries