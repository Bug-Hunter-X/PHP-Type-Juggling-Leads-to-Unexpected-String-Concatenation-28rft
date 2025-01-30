# PHP Type Juggling Bug

This example demonstrates a common pitfall in PHP: type juggling.  When you perform arithmetic operations with a mix of numeric and string types, PHP's loose typing can lead to unexpected string concatenation instead of numerical addition.  This can be difficult to debug if you're not aware of how PHP handles type coercion.

The `bug.php` file contains code that exhibits this behavior, while `bugSolution.php` provides a corrected version that avoids the issue.  The solution emphasizes the importance of explicit type checking and conversion for robust code.

## How to Reproduce

1.  Clone this repository.
2.  Run `bug.php` using a PHP interpreter.
3.  Observe the unexpected string concatenation in the output.
4.  Compare the output with the expected numerical addition in `bugSolution.php`.