```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value)) {
      //Some string operations
    }
  }
  return $data;
}

$data = [
  'a' => 1,
  'b' => ['c' => 2, 'd' => ['e' => 3]],
  'f' => 'some string'
];

$processedData = processData($data);
print_r($processedData);
```