```php
<?php
function calculateSum($a, $b) {
  // Explicit type checking and conversion
  $a = (int)$a;
  $b = (int)$b;
  return $a + $b;
}

$result = calculateSum(10, '20');
var_dump($result);
// Output: int(30)
?>
```