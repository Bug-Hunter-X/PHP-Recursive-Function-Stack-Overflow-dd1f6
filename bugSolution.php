```php
function processData(array $data): array {
  $stack = [$data];
  while (!empty($stack)) {
    $current = array_pop($stack);
    foreach ($current as $key => $value) {
      if (is_array($value)) {
        $stack[] = $value;
      } else if (is_string($value)) {
        // Some string operations
      }
    }
  }
  return $data; // Return the original array (modified in place)
}

$data = [
  'a' => 1,
  'b' => ['c' => 2, 'd' => ['e' => 3]],
  'f' => 'some string'
];

$processedData = processData($data);
print_r($processedData);
```