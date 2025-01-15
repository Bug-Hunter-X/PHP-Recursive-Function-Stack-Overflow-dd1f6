# PHP Recursive Function Stack Overflow

This repository demonstrates a potential stack overflow error in a PHP recursive function that processes deeply nested arrays. The `processData` function recursively traverses an array and performs operations on its elements. If the array is excessively deep, the recursive calls can exceed the maximum recursion depth, leading to a stack overflow error.

The `bug.php` file contains the code exhibiting the issue.  The `bugSolution.php` file provides a solution implementing iterative processing to avoid stack overflow.
