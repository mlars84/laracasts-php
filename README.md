# the PHP Practitioner

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
  - A valid constant name starts with a letter or underscore (no $ sign before themeoasdf constant name).
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
### associative array is like an array of objects
```
$person = [
  'age' => 33,
  'name' => 'Matt',
  'beard' => true
];
```

### Ternary Operator in PHP
```
<?= $task['completed] ? 'Completed' : 'Incomplete'; ?>
// If $task is completed(boolean true or false) ?/true echo 'Completed', ?/false echo 'Incomplete'
// Ternary operator logic is the process of using "(condition) ? (true return value) : (false return value)" statements to shorten your if/else structures.
```

### Visibility 

The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing the declaration with the keywords public, protected or private. Class members declared public can be accessed everywhere. Members declared protected can be accessed only within the class itself and by inheriting and parent classes. Members declared as private may only be accessed by the class that defines the member.

### Property Visibility

Class properties must be defined as public, private, or protected. If declared using var, the property will be defined as public.

