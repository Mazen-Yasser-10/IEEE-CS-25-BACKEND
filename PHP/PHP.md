## what is PHP ?


#### PHP is an acronym for "PHP: Hypertext Preprocessor"
#### PHP is a widely-used, open source scripting language
#### PHP scripts are executed on the server
#### PHP is free to download and use

## what are the three main error types in PHP ?


#### Type of Errors in PHP
#### In PHP, all types of errors can be classified into three main categories: syntax errors, runtime errors, and logical errors.

#### Syntax errors: Syntax errors are caused by mistakes in the code syntax. These errors occur when the PHP parser encounters an unexpected or incorrect statement or expression. For example, a missing semicolon or a misspelled function name can cause a syntax error.

#### Runtime errors: Runtime errors occur during the execution of the code. These errors are usually caused by factors such as incorrect function arguments, incorrect variable types, or memory-related issues. Examples of runtime errors include division by zero, undefined function calls, or array out-of-bounds errors.

#### Logical errors: Logical errors occur when the code does not behave as expected, even though it is syntactically and semantically correct. These errors are usually caused by incorrect or incomplete logic in the code.

## echo vs print


#### The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.”

## 🌟sensitivity in PHP


#### PHP is a case-sensitive language, which means that variables, function names, and other identifiers are distinguished by their capitalization. This means that “hello” and “Hello” are considered different variables in PHP.

## programming language vs scripting language.


#### The primary distinction between these two types of languages is that the former is typically interpreted, meaning that the code is executed line by line, rather than compiled into machine code and run as an executable file. Hence, with scripting languages, programmers can make changes to the code and test it without having to recompile the entire program.

#### Compiled programming languages, on the other hand, are translated into machine code and saved as an executable file, which can be run without the need for an interpreter. Programming languages are often more powerful and efficient than scripting languages, but they can also be more complex and harder to learn. Examples of compiled programming languages include C, Java, and C++.

#### Scripting languages are used for smaller tasks, whereas programming languages help build large and complex software applications, such as operating systems and enterprise-level software. They are also used for developing lower-level system software, such as device drivers and system utilities.

## dynamically typed vs statically typed language.


#### There are two main differences between dynamic typing and static typing that you should be aware of when writing transformation scripts.

#### First, dynamically-typed languages perform type checking at runtime, while statically typed languages perform type checking at compile time. This means that scripts written in dynamically-typed languages (like Groovy) can compile even if they contain errors that will prevent the script from running properly (if at all). If a script written in a statically-typed language (such as Java) contains errors, it will fail to compile until the errors have been fixed.

#### Second, statically-typed languages require you to declare the data types of your variables before you use them, while dynamically-typed languages do not.

## Assign by Value VS Assign by Reference.


### Pass by Value:
#### A copy of the actual data (value) is passed to the function.
#### Changes made to the parameter inside the function do not affect the original data.
#### Used in languages like C, C++ for primitive types.

### Pass by Reference:
#### A reference (memory address) to the original data is passed to the function.
#### Changes made to the parameter inside the function affect the original data.
#### Used in languages like C, C++ for non-primitive types and objects.

## Resources 

#### https://www.w3schools.com/php/php_intro.asp

#### https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php/

#### https://www.codecademy.com/forum_questions/55d1e384e39efe0f440003ea

#### https://tutorialspoint.learnerstv.in/php-case-sensitivity/

#### https://www.unosquare.com/blog/scripting-and-programming-languages-differences-advantages-and-optimal-use-cases/

#### https://www.linkedin.com/pulse/static-dynamic-typing-what-main-differences-parallelstaff-sgore

#### https://docs.oracle.com/cd/E57471_01/bigData.100/extensions_bdd/src/cext_transform_typing.html

#### https://www.geeksforgeeks.org/pass-by-reference-vs-value-in-python/