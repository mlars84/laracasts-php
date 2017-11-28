# The PHP Practitioner

- [laracast](https://laracasts.com/series/php-for-beginners)
- Basic Sytnax: opening - <?php
- Variables: $variableName;
  with strings: can use a var inside string with double quotes: `"Hello, $name";`

## PHP Data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

### PHP array
  - `$cars = array("Volvo","BMW","Toyota");`

### Constants
  - To create a constant, use the define() function.
  - A valid constant name starts with a letter or underscore (no $ sign before the constant name).
  - `define("GREETING", "Welcome to W3Schools.com!");`
  - Constants are automatically global and can be used across the entire script.

### [PHP Operators](https://www.w3schools.com/php/php_operators.asp)
  Arithmetic operators
  Assignment operators
  Comparison operators
  Increment/Decrement operators
  Logical operators
  String operators
  Array operators

  ### If/Else exactly like JS
  ```
  if (condition) {
    code to be executed if condition is true;
  } else {
    code to be executed if condition is false;
  }
  ```
### PHP Switch is identical to JS
  ```
  switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
  }
  ```
  

